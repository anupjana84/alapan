
@extends('layoutsfontend.master')
@section('content')

<!-- Contact/Address -->
<div class="container">
    <div class="row my-4">
        <!-- Feedback -->
        <div class="col-md-6 bg-light py-4 px-xl-4">
            <div class="mb-4">
                <h5 class="fw-bold mb-4">Your Feedback</h5>
            </div>
            <form action="">
            <div class="form-floating mb-3 mb-lg-4">
                <input type="text" class="form-control" id="floatingName" placeholder="name">
                <label for="floatingName">Name</label>
            </div>
            <div class="form-floating mb-3 mb-lg-4">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating mb-3 mb-lg-4">
                <input type="number" class="form-control" id="floatingPh" placeholder="Phone Number">
                <label for="floatingPh">Phone Number (Optional)</label>
            </div>
            <div class="form-floating mb-3 mb-lg-4">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Your Message Here</label>
            </div>
            <div class="d-grid mt-4">
                <button class="btn btn-danger" type="button">Submit</button>
            </div>
            </form>
        </div>
        <!-- Contact Details -->
        <div class="col-md-5 mt-4 offset-md-1 my-md-auto">
            <div class="mb-5">
            <h3 class="mb-4">Contact Details</h3>
            <p><i class="fas fa-home fs-5 me-3"></i>Chaitanyapur, Haldia,West Bangal</p>
            <p><i class="fas fa-envelope fs-5 me-3"></i>alapanhaldia@gmail.com</p>
            <p><i class="fas fa-phone fs-5 me-3"></i>+ 91 750 190 3090</p>
            <p><i class="fas fa-calendar fs-5 me-3"></i>09 am to 05 pm</p>
            </div>
            <div>
            <h3 class="mb-3">Social Networks</h3>
            <a href="https://www.facebook.com/alapan.org.in" target='_blank' class="me-4 text-reset fs-5"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="me-4 text-reset fs-5"><i class="fab fa-twitter"></i></a>
            <a href="" class="me-4 text-reset fs-5"><i class="fab fa-instagram"></i></a>
            <a href="" class="text-reset fs-5"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Map -->
<div class="container-fluid p-md-0">
    <div class="row">
        <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d118262.74070159254!2d88.0138655!3d22.1370054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02f371a1b8f68b%3A0xc732d30f9368a558!2sAlapan%20Spoken%20English%20School!5e0!3m2!1sen!2sin!4v1628762222894!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
@endsection