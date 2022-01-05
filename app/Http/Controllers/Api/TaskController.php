<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
   public function save(Request $request){
        $validatedData = $request->validate([
            
            'subject' => 'required',
            'heading' => 'required',
            'description' => 'required',
            // 'image' =>'required|mimes:jpg,jpeg,png|max:5000'
            
        ]);
        $images=$request->file('image');
        
        $task =new Task;
        $image_full_namem='';
        if($images){
        foreach($images as $image){
           // $image->storeAs('public', $image->getClientOriginalName());
           $image_name=Str::random(10);
           $extend=strtolower($image->getClientOriginalExtension());
           $image_full_name =$image_name.'.'.$extend;
           $image->move('image/', $image_full_name);
           
           // $image_full_name.=$image->getClientOriginalName().",";
            $image_full_namem.=$image_full_name.",";
        }
    }
            $task->subject=$request->subject;
            $task->heading=$request->heading;
            $task->user_id='1';
            $task->description=$request->description;
           // $task->image= $image_full_namem;
           $task->image=rtrim($image_full_namem, ", ");
           
            if( $task->save()){
                return response()->json(['message'=> $images]);
            }else{
                return response()->json(['message'=>'Task Inserting Error']);
                   
            }  
    }
}
