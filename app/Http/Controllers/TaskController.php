<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Str;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    // { if(Auth::user()->role=="A"){
    //     $tasks =Task::all();
    //      return view('task.indexaa',compact('tasks'));
    // }
       // $tasks =Task::where('user_id',Auth::user()->id)->get();
       // $tasks =Task::all();
       echo "yes";
        //return view('task.indexaa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //dd($request);
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
            $task->user_id=Auth::user()->id;
            $task->description=$request->description;
            $task->image= $image_full_namem;
           // $task->image= rtrim($image_full_namem, ", ");
           
            if( $task->save()){
                return redirect('/task/create')->with('message', 'Task Successfully Added');
            }else{
                    return  redirect('/task/create')->with('message', 'Task Inserting Error');
            }  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $task = Task::findOrFail($task->id);
        //dd($category);
       return view('task.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
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
            $task->status=$request->status;
            $task->user_id=Auth::user()->id;
            $task->description=$request->description;
            $task->image= $image_full_namem;
           
            if( $task->save()){
                return redirect('/task')->with('message', 'Task Updated');
            }else{
                    return  redirect('/task')->with('message', 'Task Update Error');
            }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
     
        $delete=$task->delete();
        if($delete){
           return back()->with('message','Deleted Successfully');
        }
        return redirect('/task')->with('message',' Deleted error  ');
   }
        
    
}
