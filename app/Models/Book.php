<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [   //unici campi compilabili. quello che non è inserito qui , viene ignorato dal database e quindi non lo carica.
        'name', 'pages', 'year', 'uri', 'image', 'author_id'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);   // --->accediamo alla classe nella sua interezza.
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
