<?php

namespace App\Http\Controllers\Auth;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Repositories\UserRepository;

class LoginController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function signUp(Request $request)
    {

        try {

            $data = new UserResource($this->userRepository->signUp($request));

            return response()->json(['data' => $data, 'message' => __('messages.client created')], 201);

        } catch (Exception $e) {

            return response()->json(['message' => $e->getMessage()], 500);
        }

    }

    public function login(Request $request)
    {

        try {
            $user = new UserResource($this->userRepository->login($request));

            return response()->json(['data' => $data, 'message' => __('messages.login success')], 200);

        } catch (Exception $e) {

            return response()->json(['message' => $e->getMessage()], 500);
        }



    }
}
