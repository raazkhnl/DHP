<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style> /* Header/Blog Title */
    :root {
    --color-primary: #0073ff;
    --color-white: #e9e9e9;
    --color-black: #005792;
    --color-black-1: #005792;
  }
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .menu-bar {
    background-color: var(--color-black);
    height: 80px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 5%;
  
    position: relative;
  }
  
  .menu-bar ul {
    list-style: none;
    display: flex;
  }
  
  .menu-bar ul li {
    /* width: 120px; */
    padding: 10px 30px;
    /* text-align: center; */
  
    position: relative;
  }
  
  .menu-bar ul li a {
    font-size: 15px;
    color: var(--color-white);
    text-decoration: none;
  
    transition: all 0.3s;
  }
  
  .menu-bar ul li a:hover {
    color: var(--color-primary);
  }
  
  .fas {
    float: right;
    margin-left: 10px;
    padding-top: 3px;
  }
  
  /* dropdown menu style */
  .dropdown-menu {
    display: none;
  }
  
  .menu-bar ul li:hover .dropdown-menu {
    display: block;
    position: absolute;
    left: 0;
    top: 100%;
    background-color: var(--color-black);
  }
  
  .menu-bar ul li:hover .dropdown-menu ul {
    display: block;
    margin: 10px;
  }
  
  .menu-bar ul li:hover .dropdown-menu ul li {
    width: 150px;
    padding: 10px;
  }
  
  .dropdown-menu-1 {
    display: none;
  }
  
  .dropdown-menu ul li:hover .dropdown-menu-1 {
    display: block;
    position: absolute;
    left: 150px;
    top: 0;
    background-color: var(--color-black);
  } .header { padding: 30px; font-size: 40px; text-align: center; }/* Create two unequal columns that floats next to each other */ /* Left column */ .leftcolumn { float: left; width: 75%; padding: 10px; } /* Right column */ .rightcolumn { float: left; width: 25%; padding: 10px; } /* Fake image */ .fakeimg { background-color: #aaa; width: 100%; padding: 20px; } /* Add a card effect for articles */ .card { background-color: white; padding: 20px; margin-top: 20px; margin-left: 10px; } /* Clear floats after the columns */ .row1:after { content: ""; display: table; clear: both; } /* Footer */ .footer { padding: 20px; text-align: center; background: #ddd; margin-top: 20px; } /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */ @media screen and (max-width: 800px) { .leftcolumn, .rightcolumn { width: 100%; padding: 0; } } </style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
        <center>                <b>Dharan Health Portal</b>
</center>
        </h2>
    </x-slot>

    <div class="row1">
        <div class="leftcolumn">
          <div class="row">
            @if (session()->has('message'))
                <h1 class="alert alert-info">{{ session()->get('message') }}</h1>
            @endif
           <div class="col-md-4">
           <div class="card">
           <a href="{{ route('blog.doctors') }}"><b><h1 style="color:brown;">👉Click Here For Doctor's Info</h1></b></a><br>

        
        <h3 class="text-center" style="color:brown;"><b>Recent population = 65,908</b></h3>
     


          </div>
          <div class="card">
            <b><h2 style="color:green;">Recent Accomplishment By DHP</h2></b>
            <hr>

          <li>DHP Now a successfull Kidney transplanter💖.</li><br>
          <li>1M Sanitary Pad distribution was successfull.</li><br>
          <li>200 oxygen cylinder was donated to BPKISH.</li><br>
          <li>Mask distribution programme was succeed.</li><br>
          <li>Health related awareness programme was accomplished.</li><br>
          <li>Hand sanitizer distribution programme was succeed.</li><br>
          <li>Soap distribution programme was succeed.</li><br>
          <li>Free jeewan jaal distribution.</li><br>
          <li>Free health checkup for oldage people.</li><br>




</div>
<div class="card">
<div class="row align-items-start mt-2">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="https://image.freepik.com/free-vector/people-sitting-hospital-corridor-waiting-doctor-patient-clinic-visit-flat-vector-illustration-medicine-healthcare_74855-8507.jpg"
                            class="d-block w-100" alt="healthcampimage" style="height:300px; width:250px">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.all-free-download.com/images/graphiclarge/hospital_drawing_doctor_helicopter_ambulance_icons_colored_cartoon_6835505.jpg"
                            class="d-block w-100" alt="healthcampimage" style="height:300px; width:250px">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://previews.123rf.com/images/artsqirrel/artsqirrel1801/artsqirrel180100003/92656806-the-patient-is-at-the-doctor-s-and-admitted-at-the-hospital-vector-illustration-.jpg"
                            class="d-block w-100" alt="healthcampimage" style="height:300px; width:250px">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
</div>

          

           


           </div>


           <div class="col-md-8">
             <div class="card">

             <div class="container-fluid">
        <div class="row align-items-start">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="https://www.unicef.org/sites/default/files/styles/press_release_feature/public/LUX_3090.JPG?itok=HsBFuep-"
                            class="d-block w-100" alt="healthcampimage" style="height:450px; width:100%">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.unrwa.org/sites/default/files/content/news_articles/news_article_103896_41236_1592906911.jpg"
                            class="d-block w-100" alt="healthcampimage" style="height:450px; width:100%">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://helpnepal.net/wp-content/uploads/2017/08/IMG_8336-870x432.jpg"
                            class="d-block w-100" alt="healthcampimage" style="height:450px; width:100%">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        <div class="row mt-4">
            <img src="https://image.freepik.com/free-vector/flat-hand-drawn-hospital-reception-scene_52683-54613.jpg"
                class="img-fluid" alt="vectorimage">
        </div>
    
    <div class="row mt-3">
        <b><u><h1 class="text-center mt-3" >Important Days</h1></u></b>
        <div class="col-md-3 mt-3 order-1 order-sm-0">
            <b><h1>12/12/2021</h1></b>
            <b><p>Polio Drops for children upto age 5</p></b>
        </div>
        <div class="col-md-3 mt-3 order-1 order-sm-0">
            <b><h1>15/12/2021</h1></b>
            <b><p>second dose of Astrazeneca</p></b>
        </div>
        <div class="col-md-3 mt-3 order-1 order-sm-0">
        <b><h1>19/12/2021</h1></b>        
      <b><p>1st Dose of covishield from age 16-45</p></b>
        </div>
        <div class="col-md-3 mt-3 order-1 order-sm-0">
            <b><h1>22/12/2021</h1></b>
            <b><p>1st Dose Medicine for Hattipaile</p></b>
        </div>
    </div>
    <div class="row mt-5" style="background-color: #005792;">
        <b><h1 class="text-center mt-3" style="color:white;">Personal Hygine And Sanitation</h1></b>
        <div class="col-md-4 mt-5 order-1 order-sm-0">
           
            <img src="https://www.houstonmethodist.org/-/media/images/contenthub/article-images/infectious-disease/hub_handwashing_social.jpg?mw=1382&hash=834247E75386EF88E99B87A8E7F754F6" style="height: 250px; width: 250px; border-radius: 4px;" alt="Washing Hand" class="img-fluid">
            <p style="color:white;">Wash your hands with soap after going to the toilet. </p><br>
            
           
        </div>
        <div class="col-md-4 mt-5 order-1 order-sm-0">
            
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIXRJdDVz65cAZfzogTNEXcgprGNZ3A0zZOaV3JzoYKzrm13OlqMf28azQfi965odkfOA&usqp=CAU" style="height: 250px; width: 250px; border-radius: 4px; "alt="" class="img-fluid">
            <p style="color:white;">Clean your teeth twice a day.</p><br><br>
            
        </div>
        <div class="col-md-4 mt-5 order-1 order-sm-0">
            
            <img src="https://www.cdc.gov/healthywater/hygiene/images/woman-sneezing.jpg" style="height: 250px; width: 250px; border-radius: 4px;" alt="" class="img-fluid">
            <p style="color:white;">Cover your mouth & nose with a tissue when sneezing.</p>
        </div>
         
    </div>
    <br>
    
    <div class="row p-2" style="background-color:#005792; color:white;">
    <center><b><h1 class="mt-3 p-2">Covid-19 Alert</h1></b>
    <img src="https://www.nepalitimes.com/wp-content/uploads/2020/07/Mask-fashion-in-Nepal-following-COVID-19-NT-3.jpg" alt="people in Mask" style="border-radius: 170px; height:250px; width:250px;">
     <h3 class="mt-2">Wear a mask</h3>
     <h3 class="mt-2">Clean your hands</h3>
     <h3 class="mt-2">Keep a safe distance</h3>
     <h3 class="mt-2">Go out only when needed</h3>
    </center>
    </div>
</div>

</div>

           </div>
        



</div>
        </div>


        <div class="rightcolumn">

            <div class="card">
            <div class="menu-bar">
        <ul>
            <li><a href="#" style="font-size: 20px;"><b>Important Links</b> <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-menu">
        <ul>
        <li><a href="https://www.who.int/" target="_blank">WHO</a></li>
          <li><a href="https://dohs.gov.np/information-systems/health-sector-information-system/" target="_blank">Health Infrastructure Information system</a></li>
          <li><a href="https://dohs.gov.np/" target="_blank" >Department of Health Services</a></li>
          <li><a href="https://heoc.mohp.gov.np/" target="_blank" >Health Emergency Operation Centre</a></li>
          <li><a href="https://www.who.int/news-room/fact-sheets/detail/climate-change-and-health" target="_blank">Climate Change And Health</a></li>
          <li><a href="https://npc.gov.np/en" target="_blank">Regional Planning Commission</a></li>
        </ul>
        </div>

                
            </div>
            <div class="card">
                <h2><b>About Us</b></h2>
                <div><img src="storage\Images\RaaZ.jpg" class="img-fluid" style="width:150px height:200px; " alt="">
                </div>
                <p class="text-success" style="text-align: justify">&nbsp;&nbsp;&nbsp; The Dharan Health Portal (DHP) is responsible for overall policy formulation, planning, organisation and coordination of the health sector at municipality levels. The goal of DHP is to improve the health status of all people living in that region through effective and efficient policy formulation, resource mobilization, monitoring and regulation of delivery of health services by different health institutions.
                 
                </p>
            </div>
            <div class="card">
                <h3><b>Popular Post</b></h3>
                <div ><a href="{{ asset('storage\Images\c1.jpg') }}" target="_blank"> <img src="{{ asset('storage\Images\c1.jpg') }}" class="img-fluid mt-3" style="width:150px height:200px; " alt=""></a></div><br>
                <div ><a href="{{ asset('storage\Images\c2.jpg') }}" target="_blank"><img src="{{ asset('storage\Images\c2.jpg') }}" class="img-fluid mt-3" style="width:150px height:200px; " alt=""></a></div><br>
                <div ><a href="{{ asset('storage\Images\c3.png') }}" target="_blank"><img src="{{ asset('storage\Images\c3.png') }}" class="img-fluid mt-3" style="width:150px height:200px; " alt=""></a></div>
            </div>
            <div class="card">
                <h3><b>Announcements</b></h3>
                <p>
                    I am so glad to report that our website is live now.. <br>so, Let's share our ideas and happiness...
                </p>
            </div>
        </div>
    </div>

    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</x-app-layout>
