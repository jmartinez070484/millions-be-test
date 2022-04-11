<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $this->authorize('viewAny', User::class);

        return User::paginate(15);
    }

    public function show($userId){
        $user = User::findOrFail($userId);
        $this->authorize('view', [User::class, $user]);

        return $user;
    }
}
