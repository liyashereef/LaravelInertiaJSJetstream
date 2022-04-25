<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/', function () {
    return inertia::render('Welcome',[
        "appname"=>"Data Collection App",
        "frameworks"=>[
            "Java","Php"
        ]
    ]);
});

Route::inertia('homepage', function () {
    return inertia::render('homepage',[
        "appname"=>"Data Collection App",
        "frameworks"=>[
            "Java","Php"
        ]
    ]);
});
Route::get('users', function () {
    $cTime = now()->toDateTimeString();
    $query = User::query();
    if(null!=request('search')){
        $query = $query->where('name','Like','%'.request('search').'%');
    }
    $users = $query->paginate(10);
    
    return inertia::render('Users/Index',["users"=>$users]);
})->name('users');

Route::get('usercreate', function () {
    
    
    return inertia::render('Users/Create');
})->name('usercreate');
Route::post('usercreate', function () {
    
    
    return inertia::render('Users/Create');
})->name('usercreate');

Route::get('settings', function () {
    return inertia::render('Settings');
});
Route::post('logout', function () {
   // dump(request('username'));
});
