<?php

use App\Http\Controllers\StudController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function() {   

    // Registration Routes
    Route::get('/register', 'RegisterController@show')->name('register');
    Route::post('/register/store', 'RegisterController@register')->name('register.perform');

    // Login Routes
    Route::get('/login', 'LoginController@show')->name('login');
    Route::post('/login', 'LoginController@login')->name('login.perform');

    // Authenticated Routes
    Route::group(['middleware' => ['auth']], function() {
        // Logout Route
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        // Other Routes


        //route for homepage/dashboard, need to authorized else you need to back to log in      
        Route::get('/',[StudController::class, 'home'])->name('home');
        //route for creating student information
        Route::get('/create',[StudController::class, 'create'])->name('create.student');
        // route for adding the student information
        Route::post('/create/add',[StudController::class, 'addstudent'])->name('add.student');
        // route for editing information of student
        Route::get('/edit/{id}',[StudController::class, 'edit'])->name('edit');
        // route for update button
        Route::post('/updates/{id}',[StudController::class, 'updates'])->name('update');
        // route for delete button
        Route::delete('/delete/{id}',[StudController::class, 'delete'])->name('delete');
    });

});



