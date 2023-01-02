<style> /* Header/Blog Title */ .header { padding: 30px; font-size: 40px; text-align: center; } /* Create two unequal columns that floats next to each other */ /* Left column */ .leftcolumn { float: left; width: 70%; padding: 10px; } /* Right column */ .rightcolumn { float: left; width: 30%; padding: 10px; } /* Fake image */ .fakeimg { background-color: #aaa; width: 100%; padding: 20px; } /* Add a card effect for articles */ .card { background-color: white; padding: 20px; margin-top: 20px; margin-left: 10px; } /* Clear floats after the columns */ .row1:after { content: ""; display: table; clear: both; } /* Footer */ .footer { padding: 20px; text-align: center; background: #ddd; margin-top: 20px; } /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */ @media screen and (max-width: 800px) { .leftcolumn, .rightcolumn { width: 100%; padding: 0; } } </style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
        <center>                <b>Blog</b>
</center>
        </h2>
    </x-slot>
    
    <div class="row1">
        <div class="leftcolumn">
            @if (session()->has('message'))
                <h1 class="alert alert-info">{{ session()->get('message') }}</h1>
            @endif
            @foreach ($blogs as $blog)
                {{-- Blog List --}}
                <div class="card">
                    <h1><b>{{ $blog->user->name }}</b> created a blog.</h2>
                        <h5><b>at</b> <span id="datetime">{{ $blog->created_at }}</span></h5>
                        <h1 class="card-title"><b>{{ $blog->title }}</b></h5>
                            <div class="col-md-6">
                                <a href="#" style=""><img src="{{ asset('storage/' . $blog->image) }}"
                                        class="img-fluid" style="width:350px height:300px; " alt="..."> </a>
                            </div>
                            <p class="card-text">{{ $blog->description }}</p>


                            @auth
                                <span>
                                    <form action="{{ route('blog.respond', $blog->id) }}" class="d-inline" method="post" style="background-color: none;">
                                        @csrf
                                        <input type="hidden" value="1" name="response">
                                        <button class="btn btn-sm btn-success" type="submit" style="color: black;">Like👍:
                                            {{ $blog->likes_count }} </button>
                                    </form>

                                    <form action="{{ route('blog.respond', $blog->id) }}" class="d-inline" method="post">
                                        @csrf
                                        <input type="hidden" value="0" name="response">
                                        <button class="btn btn-sm btn-danger" type="submit" style="color: black;">Dislike👎:
                                            {{ $blog->dislikes_count }}</button>
                                    </form>
                                    <span><a href="{{ route('blog.comment', $blog->id) }}"
                                            class="btn btn-primary btn-sm">Comment</a></span>
                                            

                                    @if ($blog->user_id == auth()->id())
                                        <span><a href="{{ route('blog.edit', ['blog' => $blog->id]) }}"
                                                class="btn btn-warning btn-sm">Edit</a></span>
                                        <form action="{{ route('blog.delete', ['blog' => $blog->id]) }}" class="d-inline"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            {{-- //Method Scoofing --}}
                                            <button type="submit" class="btn btn-danger" style="color: black;">Delete</button>
                                        </form>

                                    @endif
                                </span>
                            @endauth
                </div>
            @endforeach
        </div>


        <div class="rightcolumn">
            <div class="card">
                <h2><b>About Us</b></h2>
                <div><img src="storage\Images\RaaZ.jpg" class="img-fluid" style="width:150px height:200px; " alt="">
                </div>
                <p class="text-success" style="text-align: justify">&nbsp;&nbsp;&nbsp; The Dharan Health Portal (DHP) is responsible for overall policy formulation, planning, organisation and coordination of the health sector at municipality levels. The goal of DHP is to improve the health status of all people living in that region through effective and efficient policy formulation, resource mobilization, monitoring and regulation of delivery of health services by different health institutions.
                </p>
            </div>
            <div class="card">
                <h3><b>Recent Post</b></h3>
                <div class="fakeimg">
                <h1><b>{{ $blog->user->name }}</b> created a blog.</h2>
                    <h1 class="card-title"><b>{{ $blog->title }}</b></h5>
                            <div class="col-md-6">
                                <a href="#" style=""><img src="{{ asset('storage/' . $blog->image) }}"
                                        class="img-fluid" style="width:350px height:300px; " alt="..."> </a>
                            </div>
                            <p class="card-text">{{ $blog->description }}</p></div><br>
            </div>
            <div class="card">
                <h3><b>Announcements</b></h3>
                <p>
                    I am so glad to report that our website is live now.. <br>so, Let's share our ideas and happiness...
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
