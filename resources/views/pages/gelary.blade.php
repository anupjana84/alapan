@extends('layoutsfontend.master')
@section('content')

<section id="galary">
    <div class="container mt-4">
        <div class="img-box">
            <a href="{{asset('image/galary/IMG1.jpg')}}" data-lightbox="mygalary">
                <img src="{{asset('image/galary/IMG1.jpg')}}" class="mb-3 w-100">
            </a>
        </div>

      <div class="img-box"><a href="{{asset('image/galary/IMG7.jpg')}}" data-lightbox="mygalary"><img src="{{asset('image/galary/IMG7.jpg')}}" class="mb-3 w-100"></a></div>
      <div class="img-box"><a href="{{asset('image/galary/IMG1.jpg')}}" data-lightbox="mygalary"><img src="{{asset('image/galary/IMG1.jpg')}}" class="mb-3 w-100"></a></div>
      <div class="img-box"><a href="{{asset('image/galary/IMG8.jpg')}}" data-lightbox="mygalary"><img src="{{asset('image/galary/IMG8.jpg')}}" class="mb-3 w-100"></a></div>
      <div class="img-box"><a href="{{asset('image/galary/IMG3.jpg')}}" data-lightbox="mygalary"><img src="{{asset('image/galary/IMG3.jpg')}}" class="mb-3 w-100"></a></div>
      <div class="img-box"><a href="{{asset('image/galary/IMG9.jpg')}}" data-lightbox="mygalary"><img src="{{asset('image/galary/IMG9.jpg')}}" class="mb-3 w-100"></a></div>
      <div class="img-box"><a href="{{asset('image/galary/IMG6.jpg')}}" data-lightbox="mygalary"><img src="{{asset('image/galary/IMG6.jpg')}}" class="mb-3 w-100"></a></div>
      <div class="img-box"><a href="{{asset('image/galary/IMG4.jpg')}}" data-lightbox="mygalary"><img src="{{asset('image/galary/IMG4.jpg')}}" class="mb-3 w-100"></a></div>
      <div class="img-box"><a href="{{asset('image/galary/IMG5.jpg')}}" data-lightbox="mygalary"><img src="{{asset('image/galary/IMG5.jpg')}}" class="mb-3 w-100"></a></div>
      <div class="img-box"><a href="{{asset('image/galary/IMG10.jpg')}}" data-lightbox="mygalary"><img src="{{asset('image/galary/IMG10.jpg')}}" class="mb-3 w-100"></a></div>
    </div>
</section>
    
@endsection