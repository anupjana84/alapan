@extends('layoutsfontend.master')
@section('content')

<div class="container marketing py-5">

  

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pb-5">
     @foreach($staff as $staff)
  <div class="col">
    <div class="card h-100 border-0 shadow-sm">
        <div style="width:100%; height:90px; display:flex;  justify-content: center; border-radius:50%;">
             <div style="width:100px; height:90px;  justify-content: center; border-radius:50%;">
           <img style="width:90%; height:90%; border-radius:50%;" src="{{url('image/'.$staff->image)}}"/>
            </div>
            </div>
      <!--<img src="{{asset('./image/Banner/ice.jpg')}}" class="card-img-top" alt="...">-->
      <div class="card-body">
        <h5 class="card-title text-center">{{$staff->name}}</h5>
         <h4 class="card-title text-center">{{$staff->degignation}}</h4>
        <p class="card-text  text-black-50">{{$staff->details}}</p>
        <div class="d-flex justify-content-between">         
          <!--<a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-arrow-down text-danger me-2"></i>Download</a> -->
          <!--<a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-share text-danger me-2"></i>Share</a>-->
        </div>
      </div>
    </div>
  </div>
  
   @endforeach
   </div>
   </div>
    
@endsection