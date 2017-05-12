<?php

namespace App\Http\Controllers;

use Request;
use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class BookController extends Controller
{
    //
    public function index()
    {
        //$books=Book::all();
        //return view('books.index',compact('books'));
        return view('books.login');   
    }

    public function home()
    {
        //echo "Home++";
//        Book::find($id);
        $book=Request::all();
        print_r($book);
    }

    public function create()
    {
    	return view('books.create');
    }

    public function store()
    {
        $book=Request::all();
        Book::create($book);
        return redirect('books');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.update', compact('book'));
    }

    public function update($id)
    {
        $bookUpdate=Request::all();
        $book=Book::find($id);
        $book->update($bookUpdate);
        //alert()->success('Page has been added.');
        return redirect('books');
    }

    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect('books');
    }

    //Destroy All method
}
