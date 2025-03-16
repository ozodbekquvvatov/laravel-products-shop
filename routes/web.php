<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

Route::get('/', function (                                                   ) {

    // $users = DB::table('users')->get();
    
    // $users = DB::table('users')->where('status','active')->get();
    // $users = DB::table('users')->where('age','>',25)->get();
    // $users = DB::table('users')->orderBy('created_at','desc')->get();
//     // $users = DB::table('users')->orderBy('id', 'desc')->limit(5)->get();
    // $users = DB::table('users')->insert([
        
    //     'name' => 'Elon Musk',
    //     'email' => 'elonddmussdk1191@gmail.com',
    //     'age' => 45,
    //     'status' => 'active',
    //     'password' => bcrypt('Im rich') 

    // ]);
//     $users = DB::table('users')->where('id',8)->update([
//         'name' => 'Bill Gates',
//         'email' => 'BillGates@gmail.com',
//         'age' => 60,
//         'status' => 'active',
//         'password' => bcrypt('12345678'),


//     ]);
        // $users = DB::table('users')->where('id', operator: 10)->delete();

// dd($users);
     return view('welcome',compact('users'));
});




Route::resource('products',ProductController::class)->names('products');
