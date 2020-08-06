<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeDetail;

class EmployeeDetailController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('cors');
    }

    public function update(Request $request, $id)
    {
        $employeeDetail=EmployeeDetail::find($id);
        $employeeDetail->mobile=$request->mobile;
        $employeeDetail->dob=$request->dob;
        $employeeDetail->gender=$request->gender;
        $employeeDetail->address=$request->address;
        $employeeDetail->save();
        return $employeeDetail;
    }

}
