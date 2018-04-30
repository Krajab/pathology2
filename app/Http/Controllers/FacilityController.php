<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use  App\Models\Facility;

use Illuminate\Support\Facades\Redirect;

use Session;

class FacilityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //List all facilities
        $facilities = Facility::orderBy('facility', 'asc')->get();

        //Load the view and pass the facility list
        return view('settings.facility.index')->with('facilities',$facilities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        //validate data 
        $validation=$this->validate($request, [           
            'facility' => 'required|max:50',
            'regional_hub' => 'required|max:50',
            'district' => 'required|max:50',
            
        ]);

        $facility = new facility;

        $facility->facility = $request->facility;
        $facility->regional_hub = $request->regional_hub;
        $facility->district = $request->district;

        $facility->save();

        // redirect
        Session::flash('message', 'Successfully added the a facility!');
        Session::flash('alert-type', 'success');
            
        return Redirect::to('facility');
    }

    public function edit($id)
    {
        $facility = facility::find($id);

        return view('settings.facility.edit')->with('facility', $facility);
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

      //validate data
      $validation=$this->validate($request, [
          'facility' => 'required|max:50',
          'regional_hub' => 'required|max:50',
        'district' => 'required|max:50',
      ]);


      $facility = Facility::find($id);

      $facility->facility = $request->facility;
      $facility->regional_hub = $request->regional_hub;
      $facility->district = $request->district;
      $facility->save();

        // redirect
        Session::flash('message', 'Facility information   successfully updated!');
        Session::flash('alert-type', 'success');

        return Redirect::to('facility');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       
        // delete
        $facility = Facility::find($id);
        $facility->delete();

        // redirect
        Session::flash('message', 'Facility successfully removed!');
        Session::flash('alert-type', 'success');

        return Redirect::to('facility');
    }
}
