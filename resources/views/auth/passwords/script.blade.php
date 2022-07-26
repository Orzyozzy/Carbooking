<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use DB;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function saveBook(Request $request)
    {
        $request->validate([
            'name'             =>'required|max:100',     
            'contact_number'   =>'required|min:11|numeric',
            'engine_type'      =>'required',
            'license_details'  => 'required',
            'book'             => 'required',
            'date'             => 'required|date_format:d-m-Y',
            'info'             => 'required|max:255',
            
            
            
        ]);
        DB::beginTransaction();
        try{

            $name              = $request->name;
            $contact_number    = $request->contact_number;
            $engine_type       = $request->engine_type;
            $license_details   = $request->license_details;
            $book              = $request->book;
            $date              = $request->date;
            $info              = $request->info;

            
            $booking = new Booking();
            $booking->name              = $name;
            $booking->contact_number    = $contact_number;
            $booking->engine_type       = $engine_type;
            $booking->license_details   = $license_details;           
            $booking->book              = $book;
            $booking->date              = $date;
            $booking->info              = $info;
            $booking->save();
            
            DB::commit();
            Toastr::success('Create new Reminder successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Add Reminder fail :)','Error');
            return redirect()->back();
        }
    }
}
