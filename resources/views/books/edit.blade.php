<x-layout>
    <x-slot name="title">
        Modifica Libro
    </x-slot>
    <x-navbar />




    <div class="container-fluid  " style="margin-top: 80px">
        <h1 class="mt-5 text-center text-success">Modifica libro</h1>
        <div class="row d-flex justify-content-center">

            <div class="col-12 col-md-4">
                <form action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-1">
                        <input class="form-control @error('name') is-invalid @enderror" id="name"
                            value="{{ $book->name }}" name="name" type="text">
                        <label for="name">Name</label>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <select class="form-control" name="author_id">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" @if ($author->id == $book->author_id) selected @endif>
                                {{ $author->firstname . ' ' . $author->lastname }}
                            </option>
                        @endforeach
                    </select>

                    <div class="form-floating mb-1 mt-1">
                        <input class="form-control" id="page" name="pages" value="{{ $book->pages }}"
                            type="text">
                        <label for="email">Pagine</label>
                        @error('page')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <img class="img-fluid" style="max-height:15rem" src="{{ Storage::url($book->image) }}"
                            alt="..." />
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="image" name="image" type="file">

                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="page" name="year" value="{{ $book->year }}"
                            type="text">
                        <label for="email">Anno</label>
                        @error('page')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Aggiorna</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-layout>
