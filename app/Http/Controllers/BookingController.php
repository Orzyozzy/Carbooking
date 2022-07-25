<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Bookings;
use DB;
use DateTime;

class BookingController extends Controller
{
   
 
    // save record
    public function addData(Request $request)
    {
        try{
        $book = new Bookings;
        $book->name       = $request->name;
        $book->contact_number      = $request->contact_number;
        $book->engine_type   = $request->engine_type;
        $book->license_details   = $request->license_details;
        $book->book       = $request->book;
        $book->date     = $request->date;
        $book->info           = $request->info;
        $book->save();

        DB::commit();
            Toastr::success('Booked successfully, Please Wait for Confirmation Thanks','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Booked Failed. Try Again','Error');
            return redirect()->back();
    }}

}
