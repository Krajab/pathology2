<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\District;

use App\Models\Subdistrict;

use App\Models\Facility;

use App\Models\Personnel;

class ApiController extends Controller
{
    //

    public function getSubDistrict(Request $request)
    {
        //
        $sub_district_list = Subdistrict::where('district_id','=',$request->district_id)
        		->orderBy('name', 'asc')
               	->lists('name','id');
        $sub_district_list->prepend("","");

        return $sub_district_list;
    }

    public function getFacilityList(Request $request)
    {
        //
        $facility_list = Facility::where('subdistrict_id','=',$request->sub_district_id)
        		->orderBy('name', 'asc')
               	->lists('name','id');
        $facility_list->prepend("","");

        return $facility_list;
    }


    public function getFacilityInfo(Request $request)
    {
        //
        $facility_info = Facility::with('Ownership','Level')
        				->find($request->facility_id);

        $in_charge = Personnel::find($facility_info->in_charge_id)
        			 ->toArray();

        $responsible_lss = Personnel::find($facility_info->responsible_lss_id)
        					->toArray();

        $district = District::with('Region')->find($facility_info->district_id)
        					->toArray();

        $object = array_merge(['facility_info' => $facility_info->toArray()],['in_charge' => $in_charge],['responsible_lss' => $responsible_lss],['district' => $district]);

        return json_encode($object);
    }
}
