<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
          $staff=Staff::all();
       // return view('admin.slider.index', compact('sliders'));
         return view('admin.staff.index',compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        //dd($request->image);
      $validatedData = $request->validate([
       
         'image' =>'required|mimes:jpg,jpeg,png|max:2000',
          'name' => 'required',
            'degignation' => 'required',
            'details' => 'required'
       
    ]);
        $image=$request->file('image');
        if($image){
            $image_name=Str::random(20);
            $extend=strtolower($image->getClientOriginalExtension());
            $image_full_name =$image_name.'.'.$extend;
            $upload_path ='image/';
            $image_url=$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
    
        }
        if( $success){
         $slider = Staff::create([
             'name'=>$request->name,
             'name1'=>$request->name1,
             'name3'=>$request->name3,
             'degignation'=>$request->degignation,
             'details'=>$request->details,
             
             'image' => $image_url
             
             
         ]);
         if($slider){
             
               return redirect()->back()->with('message', 'Staff Successfully Added');
         }else{
              return redirect()->back()->with('message', 'Staff Inserting Product');
         }
}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
         $staff = Staff::findOrFail($staff->id);
        return view('admin.staff.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {  //dd($product->image);
        $validatedData = $request->validate([
          
             'image' =>'required|mimes:jpg,jpeg,png|max:2000',
          
        ]);
        $image=$request->file('image');
        if($image){
            if(\File::exists(public_path('image/'.$staff->image))){

              \File::delete(public_path('image/'.$staff->image));
}
    		$image_name=Str::random(20);
    		$extend=strtolower($image->getClientOriginalExtension());
    		$image_full_name =$image_name.'.'.$extend;
    		$upload_path ='image/';
    		$image_url=$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    
        }
        
       $staff->name = $request->name;
       $staff->degignation = $request->degignation;
       $staff->details = $request->details;
       $staff->name1 = $request->name1;
       $staff->name3 = $request->name3;
      
       $staff->image =  $image_url;
       if($staff->save()){
        return redirect()->back()->with('message','Update Succcessfully');
     }
      return redirect()->back()->with('message',' Update error  ');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {//dd($product->image);

        if(\File::exists(public_path('image/'.$staff->image))){

    \File::delete(public_path('image/'.$staff->image));

  }
        $staff=$staff->delete();
        if($staff){
           return redirect()->back()->with('message','Deleted Succcessfully');
           // return Response::json("$delete");
        }
        return redirect()->back()->with('message',' Deleted error  ');
        // return Response::json("$d");
       // $product = User::where('id',$product->id)->delete();
       // return Response::json($product);
    }
}