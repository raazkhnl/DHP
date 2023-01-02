<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('blog/dashboard', 'App\Http\Controllers\BlogController@index')->name('blog.dashboard');


Route::get('user/{id}/profile', 'App\Http\Controllers\UserController@profile')
    ->middleware(['auth'])->name('user.profile');

Route::get('blog/creat', function () {
    return view('blog.creat');
})
    ->name('blog.creat')
    ->middleware('auth');

    Route::get('blog/feedback', function () {
        return view('blog.feedback');
    })
        ->name('blog.feedback')
        ->middleware('auth');

Route::post('blog/save', 'App\Http\Controllers\BlogController@store')
    ->name('blog.save')
    ->middleware('auth');

    Route::post('blog/savef', 'App\Http\Controllers\FeedbackController@store')
    ->name('blog.savef')
    ->middleware('auth');

//Route Promote//Route Model Binding
Route::get('blog/{blog}/edit', 'App\Http\Controllers\BlogController@edit')->name('blog.edit');

Route::put('blog/{blog}/update', 'App\Http\Controllers\BlogController@update')->name('blog.update');

Route::delete('blog/{blog}', 'App\Http\Controllers\BlogController@delete')->name('blog.delete');

        Route::get('blog/feedback', function () {
    return view('blog.feedback');
})
    ->name('blog.feedback');

Route::get('blog/news', function () {
         return view('blog.news');
})->name('blog.news');
Route::get('blog/hospitals', function () {
    return view('blog.hospitals');
})->name('blog.hospitals');
Route::get('blog/maternal', function () {
    return view('blog.maternal');
})->name('blog.maternal');

Route::get('blog/free', function () {
    return view('blog.free');
})->name('blog.free');
Route::get('blog/child', function () {
    return view('blog.child');
})->name('blog.child');
Route::get('blog/disease', function () {
    return view('blog.disease');
})->name('blog.disease');
Route::get('blog/emergency', function () {
    return view('blog.emergency');
})->name('blog.emergency');

Route::get('blog/doctors', function () {
    return view('blog.doctors');
})->name('blog.doctors');

Route::get('blog/programs', function () {
         return view('blog.programs');
        })
                ->name('blog.programs');

            Route::get('blog/institutions', function () {
                return view('blog.institutions');
            })
                ->name('blog.institutions');
            

                Route::get('blog/service', function () {
                    return view('blog.service');
                })
                    ->name('blog.service');
                    Route::get('blog/aboutus', function () {
                        return view('blog.aboutus');
                    })
                        ->name('blog.aboutus');

                        Route::get('blog/contact', function () {
                            return view('blog.feedback');
                        })
                            ->name('blog.contact');

Route::get('blog/home', function () {
    return view('blog.home');
})
    ->name('blog.home');

// Participant related routes
Route::post('respond/{blog}', 'App\Http\Controllers\ReactController@respond')->name('blog.respond');

Route::get('blog/{id}/comment', 'App\Http\Controllers\BlogController@comment')->name('blog.comment')->middleware('auth');

Route::post('comment/save', 'App\Http\Controllers\CommentController@store')
    ->name('comment.save')
    ->middleware('auth');

require __DIR__ . '/auth.php';
