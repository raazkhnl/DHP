<?php

namespace App\Http\Controllers;

use App\Models\React;
use Illuminate\Http\Request;

class ReactController extends Controller
{
    public function respond(Request $request, $blog)
    {
        $request->validate([
            'response'=>'required|in:0,1'
        ]);
        
        $entry=React::where('user_id', auth()->id())
            ->where('blog_id',$blog)
            ->first();
        if(!$entry)
        {
        React::create([
            'user_id'=>auth()->id(),
            'blog_id'=>$blog,
            'like'=>$request->response,

        ]);
        return redirect()->route('blog.dashboard')->with(['message' => 'Responded To The Blog!']);

        }else{
            return redirect()->back()->with(['message' => 'You Have Already Responded!']);
        }
    }
}
