<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserControllerService;
use App\Models\User;
class AuthController extends Controller

{
     //Inyección de dependencias

     protected $userService;

     public function __construct(UserControllerService $userService)
     {
        $this->userService = $userService;
     }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('users.index', ['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $userData = new User();
       $userData->name = $request->input('name');
       $userData->email = $request->input('email');
       $userData->password = $request->input('password');
       $userData->type = $request->input('type');
       $user->$this->userService->createUser($userData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
