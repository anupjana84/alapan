@extends('layoutsfontend.master')
  <!-----------BANNER------------->
  @section('content')
      
  
   <!-- HeroSection -->
  <div class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <!-- Carosuel Indicator -->
      <div class="carousel-indicators"  style="z-index: 4;">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>     
      <!-- Carosule Contents -->
      <div class="carousel-inner">
        <!-- Banner No.1 -->
        <div class="carousel-item position-relative active">
          <img src="{{asset('./image/Banner/india.jpg')}}" class="d-block w-100 position-absolute"alt="..." style="z-index: 1;">
          <div class="container-fluid overlay"></div>
          <div class="container text-white text-center text-md-start contentBox">
            <div class="row">
              <div class="col-md-6">
                <h1 class="fw-bold">NGO for<br> Education</h1>
                <p class="my-md-4">Benefitting over 10,000 children every year through live welfare projects on education.
                  <span class="d-none d-lg-inline">Education is both the means as well as the end to a better life.</span>
                </p>
                <!--<a class="btn btn-danger btn-lg" href="#" role="button">Donate Now</a>-->
              </div>
            </div>
          </div>
        </div>

        <!-- Banner No.2 -->
        <div class="carousel-item position-relative">
          <img src="{{asset('./image/Banner/joy.jpg')}}" class="d-block w-100 position-absolute" alt="...">
          <div class="container-fluid overlay"></div>
          <div class="container text-white text-center text-md-start contentBox">
            <div class="row">
              <div class="col-md-6">
                <h1 class="fw-bold">Learn English Language</h1>
                <p class="my-md-4"><span class="d-none d-lg-inline">Boost up your english language skill.</span>
                  The academy for language advancement and progressive attitude nurturing.
                  <span class="d-none d-lg-inline">School of english language.</span>
                </p>
                <!--<a class="btn btn-danger btn-lg" href="addmision.php" role="button">Get Addmision</a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carosuel Controler -->
      <button class="carousel-control-prev d-none d-xl-block" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="z-index: 4;">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 3rem; width: 3rem;"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next d-none d-xl-block" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"  style="z-index: 4;">
        <span class="carousel-control-next-icon" aria-hidden="true" style="height: 3rem; width: 3rem;"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- WhatWeDo -->
  <div class="container d-none">
    <div class="row text-center mt-5">
      <h2 class="fw-bold">What We Do</h2>
    </div>
    <div class="row my-5">     
      <div class="col-md-3">
      <!-- <img src="{{asset('./image/Icon/cap.png')}}" alt="" class="me-3" style="width:45px;"> -->
        <h5 class="fs-lg-4 fw-bold"><i class="fas fa-graduation-cap text-danger me-4 fs-3"></i>Education</h5>
        <p class="pt-2">Pick from causes like education, children, livelihoods, etc.</p>
      </div>      
      <div class="col-md-3">      
        <h5 class="fs-lg-4 fw-bold"><i class="fas fa-donate text-danger me-4 fs-3"></i>Donation</h5>
        <p class="pt-2">Support crowdfunding campaigns with one-time donations.</p>
      </div>
      <div class="col-md-3">        
        <h5 class="fs-lg-4 fw-bold"><i class="fas fa-hands-helping text-danger me-4 fs-3"></i>Ngo Programs</h5>
        <p class="pt-2">Opt to give monthly for our missions or NGO programs make an impact.</p>
      </div>
      <div class="col-md-3">        
        <h5 class="fs-lg-4 fw-bold"><i class="fas fa-chalkboard-teacher text-danger me-4 fs-3"></i>Nothing</h5>
        <p class="pt-2">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
      </div>
    </div>
  </div>

  <!-- AboutUs -->
  <div class="container">
    <div class="container">
       <div class="row pt-2">
        
     
         <a class="glow text-center" href="{{asset('./image/Banner/Brochurealapan.pdf')}}" target="_blank" style="font-size:25px; text-decoration: none;">International Conference 2022</a>
      <!--     <a class="glow text-center" href="{{asset('./image/Banner/camp.pdf')}}" target="_blank" style="font-size:50px; text-decoration: none;">National Winter Camp 2021</a>-->
         
       
      </div>
      <div class="row pt-5">
        
        <div class="col-12 text-center">
          <h2 class="fw-bold">About Us</h2>
          
         
        </div>
      </div>
      <div class="row py-5">
        <div class="col-md-6">
          <p class="capital">ALAPAN,an NGO in India, taking an oath 'save others to save yourself', directly benefitting over 10,000 children and their families every year, through more than 50 live welfare projects on education, healthcare, livelihood and women empowerment, in over 50 remote villages and slums across 20 states of India.   
          </p>
          <div class="row py-3 d-none d-xl-flex">
            <div class="col-md-6">
              <h5 class="fs-lg-4 fw-bold"><i class="fas fa-graduation-cap text-danger me-3 fs-3"></i>Education</h5>
              <p class="pt-2">Working with rural children over three decades in terms of developing futures, education, livelihood and so on.</p>
            </div>
            <div class="col-md-6">
              <h5 class="fs-lg-4 fw-bold"><i class="fas fa-praying-hands text-danger me-3 fs-3"></i>Ngo Programs</h5>
              <p class="pt-2">Opt to give monthly for our missions or NGO programs make an impact.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img class="img-fluid" src="{{asset('./image/Banner/boi.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- OurWork -->
  <div class="container-fluid bg-light">
    <div class="row">
      
    </div>
  </div>

  <!-- Course -->
  <div class="container-fluid bg-dark">
    <div class="container" id="course">
      <div class="row pt-5">
        <div class="col-12 text-center text-white">
          <h2 class="fw-bold">Courses on English Language</h2>
        </div>
      </div>
      <div class="row py-5">
        <div class="col-lg-12">
          <div class="owl-carousel owl-theme">
            <!-- Item No.1 -->
            <div class="item">
              <div class="card border-0">
                <img src="{{asset('./image/Course/Basic.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Basic Course</h5>
                  <p class="text-black-50">Basic Certificate Course in Spoken and Written English</p>
                  <p>Eligibility : Madhyamik/SLC</p>
                  <p>Duration : 30 Classes</p>
                  
                  <div class="d-flex justify-content-between">
                    <div>Fees : Rs. 2300/-</div>
                  <!--<a href="{{url('/addmision')}}" class="text-decoration-none text-danger fw-bold">Get Addmision</a>-->
                  </div>
                </div>
              </div>
            </div>
            <!-- Item No.2 -->
            <div class="item">
              <div class="card border-0">
                <img src="{{asset('./image/Course/Intermidiate.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Intermidiate Course</h5>
                  <p class="text-black-50">Intermidiate Certificate Course in Effective Spoken and Written English.</p>
                  <p>Eligibility : Madhyamik/SLC</p>
                  <p>Duration :30 Classes</p>
                  
                  <div class="d-flex justify-content-between">
                  <div>Fees : Rs. 2300/-</div>
                  <!--<a href="{{url('/addmision')}}" class="text-decoration-none text-danger fw-bold">Get Addmision</a>-->
                  </div>
                </div>
              </div>
            </div>
            <!-- Item No.3 -->
            <div class="item">
              <div class="card border-0">
                <img src="{{asset('./image/Course/Advance.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Advance Course</h5>
                  <p class="text-black-50">Advance Course in Evaluative Spoken and Written English.</p>
                  <p>Eligibility : Madhyamik/SLC</p>
                  <p>Duration : 30 Classes</p>
                  
                  <div class="d-flex justify-content-between">
                  <div>Fees : Rs. 2500/-</div>
                  <!--<a href="{{url('/addmision')}}" class="text-decoration-none text-danger fw-bold">Get Addmision</a>-->
                  </div>
                </div>
              </div>
            </div>
             Item No.4 
            <div class="item">
              <div class="card border-0">
                <img src="{{asset('./image/Course/Advance.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Advance Course</h5>
                  <p class="text-black-50">Advance Course in Evaluative Spoken and Written English.</p>
                  <p>Eligibility : Madhyamik/SLC</p>
                  <p>Duration :30 Classes</p>
                  
                  <div class="d-flex justify-content-between">
                  <div>Fees : Rs. 2500/-</div>
                  <a href="{{url('/addmision')}}" class="text-decoration-none text-danger fw-bold">Get Addmision</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>

  <!-- Member -->
  <div class="container">
    <div class="row text-center pt-5">
      <h2 class="fw-bold">Leadership Team</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 text-center py-4">
      <!-- Card No.1 -->
      <div class="col ">
        <div class="card h-50 border-0 shadow-sm">
          <img src="{{asset('./image/Members/debu.jpeg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">DEBABRATA ROY</h5>
            <p class="card-text text-black-50">DIRECTOR</p>
            <div class="d-flex justify-content-center gap-4">
              <a href="" class="text-reset"><i class="fab fa-facebook-f"></i></a>
              <!--<a href="" class="text-reset"><i class="fab fa-twitter"></i></a>-->
              <!--<a href="" class="text-reset"><i class="fab fa-instagram"></i></a>-->
            </div>
          </div>
        </div>
      </div>
      <!-- Card No.2 -->
      <div class="col">
        <div class="card h-50 border-0 shadow-sm">
          <img src="{{asset('./image/Members/debuwife.png')}}" class="card-img-top hover-zoom" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">GOURI DAS</h5>
            <p class="card-text text-black-50">SECRETARY</p>
            <div class="d-flex justify-content-center gap-4">
              <a href="" class="text-reset"><i class="fab fa-facebook-f"></i></a>
              <!--<a href="" class="text-reset"><i class="fab fa-twitter"></i></a>-->
              <!--<a href="" class="text-reset"><i class="fab fa-instagram"></i></a>-->
              <!--<a href="" class="text-reset"><i class="fab fa-youtube"></i></a>-->
            </div>
          </div>
        </div>
      </div>
      <!-- Card No.3 -->
      <div class="col ">
        <div class="card h-50 border-0 shadow-sm">
          <img src="{{asset('./image/Members/ass_sec.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">PRADIP KUMAR PATRA</h5>
            <p class="card-text text-black-50">ASSISTANT SECRETARY</p>
            <div class="d-flex justify-content-center gap-4">
              <a href="" class="text-reset"><i class="fab fa-facebook-f"></i></a>
              <!--<a href="" class="text-reset"><i class="fab fa-twitter"></i></a>-->
            </div>
          </div>
        </div>
      </div>
      <!-- Card No.4 -->
      <!--<div class="col">-->
      <!--  <div class="card h-100 border-0 shadow-sm">-->
      <!--    <img src="{{asset('./image/Members/team4.jpg')}}" class="card-img-top" alt="...">-->
      <!--    <div class="card-body">-->
      <!--      <h5 class="card-title fw-bold">Smriti Das</h5>-->
      <!--      <p class="card-text text-black-50">Oparating Officer</p>-->
      <!--      <div class="d-flex justify-content-center gap-4">-->
      <!--        <a href="" class="text-reset"><i class="fab fa-facebook-f"></i></a>-->
      <!--        <a href="" class="text-reset"><i class="fab fa-twitter"></i></a>-->
      <!--        <a href="" class="text-reset"><i class="fab fa-instagram"></i></a>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
    </div>
  </div>

  <!-- Testimonials -->
  <!--<div class="container-fluid bg-light">-->
  <!--  <div class="container" id="testimonials">-->
  <!--    <div class="row pt-5">-->
  <!--      <div class="col-12">-->
  <!--        <h3 class="fw-bold">Testimonials</h3>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="row text-start pt-4 pb-5">     -->
  <!--      <div class="col-lg-12">-->
  <!--        <div class="owl-carousel owl-theme">-->
            <!-- Card No.1 -->
  <!--          <div class="item">-->
  <!--            <div class="card mx-auto" style="border: none;">-->
  <!--              <div class="row g-0">-->
  <!--                <div class="col-md-4">-->
  <!--                  <img src="{{asset('./image/Testimonial/test1.jpg')}}" class="img-fluid rounded-start h-100" alt="..." style="object-fit:cover;">-->
  <!--                </div>-->
  <!--                <div class="col-md-6 offset-md-1 my-auto">-->
  <!--                  <div class="card-body">-->
  <!--                    <h5 class="card-title fw-bold">Sefali Vayda</h5>-->
  <!--                    <p class="card-text text-black-50">Chairmen, Handloom Ltd</p>-->
  <!--                    <p class="card-text ">" This is a wider card with supporting text below as a natural lead-in to additional content.-->
  <!--                      This content is a little bit longer. Lorem ipsum dolor sit amet, consectetur adipisicing elit. "-->
  <!--                    </p>-->
  <!--                  </div>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>         -->
            <!-- Card No.2 -->
  <!--          <div class="item">-->
  <!--            <div class="card mx-auto" style="border: none;">-->
  <!--              <div class="row g-0">-->
  <!--                <div class="col-md-4">-->
  <!--                  <img src="{{asset('./image/Testimonial/test2.jpg')}}" class="img-fluid rounded-start h-100" alt="..." style="object-fit:cover;">-->
  <!--                </div>-->
  <!--                <div class="col-md-6 offset-md-1 my-auto">-->
  <!--                  <div class="card-body">-->
  <!--                    <h5 class="card-title fw-bold">Pallavi Basu</h5>-->
  <!--                    <p class="card-text text-black-50">Actor, Producer, Entrepreneur</p>-->
  <!--                    <p class="card-text ">" People often wonder where the money would go.-->
  <!--                      I can tell you, I started working with GiveIndia when the pandemic first broke a year ago.-->
  <!--                      We validate them. "-->
  <!--                    </p>-->
  <!--                  </div>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>-->
            <!-- Card No.3 -->
  <!--          <div class="item">-->
  <!--            <div class="card mx-auto" style="border: none;">-->
  <!--              <div class="row g-0">-->
  <!--                <div class="col-md-4">-->
  <!--                  <img src="{{asset('./image/Testimonial/test3.jpg')}}" class="img-fluid rounded-start h-100" alt="..." style="object-fit:cover;">-->
  <!--                </div>-->
  <!--                <div class="col-md-6 offset-md-1 my-auto">-->
  <!--                  <div class="card-body">-->
  <!--                    <h5 class="card-title fw-bold">Lilly Singh</h5>-->
  <!--                    <p class="card-text text-black-50">Social Activitis</p>-->
  <!--                    <p class="card-text ">" There is a healthcare crisis looming and we must act fast to protect our frontline workers.-->
  <!--                      Doctors, nurses and paramedics’ safety is crucial to providing healthcare. "-->
  <!--                    </p>-->
  <!--                  </div>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>            -->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->

  <!-- Partners -->
  <div class="container">
    <div class="row my-5">
      <div class="col-md-4 text-start ps-3">
        <h3 class="fw-bold mb-4">Stakeholders</h3>
        <p>Trusted by the largest corporations, and the most impactful foundations around the world.</p>
      </div>
      <!-- Partner Images -->
      <div class="col-md-7 offset-md-1 my-auto my-auto" id="partners">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img style="filter: grayscale(100%)" src="{{asset('./image/Partners/tcsrd-logo.jpg')}}" alt="">
          </div>
          <div class="item">
            <img style="filter: grayscale(100%)" src="{{asset('./image/Partners/hlc.jpg')}}" alt="">
          </div>
          <!--<div class="item">-->
          <!--  <img style="filter: grayscale(100%)" src="{{asset('./image/Partners/Google.png')}}" alt="">-->
          <!--</div>-->
          <!--<div class="item">-->
          <!--  <img style="filter: grayscale(100%)" src="{{asset('./image/Partners/Myntra.png')}}" alt="">-->
          <!--</div>-->
          <!--<div class="item">-->
          <!--  <img style="filter: grayscale(100%)" src="{{asset('./image/Partners/PhonePe.png')}}" alt="">-->
          <!--</div>-->
        </div>
      </div>
    </div>
  </div>
  @endsection
  <!-----------FOOTER------------>
