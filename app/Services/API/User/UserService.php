<?php


namespace App\Services\API\User;


use App\Models\User;
use Illuminate\Http\Request;

class UserService
{
    public function createUser(Request $request): User
    {
        return User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    }
}
