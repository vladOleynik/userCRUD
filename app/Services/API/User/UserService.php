<?php


namespace App\Services\API\User;


use App\Models\User;
use Illuminate\Http\Request;

class UserService
{
    public function createUser(Request $request): User
    {
        return User::create($request->all());
    }

    public function updateUser(Request $request, int $idUser): User
    {

        $user = User::find($idUser);
        $user->update($request->all());
        return $user;
    }
}
