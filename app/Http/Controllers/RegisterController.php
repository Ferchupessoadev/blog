<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('register.index');
    }

    public function store(StoreRegisterRequest $request): View
    {
        $user = User::query()->create($request->all());

        return view('register.index', [
            'user' => $user,
            'success' => true,
            'message' => 'Registrado correctamente'
        ]);
    }
}
