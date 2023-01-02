<style>img:hover { opacity: 0.8; } button:hover { opacity: 0.999; } .service-list { background-color: rgb(82, 59, 59); cursor: pointer; color: black; } .service-list:hover { opacity: 0.6; } </style>
<x-app-layout>
    {{-- <-- Dharan Health Portal --> --}}
    <div class="container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
<center>                <b>Hospitals Available</b>
</center>
            </h2>
        </x-slot>
  <!-- column starts -->
  <div class="card m-3">
  <div class="container-fluid"> <!-- left column starts -->
      <b><h1 class="text-center mt-5 ">Government Hospitals</h1></b><hr />
      <div class="row">
         <div class="col-md-2 mt-1 order-1 order-sm-0">
             <h4 class="text-center mt-5" style="color:black;">S.No:</h4>
             <div class="S.No:">
             <table class="table table-hover">
                 <tr>
                 <td>
                     <a href=""><h5>1</h5></a>
                  </td>
                </tr>
 
       
 
 
              </table>
           </div>
          </div>
      
          <div class="col-md-6 mt-1 order-1 order-sm-0">
            <h4 class="text-center mt-5" style="color:black;">Hospitals Name</h4>
            <!-- <div class="S.No:"> -->
            <table class="table table-hover">
                <tr>
                <td>
                    <a href=""><h5>B.P. Koirala Institute of Health Sciences</h5></a>
                 </td>
               </tr>

               

             </table>
          <!-- </div> -->
         </div>
      
         <div class="col-md-4 mt-1 order-1 order-sm-0">
          <h4 class="text-center mt-5" style="color:black;">Contact</h4>
          <div class="S.No:">
          <table class="table table-hover">
              <tr>
              <td>
                  <a href=""><h5>+977-25-525555</h5></a>
               </td>
             </tr>

            
           </table>
        </div>
       </div>
    </div>

    <b><h1 class="text-center mb-1">Private Hospitals</h1></b><hr />

    <div class="row">
      <div class="col-md-2 mt-1 order-1 order-sm-0">
          <h4 class="text-center mt-5" style="color:black;">S.No:</h4>
          <div class="S.No:">
          <table class="table table-hover">
              <tr>
              <td>
                  <a href=""><h5>1</h5></a>
               </td>
             </tr>

              <tr>
              <td>
                  <a href=""><h5>2</h5></a>
              </td>
              </tr>
              <tr>
              <td>
                 <a href=""><h5>3</h5></a>
              </td>
              </tr>

              <tr>
              <td>
                  <a href=""><h5>4</h5></a>
              </td>
              </tr>

            


           </table>
        </div>
       </div>
   
       <div class="col-md-6 mt-1 order-1 order-sm-0">
         <h4 class="text-center mt-5" style="color:black;">Hospitals Name</h4>
         <!-- <div class="S.No:"> -->
         <table class="table table-hover">
             <tr>
             <td>
                 <a href=""><h5>Bijayapur Hospital</h5></a>
              </td>
            </tr>

             <tr>
             <td>
                 <a href=""><h5>Shaurya Health Care Foundation Limited</h5></a>
             </td>
             </tr>
             <tr>
             <td>
                <a href=""><h5>Dharan Hospital</h5></a>
             </td>
             </tr>

             <tr>
             <td>
                 <a href=""><h5>Spark five Hospital</h5></a>
             </td>
             </tr>

           


          </table>
       <!-- </div> -->
      </div>
   
      <div class="col-md-4 mt-1 order-1 order-sm-0">
       <h4 class="text-center mt-5" style="color:black;">Contact</h4>
       <div class="S.No:">
       <table class="table table-hover">
           <tr>
           <td>
               <a href=""><h5>+977-025-533490</h5></a>
            </td>
          </tr>

           <tr>
           <td>
               <a href=""><h5>+977-025-520041</h5></a>
           </td>
           </tr>
           <tr>
           <td>
              <a href=""><h5>+977-025-520097</h5></a>
           </td>
           </tr>

           <tr>
           <td>
               <a href=""><h5>+977-025-522235</h5></a>
           </td>
           </tr>



        </table>
     </div>
    </div>
 </div>
 <b><h1 class="text-center mb-1">Health Pharmacies</h1></b>
 <div class="row">
  <div class="col-md-2 mt-1 order-1 order-sm-0">
      <h4 class="text-center mt-5" style="color:black;">S.No:</h4>
      <div class="S.No:">
      <table class="table table-hover">
          <tr>
          <td>
              <a href=""><h5>1</h5></a>
           </td>
         </tr>

          <tr>
          <td>
              <a href=""><h5>2</h5></a>
          </td>
          </tr>
          <tr>
          <td>
             <a href=""><h5>3</h5></a>
          </td>
          </tr>

          <tr>
          <td>
              <a href=""><h5>4</h5></a>
          </td>
          </tr>

          <tr>
          <td>
              <a href=""><h5>5</h5></a>
          </td>
          </tr>


       </table>
    </div>
   </div>

   <div class="container col-md-6 mt-3 order-1 order-sm-0">
     <h4 class="text-center mt-5" style="color:black;">Hospitals Name</h4>
     <!-- <div class="S.No:"> -->
        <table class="table table-hover">
 
         <tr>
         <td>
             <a href=""><h5>Sagarmatha Medical Hall</h5></a>
          </td>
        </tr>

         <tr>
         <td>
             <a href=""><h5>Dhanlaxmi Medical hall</h5></a>
         </td>
         </tr>
         <tr>
         <td>
            <a href=""><h5>Rajan Medical Hall</h5></a>
         </td>
         </tr>

         <tr>
         <td>
             <a href=""><h5>Panchamukhi Pharmacy</h5></a>
         </td>
         </tr>

         <tr>
         <td>
             <a href=""><h5>Nidan Pharmacy</h5></a>
         </td>
         </tr>


      </table>
   <!-- </div> -->
  </div>

  <div class="col-md-4 mt-1 order-1 order-sm-0">
   <h4 class="text-center mt-5" style="color:black;">Contact</h4>
   <div class="S.No:">
   <table class="table table-hover">
       <tr>
       <td>
           <a href=""><h5>+977-9804036712</h5></a>
        </td>
      </tr>

       <tr>
       <td>
           <a href=""><h5>+977-025-526660</h5></a>
       </td>
       </tr>
       <tr>
       <td>
          <a href=""><h5>+977-025-528487</h5></a>
       </td>
       </tr>

       <tr>
       <td>
           <a href=""><h5>+977-025-530770</h5></a>
       </td>
       </tr>

       <tr>
       <td>
           <a href=""><h5>+977-025-599076</h5></a>
       </td>
       </tr>


    </table>
 </div>
</div>
</div>
</div>
</div>
  <!-- column ends-->
        </div>
    </x-app-layout>