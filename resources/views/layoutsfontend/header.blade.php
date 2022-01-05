
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      <!-- Brand Name -->
      <a class="navbar-brand fs-2 fw-bold text-danger" href="{{url('/')}}">ALAPAN</a>
     
      <!-- Hamburgar -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Nav Links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ms-4">
            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <!-- Dropdown Menu -->
          <li class="nav-item dropdown ms-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Features</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{url('/gelary')}}">Image Galary</a></li>
              <li><a class="dropdown-item" href="{{url('/blog')}}">Blog</a></li>
              <!--<li><a class="dropdown-item" href="{{url('/faq')}}">FAQs</a></li>-->
            </ul>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link" href="{{url('/about')}}">About Us</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
          </li>
          <!--<li class="nav-item ms-4">-->
          <!--  <a class="nav-link" href="http://www.alapan.in/image/Banner/members_ala.pdf" target="_blank">Holistic</a>-->
          <!--</li>-->
          <li class="nav-item ms-4">
            <a class="nav-link" href="{{url('/stafff')}}" >Holistic Education</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link fw-bold text-danger"href="{{url('/')}}"><i class="fas fa-heart pe-1"></i>Donate</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>