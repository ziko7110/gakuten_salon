@extends('layouts')

@section('content')

    <div class="container mt-4">
        @foreach ($posts as $post)
            <div class="card mt-4">
                <div class="card-header mb-2">
                    {{ $post->title }}
                </div>
                 <div class="card-body">
                     <p>
                        {{ $post->body }}
                    </p>
                </div>
                 <div class="card-footer">
                     <span>
                         投稿日時
                    </span>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection('content')