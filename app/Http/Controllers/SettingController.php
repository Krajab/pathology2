<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Mutation;

use App\Models\User;

use Illuminate\Support\Facades\Redirect;

use Session;

class SettingController extends Controller
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
        //List all cadres
        // $mutations = Mutation::orderBy('name', 'asc')->get();

        //Load the view and pass the cadre list
        return view('settings.show.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.mutation.create');
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
        'name' =>'required|unique:mutations,name,'.$request['name']

        ]);

        $mutation = new Mutation;

       $mutation->name = $request->name;

        $mutation->save();

        // redirect
        Session::flash('message', 'Mutation Successfully added!');
        Session::flash('alert-type', 'success');

        return Redirect::to('mutation');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mutation = Mutation::find($id);

        return view('settings.mutation.edit')->with('mutation', $mutation);
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
        $messages = [
    'required' => 'The :attribute field is required.',
];
        $validation=$this->validate($request, [
        'name' =>'required|unique:mutations,name,'.$request['name'] 
        ]);

        $mutation =  Mutation::find($id);

        $mutation->name = $request->name;

        $mutation->save();

        // redirect
        Session::flash('message', 'Mutation Successfully updated!');
        Session::flash('alert-type', 'success');

        return Redirect::to('mutation');
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
          $mutation = Mutation::find($id);
          if ($mutation->User != null) {
          Session::flash('message', 'You can not delete mutation assigned to a user!');
          Session::flash('alert-type', 'error');
        }
      else {
        $mutation->delete();

        // redirect
        Session::flash('message', 'Mutation successfully deleted!');
        Session::flash('alert-type', 'success');

      }

        return Redirect::to('mutation');
    }
}
