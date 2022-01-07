<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extension;

class ExtsController extends Controller
{
    public function index() {

        return view('main.submit');
    }


    public function store(Request $request)
    {
        $request->validate([
            'site_name' => 'required',           
            'address' => 'required',        
            'city' => 'required',            
            'image' => 'required|mimes:jpeg,png,jpeg|max:50087'
        ]);

        $imageName = time() . '-' . $request->site_name . '.' . $request->image->extension();

        $request->image->move(public_path('preimage'), $imageName);

        $meds = new Extension;
        $meds->site_name = $request->input('site_name');
        $meds->lat = $request->input('address');
        $meds->lga = $request->input('lga');
        $meds->city = $request->input('city');
        $meds->image_path = $imageName;      
        $meds->save();

        return redirect('main');
    }
}
