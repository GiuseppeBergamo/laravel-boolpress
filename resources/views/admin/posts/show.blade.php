@extends('layouts.app')


@section('content')
<h1>{{ $post->title }}</h1>
<section>
    

    <div>
        @if($post->image)
            <img src="{{ $post->image }}" alt="post-image" class="float-left mr-3 img-fluid">
        @endif
        <p>{{ $post->content }}</p>
    </div>
    <p>Categoria: @if($post->category){{ $post->category->label }} @else Nessuna @endif</p>
    <p>Autore: @if($post->user) {{ $post->user->name }} @else Anonimo @endif</p>
    <p>Creato il: {{ $post->created_at }}</p>
    <p>Modificato il: {{ $post->updated_at }}</p>
    <div>
        Tags:
        @forelse($post->tags as $tag)
            <span class="badge" style="background-color: {{ $tag->color }}">{{ $tag->label }}</span>
        @empty
        Nessun tag 
        @endforelse
    </div>
</section>

<footer class="d-flex align-items-center justify-content-between">
    <div>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Torna indietro</a>
    </div>
    <div class="d-flex">
        @if($post->user_id === Auth::id())
        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary mr-2">Modifica</a>
        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">
                Elimina
            </button>
        </form>
        @endif
    </div>
</footer>

@endsection