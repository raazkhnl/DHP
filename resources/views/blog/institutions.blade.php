<style>img:hover { opacity: 0.8; } button:hover { opacity: 0.999; } .service-list { background-color: #005792; cursor: pointer; color: white; } .service-list:hover { opacity: 0.6; } </style>
<x-app-layout>
    {{-- <-- Dharan Health Portal --> --}}
    <div class="container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
<center>                <b>Health Institutions</b>
</center>
            </h2>
        </x-slot>
  <!-- column starts -->
  <div class="container-fluid mb-5">
        <div class="our-services mt-5">
         
          <div class="row text-center mt-5">
            <div class="col-md-4">
                <a href="{{ route('blog.hospitals') }}" target="_blank">
            <div class="service-list mt-3 py-5" >
              <center><img src="{{ asset('storage\Images\h1.png') }}" style="height: 80px; width: 80px;" class="img-fluid"></center>
              <br>
              <h3>Government Hospitals</h3><br>
                <p class="text-center px-2">
                    <li>Regional Hospital </li>
                    <li>Teaching Hospital</li>

                </p>
        </div>
    </a>
      </div>
      
      
      
      <div class="col-md-4">
        <a href="{{ route('blog.hospitals') }}" target="_blank">
        <div class="service-list mt-3 py-5">
          <center><img src="{{ asset('storage\Images\h2.png') }}" style="height: 80px; width: 80px;" class="img-fluid"></center>
          <br>
            <h3>Private Hospitals</h3><br>
            <p class="text-center px-2">
                <li>Bijaypur Hospital</li>
                <li>Shaurya HealthCare Foundation Pvt. Ltd.</li>
                
            </p>
        </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{ route('blog.hospitals') }}" target="_blank">
        <div class="service-list mt-3 py-5">
          <center><img src="{{ asset('storage\Images\h3.png') }}" style="height: 80px; width: 80px;" class="img-fluid"></center>
          <br>
            <h3>Pharmacy</h3><br>
            <p class="text-center px-2">
                <li>Sampang Medical Hall</li>
                <li>Siddhakali Pharmacy</li>
                
            </p>
              
          </div>
          </a>
        </div>
      </div>
      </div>
      </div>
  
  <!-- column ends-->
        </div>
    </x-app-layout>