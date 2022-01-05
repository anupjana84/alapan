@extends('layoutsfontend.master')
@section('content')

<div class="container">
    <div class="row mb-1 my-md-4">
        <div class="col-lg-7 bg-light py-4 px-xl-4">
            <div class="text-center mb-4">
                <h5 class="fw-bold mb-4">Addmision Form</h5>
            </div>
            <form action="" method="post">
            <!-- Personal Details -->
            <p class="fw-bold ps-2">Personal Details:</p>
            <div class="row mb-3 mb-lg-4 g-3 g-lg-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="First Name">
                        <label for="floatingInput">First Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="Last Name">
                        <label for="floatingInput">Last Name</label>
                    </div>
                </div>
            </div>
                <!-- Radio Button/Gender section -->
            <div class="d-flex justify-content-between bg-white mb-3 mb-lg-4"
                style="height: 3.7rem; border-radius: 0.25rem;">
                <div class="my-auto">
                    <label class="ps-2 ps-lg-3 me-3" for="">Gender</label>
                </div>
                <div class="form-check form-check-inline my-auto">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline my-auto">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline my-auto">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Others</label>
                </div>
            </div>
            <div class="form-floating mb-5">
                <input type="date" class="form-control" id="floatingInput" autocomplete="off">
                <label for="floatingInput">Date Of Birth</label>
            </div>
            <!-- Contact Details -->
            <p class="fw-bold ps-2">Contact Details:</p>
            <div class="row mb-3 mb-lg-4 g-3 g-lg-4">
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="First Name">
                        <label for="floatingInput">District</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="First Name">
                        <label for="floatingInput">Village</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="First Name">
                        <label for="floatingInput">Pin Code</label>
                    </div>
                </div>
            </div>
            <div class="row mb-5 g-3 g-lg-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="First Name">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="First Name">
                        <label for="floatingInput">Email Id</label>
                    </div>
                </div>
            </div>          
            <!-- Select Option/Course Section -->
            <p class="fw-bold ps-2">Select Course:</p>
            <select class="form-select" size="3" aria-label="size 3 select example">
                <option class="py-2" value="1">1. Basic Certificate Course in Spoken English & Written English</option>
                <option class="py-2" value="2">2. BIntermidiate Certificate Course in Effective Spoken English & Written English</option>
                <option class="py-2" value="3">3. Advanced Certificate Course in Evaluative Spoken & Written English</option>
                <option class="py-2" value="4">4. School Level Spoken & Written English Course</option>
                <option class="py-2" value="5">5. Interview Skills & Business Communication</option>
                <option class="py-2" value="6">6. Individual Class (One to One)</option>
                <option class="py-2" value="7">7. Certificate In Spoken English</option>
            </select>
            <div class="d-grid mt-4">
                <button class="btn btn-danger" type="button">Submit Form</button>
            </div>
            </form>
        </div>
        
        <div class="col-lg-3 d-none d-lg-block offset-1 my-auto">
            <h3 class="mb-5">Last Year's Impact</h3>
            <div class="d-flex mb-5">
                <i class="fas fa-child text-danger fs-2 my-auto me-3"></i>
                <p class="my-auto">51%of total beneficiaries enrolled were girl children.</p>
            </div>
            <div class="d-flex mb-5">
                <i class="fas fa-award text-danger fs-2 my-auto me-3"></i>
                <p class="my-auto">100% Teachers received training in academic methodologies.</p>
            </div>
            <div class="d-flex mb-5">
                <i class="fas fa-book-reader text-danger fs-2 my-auto me-3"></i>
                <p class="my-auto">27710 Children directly provided education through in 22 states.</p>
            </div>
            <div class="d-flex mb-5">
                <i class="fas fa-user-graduate text-danger fs-2 my-auto me-3"></i>
                <p class="my-auto">88% of eligible children were mainstreamed to schools.</p>
            </div>            
        </div>
    </div>
</div>

    
@endsection