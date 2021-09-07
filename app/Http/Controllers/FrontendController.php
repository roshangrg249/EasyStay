<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use Auth;
use App\Models\booking;

class FrontendController extends Controller
{
    function Homes()
    {
        $data= House::all();
        return view('allhomes',compact('data'));
    }
    function BookHome($id)
    {
        $user = Auth::user();
        $data=House::find($id);
            if ($user== NULL) {
                return redirect('/login');
            }
            else {
                
                return view('book',compact('data'));
            }
        

    }
}