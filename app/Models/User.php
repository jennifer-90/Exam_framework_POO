<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'email', 'password', 'lastlogin', 'admin'
    ];

    public function getAuthIdentifierName() {
        return 'username';
        /* - champs du formulaire & le champs de la db - */
    }

    public function getAuthIdentifier() {

    }

    public function getAuthPassword() {
        return $this->password;
    }

    public function getRememberToken() {
        // TODO: Implement getRememberToken() method.
    }

    public function setRememberToken($value) {
        // TODO: Implement setRememberToken() method.
    }

    public function getRememberTokenName() {
        // TODO: Implement getRememberTokenName() method.
    }
}
