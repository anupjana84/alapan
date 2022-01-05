
@extends('layoutsfontend.master')

@section('content')

<div class="container" style="positione:relative;">
    <div class="row py-5">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills bg-light py-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link text-reset mb-3 fs-5 active" id="v-pills-overview-tab" data-bs-toggle="pill" data-bs-target="#v-pills-overview" type="button" role="tab" aria-controls="v-pills-overview" aria-selected="true">Overview</button>
                <button class="nav-link text-reset mb-3 fs-5" id="v-pills-vission-tab" data-bs-toggle="pill" data-bs-target="#v-pills-vission" type="button" role="tab" aria-controls="v-pills-vission" aria-selected="false">Vision</button>
                <button class="nav-link text-reset mb-3 fs-5" id="v-pills-mission-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mission" type="button" role="tab" aria-controls="v-pills-mission" aria-selected="false">Mission</button>
                <button class="nav-link text-reset mb-3 fs-5" id="v-pills-annual-tab" data-bs-toggle="pill" data-bs-target="#v-pills-annual" type="button" role="tab" aria-controls="v-pills-annual" aria-selected="false">Annual Report</button>
            </div>
        </div>
        <div class="col-md-9 mt-4 mt-md-0">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- Overview -->
                <div class="tab-pane fade show active" id="v-pills-overview" role="tabpanel" aria-labelledby="v-pills-overview-tab">
                    <p>Inspired by Swamiji's philosophy, a group of young corporate professionals came together in 1992 to set up together this language institution to work with grassroots initiatives for effecting positive changes in the lives of underprivileged children, their families and communities.
                         Sustainability, social equality and the environment are now business problems. And corporate leaders can't depend on governments to solve them.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <h5><i class="fas fa-hands-helping text-danger me-2"></i>Affiliated to</h5>
                            <p>Ramakishna Mission Institute of Culture, Kolkata, Nehru Yava Kendra Sangsthan (Govt. of India), PMKVY (Govt. of India)</p>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="fas fa-link text-danger me-2"></i>In Association with</h5>
                            <p>American Center, British Council Oxford Univercity Press & English & Foreign Language Univercity</p>
                        </div>
                    </div>
                </div>
                <!-- Vission -->
                <div class="tab-pane fade" id="v-pills-vission" role="tabpanel" aria-labelledby="v-pills-vission-tab">
                    <p><i class="fas fa-check text-danger me-2"></i>Work as a catalyst in bringing sustainable change in the lives of underprivileged children, youth and women, with a life-cycle approach of development.</p>
                    <p><i class="fas fa-check text-danger me-2"></i>Enable the civil society across the world to engage proactively in the change process through the philosophy of civic driven change.</p>
                    <p><i class="fas fa-check text-danger me-2"></i>Adopt highest standards of governance to emerge as a leading knowledge and technology driven, innovative and scalable international development organisation.</p>
                </div>
                <!-- Mission -->
                <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                    <p>To empower underprivileged children,
                         youth and women through relevant education, innovative healthcare and market-focused livelihood programmes.</p>
                    <p>To make everyone believe in 'can do'.</p>
                    <p>To promote psychological development and industry interface through various seminars and workshops.</p>
                    <p>To create an academic ambiance that will enable students to capitalise on the present demand for human resource in the global work place through proper language skills,
                    personality development and management skills.</p>
                    <img src="{{asset('./image/Banner/banner3.jpg')}}" alt="" class="img-fluid" style="width:100%; height:50%;">
                </div>
                <!-- Annual Report -->
                <div class="tab-pane fade" id="v-pills-annual" role="tabpanel" aria-labelledby="v-pills-annual-tab">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="{{asset('./image/Banner/boi.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Annul Report 2020</h5>
                                <a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-angle-right text-danger me-2"></i>More Info...</a> 
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="{{asset('./image/Banner/ice.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Annul Report 2019</h5>
                                <a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-angle-right text-danger me-2"></i>More Info...</a> 
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="{{asset('./image/Banner/smile.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Annul Report 2018</h5>
                                <a href="#" class="text-decoration-none text-danger fw-bold"><i class="fas fa-angle-right text-danger me-2"></i>More Info...</a> 
                                </div>
                            </div>
                        </div>

                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection