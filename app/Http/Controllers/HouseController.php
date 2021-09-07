<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    public function index()
    {
        //Read

        $data = House::all();
        
        // dd($posts);
        // $JSONfile = json_encode($posts);
        // dd($JSONfile);
        return view('admin.homes.main',compact('data'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }


    public function create()
    {
        //CREATE
        return view('admin.homes.addhome');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //CREATE
        // dd($request->all());
        $request->validate([
            'owner_name' => 'required',
            'owner_contact' => 'required',
            'home_capacity' => 'required',
            'available_space' => 'required',
        ]);
        
        if ($file = $request->file('image')) {
            $request->validate([
                'image' =>'mimes:jpg,jpeg,png,bmp'
            ]);
            $image = $request->file('image');
            $imgExt = $image->getClientOriginalExtension();
            $fullname = time().".".$imgExt;
            $result = $image->storeAs('images/homes',$fullname);
            }
    
            else{
                $fullname = 'image.png';
            }

            $data = new House();
            $data->owner_name = $request->owner_name;
            $data->owner_contact = $request->owner_contact;
            $data->home_capacity = $request->home_capacity;
            $data->available_space = $request->available_space;
            $data->image = $fullname;
            $data->save();

        if($data->save()){
            //Redirect with Flash message
            return redirect('/admin/home')->with('status', 'Home added Successfully!');
        }
        else{
            return redirect('/admin/home/create')->with('status', 'There was an error!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Read individual
        // $posts = Post::find(3)->get();
        $data = House::where('id',$id)->first();
        return view('admin.tanker.show',compact('data'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Update View
        
        $data = House::where('id',$id)->first();
        return view('admin.homes.edithome',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = House::find($id);
        if ($file = $request->file('image')) {
            $request->validate([
                'image' =>'mimes:jpg,jpeg,png,bmp'
            ]);
            $image = $request->file('image');
            $imgExt = $image->getClientOriginalExtension();
            $fullname = time().".".$imgExt;
            $result = $image->storeAs('images/houses',$fullname);
            }
    
            else{
                $fullname = $data->image;
            }

        //Update
        $data = House::find($id);
        $data->owner_name = $request->owner_name;
        $data->owner_contact = $request->owner_contact;
        $data->home_capacity = $request->home_capacity;
        $data->available_space = $request->available_space;
        $data->image=$fullname;

        if($data->save()){
            return redirect('/admin/home')->with('status', 'home was edited Successfully!');
        }
        else{
            return redirect('/admin/home/$id/edit')->with('status', 'There was an error');

        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete
        $data = House::find($id);
        if($data->delete()){
            return redirect('/admin/home')->with('status', 'Home was deleted successfully');
        }
        else return redirect('/admin/home')->with('status', 'There was an error');

        
    }
    public function Details($id)
    {
        $data = House::find($id);
        return view('housedetails',compact('data'));
    }
}
