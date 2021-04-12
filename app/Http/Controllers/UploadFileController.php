<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index(){
    	return view('file_upload');
    }
    public function showUploadFile(Request $request){
    	$file=$request->file('image');
    	echo 'File Name: '.$file->getClientOriginalName();
    	echo '<br>';
    	echo 'File Extension: '.$file->getClientOriginalExtension();
    	echo '<br>';
    	echo 'File Real Path: '.$file->getRealPath();
    	echo '<br>';
    	echo 'File Size: '.$file->getSize();
    	echo '<br>';
    	echo 'File Mime Type: '.$file->getMimeType();

    	$destinationPath='uploads';
    	$file->move($destinationPath,$file->getClientOriginalName());

    }
}
