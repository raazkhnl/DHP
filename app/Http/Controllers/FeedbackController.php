<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //Displaying all data from db
    public function index()
    {
       
        return view('home', compact('home'));
    }
    public function creat()
    {
        $feedbacks=Feedback::with('user')
        ->get() ;  
       
        return view('blog.feedback');
    }
    //Validating and saving data to db
    public function store(Request $request)
   { 
       //requesting data into respective name of form and validating
       $request->validate([
           'title'=>'required|max:50',
           'description'=>'required',
       ]);

       
    //    Saving in DB
    //    Feedback::create([
    //        'title'=>$request->title,
    //        'description'=>$request->description,
    //        'user_id'=> auth()->id(),

    //    ]);
       return redirect()->route('dashboard')->with(['message'=> 'Responded!']);
   }

   public function show($id)
   {
       $feedbacks= Feedback::find($id);

       return view('show', compact('feedback'));
   }

}
