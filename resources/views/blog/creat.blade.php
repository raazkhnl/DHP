<style> /* Header/Blog Title */ .header { padding: 30px; font-size: 40px; text-align: center; } /* Create two unequal columns that floats next to each other */ /* Left column */ .leftcolumn { float: left; width: 70%; padding: 10px; } /* Right column */ .rightcolumn { float: left; width: 30%; padding: 10px; } /* Fake image */ .fakeimg { background-color: #aaa; width: 100%; padding: 20px; } /* Add a card effect for articles */ .card { background-color: white; padding: 20px; margin-top: 20px; margin-left: 10px; } /* Clear floats after the columns */ .row1:after { content: ""; display: table; clear: both; } /* Footer */ .footer { padding: 20px; text-align: center; background: #ddd; margin-top: 20px; } /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */ @media screen and (max-width: 800px) { .leftcolumn, .rightcolumn { width: 100%; padding: 0; } } </style>
<x-app-layout>
    {{-- <-- Create Event --> --}}
    <div class="container mt-3">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
                <b><center>{{ __('Create A New Blog') }}</center></b>
            </h2>
        </x-slot>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('blog.save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row mt-3">
                        <div class="form-group col-md-12">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Title of the Blog">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group mt-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="10"
                            placeholder="Description on the Blog"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo"
                            accept="image/png, image/png, image/jpeg">
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success mt-3" style="color: black;">Create Blog</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
