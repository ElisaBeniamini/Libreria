<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class PublicController extends Controller
{
    public function index()
    {
        $book = Book::all();

        return view('index', ['book' => $book]);
    }




    public function create() //form
    {
        return view('create');
    }


    public function store(Request $request) //azione che va a salvare dal form // 
    {
        Book::create([
            'name' => $request->name, //stiamo associando alla chiave name stiamo dando request name
            'pages' => $request->pages,
            'year' => $request->year,

        ]);
        return redirect()->route('books.index')->with('success', 'Libro Caricato');
    }

    public function show(Book $book) //form
    {
        return view('show', compact('book'));
    }
}
