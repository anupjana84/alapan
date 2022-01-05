<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::paginate(3);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
       
         'image' =>'required|mimes:jpg,jpeg,png|max:2000',
       
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
         $slider = Slider::create([
             'name'=>$request->name,
             'image' => $image_url
             
             
         ]);
         if($slider){
             
              return redirect('/staff/index')->with('message', 'Slider Successfully Added');
         }else{
              return redirect('/staff/index')->with('message', 'Slider Inserting Product');
         }
}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
