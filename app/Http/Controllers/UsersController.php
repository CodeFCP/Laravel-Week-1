<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function index(){

        $users =[
          '0'=>['first_name' => 'Merline',
                'last_name'=>'Raymond',
                'age'=>'26'],
          '1'=>['first_name' => 'Yvelande',
                'last_name'=>'Raymond',
                'age'=>'21']


        ];

        return $users;

    }

    public function create(){
      return view('admin.users.create');
    }
    public function store(Request $request){
      User::create($request->all());
      return 'success';
    }
}
