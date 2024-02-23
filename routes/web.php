<?php

use App\Http\Controllers\ParentsController;
use App\Http\Controllers\StudController;
use App\Http\Controllers\TeacherController;
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

        
        //route for homepage/dashboard, need to authorized else you need to back to log in      
        Route::get('/',[StudController::class, 'home'])->name('home');
        // List Of Students
        Route::get('/students',[StudController::class, 'student'])->name('student');
        //route for creating student information
        Route::get('/create',[StudController::class, 'create'])->name('create.student');
        // route for adding the student information
        Route::post('/create/add',[StudController::class, 'addstudent'])->name('add.student');
        // route for editing information of student
        Route::get('/edit/{id}',[StudController::class, 'edit'])->name('edit');
        // route for update button
        Route::put('/updates/{id}',[StudController::class, 'updates'])->name('update');
        // route for delete button
        Route::delete('/delete/{id}',[StudController::class, 'delete'])->name('delete');

        Route::prefix('teacher')->name('teacher.')->controller(TeacherController::class)->group(function() {

        // List Of Parents
            Route::get('/','teacher')->name('home');
            //route for creating teacher information
            Route::get('/create','add')->name('create');
            // route for adding the teacher information
            Route::post('/create/add','addteacher')->name('add');
            // route for editing information of teacher
            Route::get('/edit/{id}','edit')->name('edit');
            // route for update button
            Route::put('/updates/{id}','updates')->name('update');
            // route for delete button
            Route::delete('/delete/{id}','delete')->name('delete');

        });  

        Route::prefix('parent')->name('parent.')->controller(ParentsController::class)->group(function() {

            // List Of Parents
                Route::get('/','parent')->name('home');
                //route for creating parent information
                Route::get('/create','add')->name('create');
                // route for adding the parent information
                Route::post('/create/add','addparent')->name('add');
                // route for editing information of parent
                Route::get('/edit/{id}','edit')->name('edit');
                // route for update button
                Route::put('/updates/{id}','updates')->name('update');
                // route for delete button
                Route::delete('/delete/{id}','delete')->name('delete');
    
            }); 
    });

});



