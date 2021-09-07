<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data=User::all();
        return view('admin.Users.main',compact('data'));
    }

    public function create()
    {
        //CREATE
        return view('admin.Users.create');
        
    }

    public function store(Request $request)
    {
        //CREATE
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'email' => ['required',],
            'password' => ['required'],
            'role' => ['required'],
            
            
        ]);
        

        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' =>$request->role
           
            
        ]);

        if($data){
            //Redirect with Flash message
            return redirect('/admin/users')->with('status', 'User created Successfully!');
        }
        else{
            return redirect('/admin/users/create')->with('error', 'There was an error!');
        }

    }

    
    function edit($id)
    {
        //Update View
        $data = User::where('id',$id)->first();
        return view('admin.Users.edit',compact('data'));
    }

    function update(Request $request, $id)
    {
        //Update
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->role =$request->role;
       

       
       

        if($data->save()){
            return redirect('/admin/users')->with('status', 'User Updated Successfully!');
        }
        else{
            return redirect('/admin/users/$id/edit')->with('status', 'There was an error');

        }
        
    }

    function destroy($id)
    {
        //Delete
        $data = User::find($id);
        if($data->delete()){
            return redirect('/admin/users')->with('status', 'User was deleted successfully');
        }
        else return redirect('/admin/users')->with('status', 'There was an error');

        
    }
}
