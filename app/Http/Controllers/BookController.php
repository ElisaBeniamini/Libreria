<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
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
            'uri' => Str::slug($request->name, '-')

        ]);
        return redirect()->route('books.index')->with('success', 'Libro Caricato');
    }


    public function show(Book $book) // 3 injection della classe Book che va a dire a laravel che la variabile $book è di tipo Book e quindi un libro ! e quindi ci possiamo evitare sia il primo metodo che il secondo metodn
    {

        // $book = Book::findOrFail($item);  // 1
        // $book = Book::find($item);    // 2 è la stessa cosa... il metodo FINDORFAIL ci evita di scrivere piu codice
        // if (!$item) {
        //     abort(404);
        // }
        return view('show', compact('book'));
    }
}
