<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request as FacadesRequest;

class PublicController extends Controller
{
    public function homepage()
    {
        $book = Book::all();
        $latestBooks = Book::latest()->take(4)->get();
        return view('homepage', compact('book', 'latestBooks'));
    }


    public function profile()
    {
        return view('profile');
    }
    //public function send(Request $request)
    //{
    //    //  dd($request);
    //  $request->validate([
    //      'nome' => 'required',
    //      'email' => 'required|email',
    //      'messaggio' => 'required|min:10'
    //  ]);
    //  $data = [ //mappatura dati lato server
    //      'nome' => $request->name,
    //      'email' => $request->email,
    //      'messaggio' => $request->messaggio
    //  ];
    //  Mail::to($request->email)->send(new InfoMail($data));
    //  dd($data);
    //}
}
