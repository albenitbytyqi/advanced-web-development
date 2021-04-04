<?php

namespace App\Http\Controllers;

use App\Models\add_member_model;
use Illuminate\Http\Request;

class add_member_controller extends Controller
{
    public function addGymMember(Request $request){
        $member = new add_member_model();
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->birthdate = $request->birthdate;
        $member->expire_date = $request->expire_date;
        $member->profile_picture = $request->profile_picture;
        $member->save();
    }
}
