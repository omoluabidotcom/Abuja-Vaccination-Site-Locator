<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;
use Illuminate\Support\Facades\DB;

class MedsController extends Controller
{   
    public function __construct() {

        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $vacc = DB::select('select distinct unique_id from vaccines'); , ['vacc' => $vacc]

        return view('main.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'site_name' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'lga' => 'required',
            'city' => 'required'        
            // 'image' => 'required|mimes:jpeg,png,jpeg|max:50087'
        ]);

        $imageName = time() . '-' . $request->site_name . '.' . $request->image->extension();

        $request->image->move(public_path('Images'), $imageName);

        $meds = new Vaccine;
        $meds->site_name = $request->input('site_name');
        $meds->lat = $request->input('lat');
        $meds->lng = $request->input('lng');
        $meds->lga = $request->input('lga');
        $meds->city = $request->input('city');
        $meds->image_path = $imageName;
        $meds->unique_id = $request->input('unique_id');
        $meds->save();

        return redirect('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $results = DB::select('select * from vaccines where unique_id = ?', [$id]);

        $main = array();

        for($i = 0; $i < count($results); $i++ ) {

            $pusher = array('data' => array('lat' => $results[$i]->lat, 'lng' => $results[$i]->lng, 'sitename' => $results[$i]->site_name));
            array_push($main, $pusher);

        }

        return view('main.show', ['main' => $main]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
