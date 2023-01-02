<style> /* Header/Blog Title */ .header { padding: 30px; font-size: 40px; text-align: center; } /* Create two unequal columns that floats next to each other */ /* Left column */ .leftcolumn { float: left; width: 70%; padding: 10px; } /* Right column */ .rightcolumn { float: left; width: 30%; padding: 10px; } /* Fake image */ .fakeimg { background-color: #aaa; width: 100%; padding: 20px; } /* Add a card effect for articles */ .card { background-color: white; padding: 20px; margin-top: 20px; margin-left: 10px; } /* Clear floats after the columns */ .row1:after { content: ""; display: table; clear: both; } /* Footer */ .footer { padding: 20px; text-align: center; background: #ddd; margin-top: 20px; } /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */ @media screen and (max-width: 800px) { .leftcolumn, .rightcolumn { width: 100%; padding: 0; } } </style>
<x-app-layout>
    {{-- <-- Dharan Health Portal --> --}}
    <div class="container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
<center>                <b>Free Health Services</b>
</center>
            </h2>
        </x-slot>
  <!-- column starts -->
  <div class="container-fluid mt-3"style="color: brown"><h1 class="mt-3">Non Communicable Diseases</h1>
    </div>
    <hr />

    <!-- <h3 class="text-center" style="color: black">
      <u>Background and Scope</u>
    </h3> -->

    <p>
      Non-communicable diseases are a major public health problem in Nepal
      accounting for around 60% of the total annual deaths in 2014 (WHO). The
      Package of Essential Non-communicable Diseases (PEN) has been introduced
      to screen, diagnose, treat and refer Cardio Vascular Diseases, COPD,
      cancer, diabetes, and mental health at health posts, primary health care
      centres and district hospitalhospitals for early detection and management
      of chronic diseases within the community. Non-communicable diseases (NCDs)
      are emerging as the leading cause of death globally and also in the South
      East Asia region due to many social determinants like unhealthy
      lifestyles, globalization, trade and marketing, demographic and economic
      transitions. The change in the status of these determinants has affected
      behavioral and metabolic risk factors of the general population to the
      NCDs. Cardiovascular diseases (CVD), Chronic non-infectious respiratory
      diseases (like COPD), Cancers and Diabetes Mellitus are referred as
      essential non-communicable disease with well-established common modifiable
      risk factors. Oral health, Mental Health and Road traffic Injuries are
      other NCDs in Nepal that has been growing at an alarming rate posing as
      major threats to public health. Behaviours like tobacco use, harmful use
      of alcohol, intake of high proportion of unhealthy diet like - consuming
      less fruits and vegetables, high salt and trans-fat consumption, and
      physical inactivity are the common modifiable risk factors of NCDs while
      overweight and obesity, raised blood pressure, raised blood glucose and
      abnormal blood lipids are the metabolic risk factors. Such behaviours are
      determined by social structures, economic disparities, and market forces
      that entice the people into buying and consuming unhealthy products such
      as ultra-processed foods and drinks, among other examples. Indoor air
      pollution is another important modifiable behavioral risk factor for the
      region and the country.
    </p>
  
    <!-- column ends-->
   </div>
</x-app-layout>