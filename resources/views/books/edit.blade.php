<x-layout>
    <x-slot name="title">
        Inserisci Libro
    </x-slot>
    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center">

            <div class="col-lg-8 col-xl-6">
                @if (session('success'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                            aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <form action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
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

                    <div class="form-floating mb-3 mt-3">
                        <input class="form-control" id="page" name="pages" value="{{ $book->pages }}"
                            type="text">
                        <label for="email">Pagine</label>
                        @error('page')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <img class="card-img-top w-50" style="max-height:20rem" src="{{ Storage::url($book->image) }}"
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
</x-layout>
