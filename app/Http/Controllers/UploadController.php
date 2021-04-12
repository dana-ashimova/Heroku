<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemDetails;
use Resources\views\file_upload;
class UploadController extends Controller
{
    
   public function uploadForm(){
    return view('upload_form');
   }
    public function uploadSubmit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'photos'=>'required',
        ]);
        if($request->hasFile('photos')){
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $files=$request->file('photos');
            foreach ($files as $file) {
                $filename=$file->getClientOriginalName();
                $extension=$file->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension);
                if ($check) {
                    $items=Item::create($request->all());
                    foreach ($request->photos as $photo ) {
                        $filename=$photo->store('photos');
                        ItemDetails::create([
                            'item_id'=>$items->id,
                            'filename'=>$filename
                        ]);
                    }
                    echo "Upload Successfully";
                    $destinationPath='uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
                }
                else{
                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only upload png,jpg,doc</div>';
                }
            }
        }
        
}
}
