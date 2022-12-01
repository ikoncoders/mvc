<?php 

namespace App\Controllers\Auth;

use App\Models\User;
use App\Controllers\Controller;
use Ikonc\Validation\Validator;

 class RegisterController extends Controller
{
    public function index()
    { 
        // $users = User::all()->get();
        return view('auth.register');
    }
    
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validator = new Validator();
        $validator->setRules([
            'name'     => 'required',  //|alnum|between:8,32
            'username' => 'required|unique:users,username',  //alnum|between:8,32|
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|between:6,32|confirmed',  //alnum|
            'password_confirmation' => 'required|between:6,32' //alnum|
        ]);

        // $validator->setRules([
        //     'name'     => 'required|alnum|between:8,32',  
        //     'username' => 'required|alnum|between:8,32|unique:users,username',   
        //     'email'    => 'required|email|unique:users,email',
        //     'password' => 'required|alnum|between:6,32|confirmed',  
        //     'password_confirmation' => 'required|alnum|between:6,32'  
        // ]);


        $validator->setAliases([
            'password_confirmation' => 'Password confirmation'
        ]);

        $validator->make(request()->all());

        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());
            app()->session->setFlash('old', request()->all());
            return back();
        }

        User::create([
            'username' => request('username'),
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        app()->session->setFlash('success', 'Registered sucessfully :D');

        return back();
    }

    public function edit($id)
    {
        return view('auth.register');
    }

    public function update($id)
    {
        return view('auth.register');
    }

    public function delete($id)
    {
        return view('auth.register');
    }
}