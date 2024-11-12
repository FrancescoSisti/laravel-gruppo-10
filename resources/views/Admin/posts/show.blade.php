@extends("layout.app")


@section("content")

<div class="container">
    <div class="card p-1">
        <span>{{ $post->id }} </span>
        <h2>Nome progetto: {{ $post->name }} </h2>
        <h3>Autore: {{ $post->author }} </h3>
        <p>
            <strong>Descrizione:</strong>
            {{ $post->description }}
        </p>
        <p>
            <strong>Contenuto del Post:</strong>
            {{ $post->content }}
        </p>
        <div>
            <a href="/admin/posts/{{$post->id}}/edit" class="btn btn-sm btn-success mt-2">Modifica</a>
            <form action="{{ route("admin.posts.delete", $post->id) }}" method="POST" class="d-inline">
                @method("DELETE")
                @csrf

                <button type="submit" class="btn btn-sm btn-warning mt-2">
                    Elimina
                </button>

            </form>
        </div>
    </div>
</div>


@endsection
