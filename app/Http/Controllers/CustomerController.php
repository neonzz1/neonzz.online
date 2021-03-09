<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customerdir;

class CustomerController extends Controller
{
    public function profile($user) {
        $user = Customerdir::find($user);
        return view('Profile',  ['username' => $user]);
    }

    public function create() {
        return view('register');
    }

    public function store(){
        $Register = new CustomerDir();

        $Register->username = request('username');
        $Register->email = request('email');
        $Register->password = request('$psw'); //TODO passwordhash
        $Register->name = request('name');

        $Register->save();

        return redirect('/');
    }
}
