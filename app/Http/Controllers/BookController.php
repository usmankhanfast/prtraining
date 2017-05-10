<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class BookController extends Controller
{
    //
    public function index()
    {
        $books=Book::all();
        return view('books.index',compact('books'));
    }

    public function create()
    {
    	echo "i am create";
    }

    public function store()
    {
        echo "i am store";
    }

    public function show()
    {
        echo "i am Show";
    }

    public function edit($id)
    {
        echo "i am Edit";
    }

    public function update($id)
    {
        echo "i am Update";
    }

    public function destroy($id)
    {

    }

    //Destroy All method
}
