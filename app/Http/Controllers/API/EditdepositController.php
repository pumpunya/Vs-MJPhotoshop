<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\editdeposit;

class EditdepositController extends Controller
{
    public function AddEditdeposit(Request $request)
{
 
        //add booking data into booking table
        $editdeposit = new editdeposit();
        $editdeposit->bookingID = $request->get("bookingID"); 
    
        $file = $request->file('file');
        if(isset($file)){
            $file->move('images',$file->getClientOriginalName());
            $editdeposit->imagedeposit2 = $file->getClientOriginalName();
        }
        $editdeposit->save();
       
      //soft delete
      return response()->json(array(
        'message' => 'AddEditdeposit successfully', 
        'status' => 'true'));
}
}