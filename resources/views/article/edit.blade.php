@extends("layouts.app");
@section('content')

 <div class="container">
    <h4>Article Edit</h4>

    <form action="{{ route('article.update', $article->id) }}" method="post">
        @method('put')
        @csrf

        <div class="mb-3">
            <label class=" form-label" for="">Article Title</label>
            <input type="text" class=" form-control @error('title') is-invalid @enderror" value="{{ old("title",$article->title) }}" name="title">
            @error('title')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class=" form-label" for="">Article Description</label>
            {{-- <input type="longtext" class=" form-control @error('description') is-invalid @enderror" value="{{ old('description',$article->description) }}" name="description"> --}}
            <textarea name="description" id="" cols="30" rows="5" class=" form-control @error('description') is-invalid @enderror">{{ old('description',$article->description) }}
            </textarea>
            @error('description')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class=" btn btn-primary">Update Article</button>
    </form>
 </div>

@endsection