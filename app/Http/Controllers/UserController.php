<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index() /* - Affiche la liste des copains- */ {
        $users = User::all();
        return view('user_list', ['users' => $users]);
    }

    public function create() /* - Affiche mon formulaire de cretation de compte - */ {
        return view('create');
    }

    public function store(StoreUserRequest $request) /* - creation - Validation des infos du formulaire + envoie db OU
 erreur -
  */ {
        $validated = $request->validated();

        if(count(User::all()) == 0){
            $validated['admin'] = 1;
        }

        DB::table('users')->insert([
            'username'   => $validated['username'],
            'password'   => bcrypt($validated['password']),
            'email'      => $validated['email'],
            'lastlogin'  => now(),
            'created_at' => now(),
            'admin' => $validated['admin']??0 /* si le champs n'existe pas, alors il mettra directement 0 dedans*/
        ]);



        return redirect()->route('login')->with('success', 'Bienvenue chez nous, vous pouvez désormais vous connecter');
    }

    public static function updateLastLogin($id) {

        $updateLastlogin = DB::table('users')->where('id', '=', $id)->update(['lastlogin' => now()]);
        if ($updateLastlogin) {
            return true;
        } else {
            return false;
        }
    }

    public function show(int $id) /* - Affiche le profil - TESTER DE REMETTRE model/user au lieu de int */ {

        if (session('userId') == $id) {
            $profileUser = DB::table('users')->select('id', 'username', 'email', 'lastlogin', 'admin', 'created_at')->find($id);

            $user            = new \stdClass();
            $user->id        = $profileUser->id;
            $user->nom       = $profileUser->username;
            $user->email     = $profileUser->email;
            $user->connexion = $profileUser->lastlogin;
            $user->admin     = ($profileUser->admin == 1) ? 'Oui' : 'Non';
            $user->creation  = $profileUser->created_at;


            return view('profile', ['user' => $user]);
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user) /* - Affiche le formulaire de update - */ {
        return view('update', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, $id) {

        $validator = $request->validated();

        if (session('userId') == $id) {

            $user = User::find($id);

            if (!empty($validator['o_password'])) {

                if (Hash::check($validator['o_password'], $user->password)) {

                    if (isset($validator['n_password']) && !empty($validator['n_password'])) {

                        $validator['password'] = Hash::make($validator['n_password']);
                    }

                    $user->update($validator);

                    return redirect()->route('profil', [$user->id])->with('success', 'Modification réussie');

                } else {
                    return redirect()->back()->with('danger', 'L\'ancien mot de passe n\'est pas bon');
                }

            }
            return redirect()->back()->with('danger', 'Votre ancien mot de passe est vide');

        } else {
            return redirect()->back()->with('danger', 'Vous ne pouvez pas modifier ce profil');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user) {
        //
    }

    public function exportProfile() {

        $userId = session('userId'); // Récupérez l'ID de l'utilisateur à partir de la session

        if ($userId) {
            $user = User::find($userId);

            if ($user) {
                $profileData = [
                    'id'       => $user->id,
                    'username' => $user->username,
                    'email'    => $user->email,
                ];

                $json     = json_encode($profileData);
                $filename = 'profile.json';

                $tempPath = tempnam(sys_get_temp_dir(), 'profile_');
                file_put_contents($tempPath, $json);

                return response()->download($tempPath, $filename, ['Content-Type' => 'application/json'])
                    ->deleteFileAfterSend(true); // Supprime le fichier temporaire après le téléchargement.
            }
        }
        return redirect()->back()->with('danger', 'Impossible d\'exporter les données du profil.');

    }


    public static function getUserAll(int $id) {
        $profileUser = DB::table('users')->find($id);

        return $profileUser;
    }
}
