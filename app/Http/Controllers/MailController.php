<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send( Request $req){
    	$demo=[
    	'mail'=>$req->mail,
    	'msg1'=>$req->msg1];
    	/*send(){
    	$objDemo=new \stdClass();
    	$objDemo->receiver="Dana";
    	$objDemo->sender="Dana";*/
    	
    		Mail::to("190103463@stu.sdu.edu.kz")->send(new DemoEmail($demo));
    		return back()->with('mess','Email sent');
    }
    /*public function contact(){
    	return view('project');
    }*/
    /*public function send( Request $req){
    	'mail'=>$req->mail;
    	'msg1'=>$req->msg1;
    	
    		Mail::to("190103463@stu.sdu.edu.kz")->send(new DemoEmail($demo));
    		return back()->with('mess','Email sent');*/
}
