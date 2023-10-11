<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(LoginUserRequest $request): RedirectResponse {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            UserController::updateLastLogin($user->id);

            /* - Auth ==> appel les méthodes de l'interface Authenticatable ==> model/user appel cette interface et
            utilise ces méthodes - */

            session(['userId' => $user->id, 'admin' => $user->admin]);

            return redirect()->route('profil', [$user->id])->with('success', 'Coucou ' . $user->username . ' !');
        }

        return back()->withErrors([
            'username' => 'username pas correct',
            'password' => 'password pas correct'
        ])->onlyInput('username');
    }


    public function logout(Request $request): RedirectResponse {
        Auth::logout();

        $userBye = UserController::getUserAll(session('userId'));

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('welcome')->with('success', 'ByeBye ' . $userBye->username . ' !');
    }
}
