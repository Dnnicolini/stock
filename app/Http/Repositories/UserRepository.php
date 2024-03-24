<?php

namespace App\Http\Repositories;

use App\Models\User;
use App\Http\Repositories\BaseRepository;


class UserRepository extends BaseRepository
{

    protected $modelClass = User::class;

    public function signUp(UserRequest $request)
    {
        $this->create($request->all())->save();
    }

    public function login(UserRequest $request)
    {

    }
}
