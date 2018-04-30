<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use  App\Models\TestCategory;
use Illuminate\Support\Facades\Redirect;

use Session;

class TestCategoryController extends Controller
{
    public function index()
    {

    //list all test categories
    $testcategory = TestCategory::orderBy('name', 'asc')->get();
    //Load the view and pass test categories
    return view('testcategory.index')->with('testcategory',$testcategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testcategory.create');
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

        $testcategory = new TestCategory;

        $testcategory->name = $request->name;
        $testcategory->description = $request->description;
        
        $testcategory->save();

        // redirect
        Session::flash('message', 'Successfully added new category!');
        Session::flash('alert-type', 'success');
            
        return Redirect::to('testcategory');
    }

    public function edit($id)
    {
        $testcategory = TestCategory::find($id);

        return view('testcategory.edit')->with('testcategory', $testcategory);
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

        $testcategory = TestCategory::find($id);

        $testcategory->name = $request->name;
        $testcategory->description = $request->description;
        
        $testcategory->save();

        // redirect
        Session::flash('message', 'Successfully updated a category!');
        Session::flash('alert-type', 'success');
            
        return Redirect::to('testcategory');
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
        $testcategory = TestCategory::find($id);
        $testcategory->delete();

        // redirect
        Session::flash('message', 'Category Type successfully removed!');
        Session::flash('alert-type', 'success');

        return Redirect::to('testcategory');
    }

}