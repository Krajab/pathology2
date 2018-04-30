<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use  App\Models\SpecimenType;

use  App\Models\TestCategory;
use Illuminate\Support\Facades\Redirect;

use Session;

class TestTypeController extends Controller
{
    public function index()
    {
    // List all the active testtypes
    // $testtypes = TestType::orderBy('name', 'ASC')->get();
    //Load the view and pass test types
    return view('testtype.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specimentypes = SpecimenType::orderBy('name')->get();
        $testcategory = TestCategory::all();

        return view('testtype.create')
                    ->with('testcategory', $testcategory)
                    ->with('specimentypes', $specimentypes);
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

        $testtype = new TestType;

        $testtype->name = $request->name;
        $testtype->description = $request->description;
        $testtype->test_category_id = $request->test_category_id;
        $testtype->targetTAT = $request->targetTAT;
        
        $testtype->save();

        // redirect
        Session::flash('message', 'Successfully added new category!');
        Session::flash('alert-type', 'success');
            
        return Redirect::to('testtype');
    }

    public function edit($id)
    {
        $testtype = TestType::find($id);

        return view('testtype.edit')->with('testtype', $testtype);
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