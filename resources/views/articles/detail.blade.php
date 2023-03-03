@extends("layouts.app");
 
@section("content")
<div class="container">
<div  lass="card mb-2">
<div class="card-body">
    <h5 class="card-title">{{ $article->title }}</h5>
    <div  lass="card-subitle mb-2 text-muted small">
    {{ $article->created_at->diffForHumans() }}

                </div>
                <p c lss="card-text">{{ $article->body }}<p>
                <a class="btn btn-warning"
 href="{{ url("/articles/delete/$article->id") }}">
 Delete
 
 </a>
        </div>
        </div>
        
        </div>
@endsection        