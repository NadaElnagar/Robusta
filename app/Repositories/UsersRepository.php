<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersRepository
{

    public function create($data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


}
