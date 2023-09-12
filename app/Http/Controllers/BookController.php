<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
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

    public function store(BookStoreRequest $request) //azione che va a salvare dal form //dd($extension_name, $file_name);
    {
        $path_image = ''; //vuoto perche puo essere nullable
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName(); //recupero nome originale
            $path_image = $request->file('image')->storeAs('public/images', $file_name);  //(percorso_di salvataggio, nome file estensione) //qui succede l operazione principale , laravel prende il file e lo salva nel nostro server
            //quindi : SETTARE UNNA VARIABILE vuota, nel dubbio non ci sia l immagine, poi andiamo a controllare con hasFaile se effettivamente l immagine esiste; poi ci pendiamo il n9ome e dopo lo andiamo a salvare

        }
        Book::create([
            'name' => $request->name, //stiamo associando alla chiave name stiamo dando request name
            'pages' => $request->pages,
            'year' => $request->year,
            'image' => $path_image,
            'uri' => Str::slug($request->name, '-')
        ]);
        return redirect()->route('books.index')->with('success', 'Libro Caricato');
    }


    public function show($book) // 3- injection della classe Book che va a dire a laravel che la variabile $book è di tipo Book e quindi un libro ! e quindi ci possiamo evitare sia il primo metodo che il secondo metodn.
    {
        $book = Book::where('uri', $book)->first();
        // $book = Book::findOrFail($item);  // 1
        // $book = Book::find($item);    // 2 è la stessa cosa... il metodo FINDORFAIL ci evita di scrivere piu codice
        // if (!$item) {
        //     abort(404);
        // }
        return view('show', compact('book'));
    }
}//generalmente si inietta la classe Book nei parametri formali. il discorso è che ho messo l uri come unique e quindi avendo fatto questo non si puo fare l iniezione di dipendenza
