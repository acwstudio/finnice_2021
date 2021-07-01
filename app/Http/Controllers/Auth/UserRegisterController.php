<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Class UserRegisterController
 * @package App\Http\Controllers\Auth
 */
class UserRegisterController extends Controller
{
    /**
     * @param UserRegisterRequest $request
     * @return Model|User
     */
    public function register(UserRegisterRequest $request): Model|User
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => \Hash::make($request->input('name')),
        ]);

        return $user;
    }
}
