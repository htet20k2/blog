@extends("layouts.app");
@section('content')
<div class="container">
    
    <h4>Article Detail</h4>
    <div class="mb-3" >
        <a href="{{ route('article.create') }}" class="btn btn-outline-dark" >Create</a>
        <a href="{{ route('article.index') }}" class="btn btn-outline-dark" >All Articles</a>
    </div>
    <div class="">
        <h4>{{$article->title}}</h4>
        <div class="mb-3">
            {{ $article->description }}
        </div>
        <p class="mb-1 fw-bold" >Created at: {{ $article->created_at }}</p>
        <p class="mb-1 fw-bold" >Updated at: {{ $article->updated_at }}</p>
    </div>
</div>

{{-- <table class=" table">
    <tr>
        <td>Title</td>
        <td>{{ $article->title }}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{{ $article->description }}</td>
    </tr>

    <tr>
        <td>Created At</td>
        <td>{{ $article->created_at }}</td>
    </tr>
    <tr>
        <td>Updated At</td>
        <td>{{ $article->updated_at }}</td>
    </tr>
</table> --}}

@endsection