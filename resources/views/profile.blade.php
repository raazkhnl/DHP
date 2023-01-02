<style> /* Header/Blog Title */ .header { padding: 30px; font-size: 40px; text-align: center; } /* Create two unequal columns that floats next to each other */ /* Left column */ .leftcolumn { float: left; width: 70%; padding: 10px; } /* Right column */ .rightcolumn { float: left; width: 30%; padding: 10px; } /* Fake image */ .fakeimg { background-color: #aaa; width: 100%; padding: 20px; } /* Add a card effect for articles */ .card { background-color: white; padding: 20px; margin-top: 20px; margin-left: 10px; } /* Clear floats after the columns */ .row1:after { content: ""; display: table; clear: both; } /* Footer */ .footer { padding: 20px; text-align: center; background: #ddd; margin-top: 20px; } /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */ @media screen and (max-width: 800px) { .leftcolumn, .rightcolumn { width: 100%; padding: 0; } } </style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
            <b><center>{{ __('User Profile') }}</center></b>
        </h2>
    </x-slot>

    <div class="card mt-3">
        <div class="card-body ml-10">
            <h1 class="text-xl text-success"><b><u> DETAILS</u></b></h1>
        <p><b>User Id: </b>{{ $user->id }}</p>
        <p><b>Name: </b>{{ $user->name }}</p>
        <p><b>Age: </b>{{ $user->age }}</p>
        <p><b>Blood Group: </b>{{ $user->bloodgr }} 🩸</p>
        <p><b>Email: </b>{{ $user->email }}</p>
        <p><b>Account Created At: </b>{{ $user->created_at }}</h2>

        <!-- @if ($user->email_verified_at == null)
            <p><b>Email verified status: </b>Unverified</p>
            
        @else
            <p><b>Email verified status: </b>Verified On
                {{ $user->email_verified_at }}</p>
        @endif -->
       <br> <b>Account Status: </b> <span class="text-success" ><b>You're logged in!</b></span>
    </div>
</div>
</x-app-layout>
