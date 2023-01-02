<style> /* Header/Blog Title */ .header { padding: 30px; font-size: 40px; text-align: center; } /* Create two unequal columns that floats next to each other */ /* Left column */ .leftcolumn { float: left; width: 70%; padding: 10px; } /* Right column */ .rightcolumn { float: left; width: 30%; padding: 10px; } /* Fake image */ .fakeimg { background-color: #aaa; width: 100%; padding: 20px; } /* Add a card effect for articles */ .card { background-color: white; padding: 20px; margin-top: 20px; margin-left: 10px; } /* Clear floats after the columns */ .row1:after { content: ""; display: table; clear: both; } /* Footer */ .footer { padding: 20px; text-align: center; background: #ddd; margin-top: 20px; } /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */ @media screen and (max-width: 800px) { .leftcolumn, .rightcolumn { width: 100%; padding: 0; } } </style>
<x-app-layout>
    {{-- <-- Dharan Health Portal --> --}}
    <div class="container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
<center>                <b>Emergency Health Services</b>
</center>
            </h2>
        </x-slot>
  <!-- column starts -->
      <div class="container mt-3"style="color: brown"><h1 class="mt-3">Epidemic and Outbreak Surveillance Programme</h1></div>

  
    <hr />

    <!-- <h3 class="text-center" style="color: black">
      <u>Background and Scope</u>
    </h3> -->

    <p>
      Surveillance of communicable diseases is a systematic and ongoing process
      of collecting information and analyzing data on cases of infectious
      diseases. It provides relevant information to decision makers for public
      health priorities and resource allocation. By this process, public health
      professionals can determine actions that are needed to prevent outbreaks
      and reduce the burden of diseases of communicable diseases. Given below
      are the surveillance activities operated through EDCD.
    </p>

    <div style="color: brown"><h1 class="mt-3">Disaster management programme</h1></div>
    <hr />

    <!-- <h3 class="text-center" style="color: black">
      <u>Background and Scope</u>
    </h3> -->

    <p>
      Disaster Management is seeks to enhance health sector emergency
      preparedness and disaster response, including disaster related outbreak
      management in close coordination and in collaboration with stakeholders
      across the country. <br />
      The overall objective of this programme is to enhance the capacities of
      health sector in emergency preparedness and response by focusing on
      disaster preparedness, disaster risk reduction and response through
      following activities:<br />
      <li>Expediting the process of health sector contingency planning</li>
      <br />
      <li>
        Providing training to the health workers in emergency preparedness and
        disaster response
      </li>
      <br />
      <li>
        Strengthening the mechanism for multi-sectoral coordination and
        collaboration in relation to health sector disaster management
      </li>
      <br />
      <li>Preparing hospitals for emergency disaster preparedness</li>
      <br />
      <li>Stock-piling supplies, medicines, surgical kits and others at provincial levels </li>
      <br />
    </p>
  
    <!-- column ends-->
   </div>
</x-app-layout>