<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function SubmitContact(Request $req)
    {
        // $checkvalidation= $req->validate([
        //     'username' => 'required',
        //     'email' => 'required',
        //     'subject' => 'required',
        //     'msg' => 'required'
        // ]);
        // $validator = Validator::make($req->all(),$checkvalidation);
        // if($checkvalidation->passes()) {
        //     echo"all gud";
        // }else{
        //     echo"failed";
           
        // }
        $userdata=['username'=>$req->username,'email'=>$req->emails,'subject'=>$req->subject,'msg'=>$req->message];
        $datainsert=DB::table('query')->insert($userdata);
        if($datainsert){
            $req->session()->flash('msg','We will Connect you soon ThankYou');
            return redirect('/contact');
        }else{
            return redirect()->route('/');
        }
    }
    // public function SubmitMail()
    // {
        
    // }
}
