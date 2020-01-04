<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BookController extends Controller
{
    public function show(){
        $res = Book::get();
        return view('welcome', ['data'=>$res]);
    }
}
