@extends('layoutsfontend.master')
@section('content')

<div class="container">
  <div class="row py-5">
    <div class="col text-center">
      <h2 class="fw-bold">Blogs</h2>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pb-5">
  <div class="col">
    <div class="card h-100 border-0 shadow-sm">
      <img src="{{asset('./image/Banner/ice.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Raised relief funds due to COVID strips</h5>
        <p class="card-text text-black-50">During COVID pandemic situation ALAPAN  worked for the people. Raised relief funds for poor and needy people to try to make their livelihood a bit easy during the lockdown period.</p>
        <div class="d-flex justify-content-between">         
          <!--<a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-arrow-down text-danger me-2"></i>Download</a> -->
          <!--<a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-share text-danger me-2"></i>Share</a>-->
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 shadow-sm">
      <img src="{{asset('./image/Banner/india.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mental health needs a positive attention</h5>
        <p class="card-text text-black-50">Mental health issues are disabling to the persons affected to the families.
        People affected by mental disorders experience discrimination within their mind and soul.
        We have to take care of it from the very beginning and ALAPAN always do its activities by taking care of this such crucial matter. </p>
        <div class="d-flex justify-content-between">         
          <!--<a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-arrow-down text-danger me-2"></i>Download</a> -->
          <!--<a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-share text-danger me-2"></i>Share</a>-->
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 shadow-sm">
      <img src="{{asset('./image/Banner/smile.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Empowering differently abled</h5>
        <p class="card-text text-black-50">AS is the case with many indigenous people worldwide, centuries of facing inequalities,
        encroachment of their space have shaped the life of tribal communities in India.
        But ALAPAN believes that no one is disable, everyone is special and everyone is able in different kinds of works. That's why ALAPAN nurtures each and everyone following their abilities and according their need.</p>
        <div class="d-flex justify-content-between">         
          <!--<a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-arrow-down text-danger me-2"></i>Download</a> -->
          <!--<a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-share text-danger me-2"></i>Share</a>-->
        </div>
      </div>
    </div>
  </div>
  <!--<div class="col">-->
  <!--  <div class="card h-100 border-0 shadow-sm">-->
  <!--    <img src="{{asset('./image/Banner/boi.jpg')}}" class="card-img-top" alt="...">-->
  <!--    <div class="card-body">-->
  <!--      <h5 class="card-title">Card title</h5>-->
  <!--      <p class="card-text text-black-50">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
  <!--      <div class="d-flex justify-content-between">         -->
        <!--  <a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-arrow-down text-danger me-2"></i>Download</a> -->
        <!--  <a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-share text-danger me-2"></i>Share</a>-->
        <!--</div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  </div>
</div>
    
@endsection