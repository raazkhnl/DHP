<style>img:hover { opacity: 0.8; } button:hover { opacity: 0.999; } .service-list { background-color: rgb(82, 59, 59); cursor: pointer; color: black; } .service-list:hover { opacity: 0.6; } </style>
<x-app-layout>
    {{-- <-- Edit Blog --> --}}
    <div class="container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
<center>                <b>Contact Us</b>
</center>
            </h2>
        </x-slot>
               <!-- column starts -->
               <div class="card m-3">
            <div class="card-body">
                <form action="{{ route('blog.savef') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row mt-3">
                        <div class="form-group col-md-12">
                            <label for="title">Name</label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Enter Your Name">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="10"
                            placeholder="Feedbacks..."></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    

                    <button type="submit" class="btn btn-success mt-3" style="color: black;">Submit</button>
                </form>
            </div>
        </div>
  <!-- column ends-->
        </div>
    </x-app-layout>