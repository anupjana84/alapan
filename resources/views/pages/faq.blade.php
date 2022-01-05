@extends('layoutsfontend.master')
@section('content')

<div class="container-fluid bg-light">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 text-center pb-5">
                <h2 class="fw-bold">FAQs</h2>
            </div>
            <div class="col-md-12">
            <div class="accordion accordion-flush" id="accordionFlushExample">

                <div class="accordion-item mb-3 border-0">
                    <h4 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Who all are the target beneficiaries?
                    </button>
                    </h4>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Children, their families and the communities are the target groups of Smile Foundation with children at the centre stage.
                            The organization believes that a child?s education cannot be taken care of without taking care of the family, especially the mother, and the communities they belong to.   
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0">
                    <h4 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        How can one associate with the organization?
                    </button>
                    </h4>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">In our journey so far, we have received immense support from numerous individuals, many private and public sector companies, development agencies, educational institutions, public figures and the mass media.
                            One can associate with us in any of these above mentioned ways. Please visit the contact us or get involved section of our website for more information on the possible ways of being involved in our journey.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0">
                    <h4 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    How can I donate online?
                    </button>
                    </h4>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">You can make a donation by using Credit Card, Debit Card, and Net Banking.</div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0">
                    <h4 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Is there any advantage to donating online?
                    </button>
                    </h4>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Yes, as a primary resource to donate is very cost-effective unlike other channels like field offices or call centres.</div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0">
                    <h4 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Do I need any special hardware or software to donate online?
                    </button>
                    </h4>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">No. But if this is the first time that you are making an online transaction that involves the use of a credit card, you need to ensure that the transaction is secure. It is always better to use the most updated browser.</div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0">
                    <h4 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    How safe is my personal information?
                    </button>
                    </h4>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">We are committed to protecting your personal information.For more details, please do read our privacy policy.</div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0">
                    <h4 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                    What if my address or phone number changes?
                    </button>
                    </h4>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">You can always email us to update any change in information regarding your address or phone number at alapan.org.in</div>
                    </div>
                </div>
        
            </div>
            </div>
        </div>
    </div>
</div>
    
@endsection