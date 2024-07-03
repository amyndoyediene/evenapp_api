<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retourner tous les utilisateurs
        return User::all();
    }

    public function show($id)
    {
        // Retourner un utilisateur spécifique
        return User::find($id);
    }
}
