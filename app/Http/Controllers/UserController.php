<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //loads users into the user table from admin side
    public function index(){
        $users = User::select('id', 'user_type','name', 'email', 'created_at')->get();
        return view('admin.manageU', ['users' => $users]);
    }
    
    //deletes the user from the database
    public function delete(Request $request){
        User::find($request->input('user_id'))->delete();
        return redirect('admin/manageU');
    }

}
