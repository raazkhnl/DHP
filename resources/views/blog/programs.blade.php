<style>img:hover { opacity: 0.8; } button:hover { opacity: 0.999; } .service-list { background-color: #005792; cursor: pointer; color: white; } .service-list:hover { opacity: 0.6; } </style>
<x-app-layout>
    {{-- <-- Dharan Health Portal --> --}}
    <div class="container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
<center>                <b>Programs</b>
</center>
            </h2>
        </x-slot>
  <!-- column starts -->
  <div class="container-fluid mb-5">
        <div class="our-services mt-5">
         
          <div class="row text-center mt-5">
            <div class="col-md-4">
                <a href="{{ route('blog.maternal') }}">
            <div class="service-list mt-3 py-5" >
              <center><img src="{{ asset('storage\Images\1.png') }}" style="height: 80px; width: 80px;" class="img-fluid"></center>
              <br>
              <h3>Reproductive & Maternal Health</h3><br>
                <p class="text-center px-2">
                    <li>Family Planning Programme</li>
                    <li>Safe motherhood Programme</li>
                    <li>Female Community Health and Awareness Programme</li>
                    
                </p>
        </div>
    </a>
      </div>
      <div class="col-md-4">
      <a href="{{ route('blog.child') }}">
        <div class="service-list mt-3 py-5">
                     <center><img src="{{ asset('storage\Images\2.png') }}" style="height: 80px; width: 80px;" class="img-fluid"></center>
                  <br>
                <h3>Child Health Services</h3><br>
                <p class="text-center px-2">
                    <li>Communnity Based Integrated Management of Neonatal And Childhood Illnesses</li>
                    <li>Regional Immunisation Programme</li>
                    <li>Nutrition Programme</li>
                
                </p>
                  
        </div>
        </a>
      </div>
      <div class="col-md-4">
      <a href="{{ route('blog.free') }}">
        <div class="service-list mt-3 py-5">
            <center><img src="{{ asset('storage\Images\3.png') }}" style="height: 80px; width: 80px;" class="img-fluid"></center>
            <br>
            <h3>Free Health Programme</h3><br>
            <p class="text-center px-2">
                <li>Package of Essential Non-Communicable Diseases</li>
                <li>Services including Essential Needs</li>
                <li>Package of Essential Health services</li>

            </p>
        </div>
        </a>
      </div>
      <div class="col-md-4">
      <a href="{{ route('blog.disease') }}" >
        <div class="service-list mt-3 py-5">
          <center><img src="{{ asset('storage\Images\4.png') }}" style="height: 80px; width: 80px;" class="img-fluid"></center>
          <br>
            <h3>Communicable Diseases</h3><br>
            <p class="text-center px-2">
                <li>Lymphatic filariasis Elimination </li>
                <li>Dengue Control Programme</li>
                <li>Leprosy Control Programme</li>
                <li>HIV and STI control Programme</li>
            </p>
        </div>
        </a>
      </div>
      <div class="col-md-4">
      <a href="{{ route('blog.emergency') }}" >
        <div class="service-list mt-3 py-5">
          <center><img src="{{ asset('storage\Images\5.png') }}" style="height: 80px; width: 80px;" class="img-fluid"></center>
          <br>
            <h3>Emergency Health Management</h3><br>
            <p class="text-center px-2">
                <li>Epidemic and Outbreak Surveillance Programme</li>
                <li>Disaster Management Programme</li>
                <li>Pendemic and Outbreak Service Programme</li>
                
            </p>
        </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="https://docs.google.com/spreadsheets/d/1aHBDC9GyAL91haKbZqm_UZtuQnph8ernRA93Y9YG8P8/edit#gid=0" target="_blank">
        <div class="service-list mt-3 py-5">
          <center><img src="{{ asset('storage\Images\6.png') }}" style="height: 80px; width: 80px;" class="img-fluid"></center>
          <br>
            <h3>Blood Group Info</h3><br><br>
            <ul>View/Download</ul>
            <ul>PDF</ul>
            <ul>Here</ul>

              
          </div>
          </a>
        </div>
      </div>
      </div>
      </div>

  
  <!-- column ends-->
        </div>
    </x-app-layout>