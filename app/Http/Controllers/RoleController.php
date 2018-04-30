<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Role;

use App\Models\User;

use Illuminate\Support\Facades\Redirect;

use Session;


class RoleController extends Controller
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
        $roles = Role::orderBy('role', 'asc')->get();

        //Load the view and pass the cadre list
        return view('access.role.index')->with('roles',$roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('access.role.create');
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
        'role' =>'required|unique:roles,role,'.$request['role']

        ]);

        $role = new Role;

        $role->role = $request->role;

        $role->save();

        // redirect
        Session::flash('message', 'Role Successfully added!');
        Session::flash('alert-type', 'success');

        return Redirect::to('role');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);

        return view('access.role.edit')->with('role', $role);
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
        'role' =>'required|unique:roles,role,'.$request['role'] 
        ]);

        $role =  Role::find($id);

        $role->role = $request->role;

        $role->save();

        // redirect
        Session::flash('message', 'Role Successfully updated!');
        Session::flash('alert-type', 'success');

        return Redirect::to('role');
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
          $role = Role::find($id);
          if ($role->User != null) {
          Session::flash('message', 'You can not delete a role assigned to a user!');
          Session::flash('alert-type', 'error');
        }
      else {
        $role->delete();

        // redirect
        Session::flash('message', 'Role successfully deleted!');
        Session::flash('alert-type', 'success');

      }

        return Redirect::to('role');
    }
}
