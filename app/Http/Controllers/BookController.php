<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return response()->json($books);
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();

        return response()->json($book);
    }

    public function show($id)
    {
        $book = Book::find($id);

        return response()->json($book);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();

        return response()->json($book);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return response()->json('Book deleted successfully');
    }
}
