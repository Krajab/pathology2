<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use  App\Models\SpecimenType;

use Illuminate\Support\Facades\Redirect;

use Session;

class SpecimenTypeController extends Controller
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
        //List all specimens
        $specimentypes = SpecimenType::orderBy('name', 'asc')->get();
        //Load the view and pass the specimen lists
        return view('specimentype.index')->with('specimentype',$specimentypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specimentype.create');
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
            'name' => 'required|max:50',
                       
        ]);

        $specimentype = new SpecimenType;

        $specimentype->name = $request->name;
        $specimentype->description = $request->description;
        
        $specimentype->save();

        // redirect
        Session::flash('message', 'Successfully added new specimen!');
        Session::flash('alert-type', 'success');
            
        return Redirect::to('specimentype');
    }

    public function edit($id)
    {
        $specimentype = SpecimenType::find($id);

        return view('specimentype.edit')->with('specimentype', $specimentype);
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
            'name' => 'required|max:50',
                       
        ]);

        $specimentype = SpecimenType::find($id);

        $specimentype->name = $request->name;
        $specimentype->description = $request->description;
        
        $specimentype->save();

        // redirect
        Session::flash('message', 'Successfully updated specimen!');
        Session::flash('alert-type', 'success');
            
        return Redirect::to('specimentype');
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
        $specimentype = SpecimenType::find($id);
        $specimentype->delete();

        // redirect
        Session::flash('message', 'Specimen Type successfully removed!');
        Session::flash('alert-type', 'success');

        return Redirect::to('specimentype');
    }
}
