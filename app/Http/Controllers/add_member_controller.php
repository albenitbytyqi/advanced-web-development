<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;
use App\Jobs\SendMailDelete;
use App\Models\add_member_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class add_member_controller extends Controller{



    public function addGymMember(Request $request){
        $member = new add_member_model();
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->birthdate = $request->birthdate;
        $member->expire_date = $request->expire_date;
        $member->profile_picture = $request->profile_picture;
        $member->save();
        return redirect()->route('viewGymMember');
    }

    public function deleteMember($id){
        $member = add_member_model::find($id);
        $member->delete();

        $userEmail = Auth::user()->email;

        SendMailDelete::dispatch($userEmail);

        return redirect()->route('viewGymMember');


    }

    public function getMember($id){
        $gymMember = add_member_model::find($id);
        return view('editMember',['gymMember' => $gymMember]);
    }

    public function updateMember(Request $request){
        $gymMember = add_member_model::find($request->id);

        $gymMember->first_name = $request->first_name;
        $gymMember->last_name = $request->last_name;
        $gymMember->birthdate = $request->birthdate;
        $gymMember->expire_date = $request->expire_date;
        $gymMember->profile_picture = $request->profile_picture;
        $gymMember->save();
        return redirect()->route('viewGymMember');
    }

}
