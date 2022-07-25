<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/demo/tailwind',function(){
    return view('jiny_ui_tailwind::demo.index');
});

Route::get('/demo/tailwind/avatars',function(){
    return view('jiny_ui_tailwind::demo.avatars');
});

Route::get('/demo/tailwind/button',function(){
    return view('jiny_ui_tailwind::demo.button');
});

Route::get('/demo/tailwind/badges',function(){
    return view('jiny_ui_tailwind::demo.badges');
});

Route::get('/demo/tailwind/table',function(){
    return view('jiny_ui_tailwind::demo.table');
});
