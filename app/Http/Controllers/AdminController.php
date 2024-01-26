<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function Admin()
    {

        // $users = DB::table('users')->paginate(6);
        $users = DB::table('users')
                        ->orderBy('id')
                        ->limit(6)
                        ->simplePaginate(6);

        return view('AdminPage', ['users' => $users]);


    }
    public function SingleUser($id)
 {
    $users = DB::table('users')->where('id', $id)->first();

    if(!$users) {
        return redirect('/admin')->with('message', 'User not found');
    }

    return view('SingleUser', ['data' => $users]);
 }





 public function addUser(Request $request)
 {
     // Validate the request data
     $request->validate([
         'name' => 'required',
         'email' => 'required|email|unique:users',
         'password' => 'required|min:6',
     ]);

     // Hash the password before storing in the database
     $hashedPassword = bcrypt($request->password);

     // Insert user data into the 'users' table
     $user = DB::table('users')->insert([
         'name' => $request->name,
         'email' => $request->email,
         'password' => $hashedPassword,
     ]);

     if ($user) {
         return redirect('/admin')->with('message', 'User added successfully');
     } else {
         return redirect('/admin')->with('message', 'User not added');
     }
 }



public function editUser($id)
{
    $user = DB::table('users')->where('id', $id)->first();

    if (!$user) {
        return redirect('/admin')->with('message', 'User not found');
    }

    return view('EditUser', ['user' => $user]);
}

public function updateUser(Request $request, $id)
{
    $updated = DB::table('users')->where('id', $id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);

    if ($updated) {
        return redirect('/admin')->with('message', 'User updated successfully');
    } else {
        return redirect('/admin')->with('message', 'Error updating user');
    }
}


public function DeleteUser($id) {

    $users = DB::table('users')->where('id', $id)->delete();


    if($users){
        return redirect('/admin')->with('message', 'User deleted successfully');
    }else{
        return redirect('/admin')->with('message', 'User not found');
    }
}


public function DeleteAllUsers()
{
    // $deleted = DB::table('users')->truncate();

    DB::table('users')->truncate();

    return redirect('/admin')->with('message', 'All users deleted successfully');
}



}
