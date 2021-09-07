<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\House;
use Auth;

class BookingController extends Controller
{
    //
public function index()
{
    $data=booking::where('status','=','pending')->get();
    return view('admin.Orders.orders',compact('data'));
}

public function confirmedbookings()
{
    $data=booking::where('status','=','confirmed')->get();
    return view('admin.Orders.confirmedbookings',compact('data'));
}
public function CheckedOut($id, $house_id)
{
    $data = booking::find($id);
    $data2=House::find($house_id);
  
    if($data && $data2)
    {
        $data->status='CheckedOut';
        $data2->available_space=$data2->available_space + $data->required_space;
    }
    $data->save();
    $data2->save();
    if( $data->save() &&  $data2->save())
    {
        return redirect('/admin/bookings')->with('status', 'Checked Out Successfully!');
    }

}


public function BookingsHistory()
{
    $data=booking::where('status','=','CheckedOut')->get();
    return view('admin.Orders.bookingshistory',compact('data'));
}



     function Store(Request $request)
    {
        //CREATE
        // dd($request->all());
        $request->validate([
            'user_name' => 'required',
            'user_id' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'required_space' => 'required',
            'house_id' => 'required',
        ]);

           
            $data = new booking();
            $data->user_name = $request->user_name;
            $data->user_id = $request->user_id;
            $data->contact = $request->contact;
            $data->address = $request->address;
            $data->secondary_contact = $request->secondary_contact;
            $data->required_space = $request->required_space;
            $data->house_id = $request->house_id;
            $data->save();

        if($data->save()){
            //Redirect with Flash message
            return redirect('/myorders')->with('status', 'Home booked Successfully!');
        }
        else{
            return redirect('/')->with('status', 'There was an error!');
        }

    }


public function MyOrders()
{
    $user = Auth::id();
    $orders = booking::where('user_id', $user)->get();
    return view('user.mybooking',compact('orders'));


}


public function destroy($id)
{
    //Delete
    $data = booking::find($id);
    if($data->delete()){
        return redirect('/myorders')->with('status', 'Home was deleted successfully');
    }
    else return redirect('/myorders')->with('status', 'There was an error');

    
}
public function destroybyadmin($id)
{
    //Delete
    $data = booking::find($id);
    if($data->delete()){
        return redirect('/admin/bookings')->with('status', 'Booking was deleted successfully');
    }
    else return redirect('/admin/bookings')->with('status', 'There was an error');

    
}

public function confirmbooking($id, $house_id)
{
    $data = booking::find($id);
    $data2=House::find($house_id);
   
              
    if($data && $data2)
    {
       if($data->required_space<=$data2->available_space)
       {
        $data->status='confirmed';
        $data2->available_space=$data2->available_space - $data->required_space;
       }
       else
       {
        $data->status='HouseFull';
       }
    }
    $data->save();
    $data2->save();
    if($data->save() &&  $data2->save())
    {
     return redirect('/admin/bookings')->with('status', 'Order Confirmed Successfully!');
    }
   
    
        

 
}

public function cancelbooking($id)
{
    $data = booking::find($id);
              
    if($data)
    {
        $data->status='canceled';
    }
    $data->save();
    if($data->save())
    {
     return redirect('/admin/bookings')->with('status', 'Order Confirmed Successfully!');
    }
   
    
        

 
}


}
