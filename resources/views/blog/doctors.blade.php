<style> /* Header/Blog Title */ .header { padding: 30px; font-size: 40px; text-align: center; } /* Create two unequal columns that floats next to each other */ /* Left column */ .leftcolumn { float: left; width: 70%; padding: 10px; } /* Right column */ .rightcolumn { float: left; width: 30%; padding: 10px; } /* Fake image */ .fakeimg { background-color: #aaa; width: 100%; padding: 20px; } /* Add a card effect for articles */ .card { background-color: white; padding: 20px; margin-top: 20px; margin-left: 10px; } /* Clear floats after the columns */ .row1:after { content: ""; display: table; clear: both; } /* Footer */ .footer { padding: 20px; text-align: center; background: #ddd; margin-top: 20px; } /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */ @media screen and (max-width: 800px) { .leftcolumn, .rightcolumn { width: 100%; padding: 0; } } </style>
<x-app-layout>
    {{-- <-- Dharan Health Portal --> --}}
    <div class="container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
<center>                <b>List of Available Doctors</b>
</center>
            </h2>
        </x-slot>
  <!-- column starts -->
  
  <div class="container-fluid"> 
      
       
        <b><center><h3 class="mt-3"><u>General Practioner</u></h3></center></b>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p1.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4">Name:- Dr. Arjun Narayan<br>
                         Age:- 40<br>
                         Hospital Name:- BP<br>
                         Available Time:- 02:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>

        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p2.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Lisa Rajput<br>
                         Age:- 24<br>
                         Hospital Name:- BP<br>
                         Available Time:- 02:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p3.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Anjana Shrestha<br>
                         Age:- 29<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/om.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Om Prakash Yadav<br>
                         Age:- 24<br>
                         Hospital Name:- Eastern Region Hospital<br>
                         Available Time:- 10:00P.M.-02:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p5.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Rajan Shrestha<br>
                         Age:- 45<br>
                         Hospital Name:- BMcgill Physiotherapy<br>
                         Available Time:- 02:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p6.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Babu Ram Bhattrai<br>
                         Age:- 74<br>
                         Hospital Name:- BP<br>
                         Available Time:- 02:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <hr>
        <b><center><h3 class="mt-3"><u>Pediatrist</u></h3></center></b>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p7.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4">Name:- Dr. Urmila Basnet<br>
                         Age:- 40<br>
                         Hospital Name:- BP<br>
                         Available Time:- 02:00P.M.-05:00P.M.<br>
                         Available Days:- Wednesday-Friday<br>
                        </p>

                        </div>
        </div>

        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p8.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr.Puspa Uprety<br>
                         Age:- 24<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 10:00P.M.-01:00P.M.<br>
                         Available Days:- Sunday-Tuesday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p9.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Abhishek Shrestha<br>
                         Age:- 29<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 11:00P.M.-02:00P.M.<br>
                         Available Days:- Monday-Friday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p10.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Susila Bista<br>
                         Age:- 42<br>
                         Hospital Name:- Eastern Region Hospital<br>
                         Available Time:- 11:00P.M.-02:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p11.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Asmita Ghimire<br>
                         Age:- 35<br>
                         Hospital Name:- Bp<br>
                         Available Time:- 09:00P.M.-01:00P.M.<br>
                         Available Days:- Sunday-Wednesday<br>
                        </p>

                        </div>
        </div>
        <hr>
        <b><center><h3 class="mt-3"><u>General Surgen</u></h3></center></b>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p12.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4">Name:- Dr. Rakesh Yadav<br>
                         Age:- 40<br>
                         Hospital Name:- BP<br>
                         Available Time:- 02:00P.M.-09:00P.M.<br>
                         Available Days:- Sunday-tuesday<br>
                        </p>

                        </div>
        </div>

        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p13.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Lisa Lama<br>
                         Age:- 24<br>
                         Hospital Name:- BP<br>
                         Available Time:- 011:00P.M.-08:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p14.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Raju Shrestha<br>
                         Age:- 29<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p15.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Ajay Bista<br>
                         Age:- 55<br>
                         Hospital Name:- Eastern Region Hospital<br>
                         Available Time:- 10:00P.M.-02:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
                    </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p14.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Heavy Shrestha<br>
                         Age:- 39<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <hr>

        <b><center><h3 class="mt-3"><u>Dermatologist</u></h3></center></b>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p15.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Rajesh Shrestha<br>
                         Age:- 78<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>

        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p16.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Neha Shah<br>
                         Age:- 60<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <hr>

        <b><center><h3 class="mt-3"><u>Dentist</u></h3></center></b>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p17.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Rikesh Kumar Sah<br>
                         Age:- 29<br>
                         Hospital Name:- BP Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p18.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Krishna Yadav<br>
                         Age:- 45<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Sunday-Friday<br>
                        </p>

                        </div>
        </div>
        <hr>

        <b><center><h3 class="mt-3"><u>Opthalmologist</u></h3></center></b>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/p21.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Sanduk Ruit<br>
                         Age:- 67<br>
                         Hospital Name:- BP Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Everyday<br>
                        </p>

                        </div>
        </div>
        <hr>

        <b><center><h3 class="mt-3"><u>Psychiatrist</u></h3></center></b>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/rikesh.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Rikesh Kumar Sah<br>
                         Age:- 25<br>
                         Hospital Name:- BP Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Everyday<br>
                        </p>

                        </div>
        </div>
<hr>
        <b><center><h3 class="mt-3"><u>Gynaecologist</u></h3></center></b>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/sabina.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Sabina Thapa<br>
                         Age:- 50<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Everyday<br>
                        </p>

                        </div>
        </div>
        <hr>

       <b> <center><h3 class="mt-3"><u>Neuro Surgeon</u></h3></center></b>
        <div class="row">
            
            <div class="col-md-6 mt-5 order-1 order-sm-0">

                <center><img src="../storage/Images/rajan.jpg" style="height: 200px; width: 200px;" class="img-fluid">
                    </center>

                    </div>

                    <div class="col-md-6 mt-5 order-1 order-sm-0">
                        <p class="text-center px-3 mt-4"style="">Name:- Dr. Rajan Mahato<br>
                         Age:- 25<br>
                         Hospital Name:- Dharan Hospital<br>
                         Available Time:- 10:00P.M.-05:00P.M.<br>
                         Available Days:- Everyday<br>
                        </p>

                        </div>
        </div><br><br>


    </div>
    <!-- column ends-->
   </div>
</x-app-layout>