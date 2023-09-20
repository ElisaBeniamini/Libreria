-->  relazione autor e book  <--
 relazione 1 a N ; dove N è molti SARA' QUINDI UNO A MOLTI.

1- dobbiamo associare la relazione 1 ad N ai libri. 
un autore puo scrivere tanti libri quindi uno autore può avere enne libri.
Il libro avra la specifica dell autore, quindi dobbiamo inserire una riga author_id nella tabella books

 INTANTO la colonna  la aggiungiamo con il  comando  che gia conosciamo:
              php artisan make:migration add_to_books_table
cosi da creare solo la colonna;

successivamente nella migrazione di riferimento specificare tutto quello che riguarda la relazione tra i due: 
-> migrazione di riferimento <-
su UP :
 public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
  1       $table->unsignedBigInteger('author_id');   
  2       $table->foreign('author_id')->references('id')->on('authors');
         //oppure
         //$table->foreign('author_id')->constrained();
        });
    }
author_id ->usare sempre e solo questa denominazione
1-> creiamo la nostra colonna chiamata author_id
2-> il primo campo è una chiave esterna , e poi nel secondo campo c e la referenza esterna  che è l'id . Ma di chi? di authors
 su DOWN invece
Se ti dovesse servire un rollback prima cancellare la relazione e poi cancello la colonna.
    public function down(): void
    {  
        Schema::table('books', function (Blueprint $table) {
         $table->dropForeign(['author_id']);
         $table->dropColumn('author_id');
        });
    }
};

Effettua la migrazione con : 
php artisan migration, e vedrai nella tua tabella (tableplus) la nuova colonna appena creata.

NB. la chiave esterna non sara mai univoca perche dobbiamo permettere all autore di scrivere piu libri.
FATTO TUTTO CIò adesso  devo andare su BookModel e devo specificare che dentro la classe Book puo esistere un autore. 
quindi apri bookmodel e authormodel
su BookModel :
		public function author()
    {
        return $this->belongsTo(Author::class);   
    }
--->accediamo alla classe Author nella sua interezza.

su AuthorModel :
		  public function book()
    {
        return $this->hasMany(Book::class);          
    }
--->accediamo alla classe nella sua interezza.	
belongTo appartiene . quindi il libro appartiene all autore.
hasMany   ha molti. quindi l autore puo avere tanti libri


Ho appena creato il collegamento tra book e author!

----

Adesso nel nostro book.create blade , quindi il form di inserimento libri , dobbiamo poter inserire l autore del libro quando ne inseriamo uno. per questo dobbiamo inserire un ulteriore campo dentro il form. questo campo sara un select con all interno delle option.

Bisogna però modificare il metodo create dal bookcontroller:
innanzitutto gli dobbiamo fare arrivare authors quindi dentro create :
$authors=Author::all();
 e dentro il return aggiungi dentro la vista , compact('authors);

ora possiamo fare il foreach authors as author e dentro ci metto la option con value {{$author->id}} e come valore di option {{$author->frstname . ' ' $author->lastname}}


nel create devo ora gestire altri campi  e parlo del create che è nello store ;
			  Book::create([
            'name' => $request->name,
            'pages' => $request->pages,
            'year' => $request->year,
            'image' => $path_image,
AGGIUNGO 'author_id'=>request->author_id,
            'uri' => Str::slug($request->name, '-') 
		
        ]);
faccio la stessa modifica anche su update .(o prima o dopo va fatta. mi porto avanti)

Se adesso provo ad aggiungere un libro ,su table plus vedrò il mio auhtor id  che  e se ci clicchi ti porta nella tabella di riferimento che sarà appunto authors!  


 ADESSO IL dato AUTORE, DEVE COMPARIRE ANCHE SUL DETTAGLIO del libro, QUINDI MODIFICA LE VISTE interessate
per collegarci alla tabella authors scrivere :
		   <p>Autore: {{ $book->author->firstname . ' ' . $book->author->lastname }} </p>

            -->essendoci la relazione , possiamo accedere agli attributi di author
            
  NB se la pagina in questione ha bisogno di tutti gli autori presenti , sull authorcontroller , nel metodo di riferimento andare ad importare tutti gli authors cn metodo all()
