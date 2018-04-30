<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\User;

use App\Models\Role;

use Session;

use Hash;

class UserController extends Controller
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
        $users = User::with('Role')->orderBy('username', 'asc')->get();

        //Load the view and pass the personnel list
        return view('access.user.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role_list = Role::orderBy('role', 'asc')
               ->lists('role','id');

        $role_list->prepend("","");

        return view('access.user.create')
                ->with('role_list',$role_list);
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
          'username' => 'required|unique:users,username,'.$request['username'],
          'email' => 'required|unique:users,email,'.$request['email'],
          'password' => 'required|min:3',
          'role_id' => 'required|numeric',
      ]);

      $user = new User;

      $user->username = $request->username;
      $user->email = $request->email;
      $user->password= Hash::make($request->password);
      $user->role_id = $request->role_id;
      $user->save();
        // redirect
        Session::flash('message', 'New user successfully added!');
        Session::flash('alert-type', 'success');

        return Redirect::to('user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = User::find($id);

        $role_list = Role::orderBy('role', 'asc')->lists('role','id');

        $role_list->prepend("","");

        return view('access.user.edit')->with('user', $user)->with('role_list', $role_list);
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
          'username' => 'required|max:50',
          'email' => 'required|email|max:50',
          'role_id' => 'required|numeric'
      ]);


      $user = User::find($id);

      $user->username = $request->username;
      $user->email = $request->email;
      $user->role_id = $request->role_id;
      $user->save();

        // redirect
        Session::flash('message', 'User information successfully updated!');
        Session::flash('alert-type', 'success');

        return Redirect::to('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // delete
        $user = User::find($id);
        $user->delete();

        // redirect
        Session::flash('message', 'User successfully removed!');
        Session::flash('alert-type', 'success');

        return Redirect::to('user');
    }
}
