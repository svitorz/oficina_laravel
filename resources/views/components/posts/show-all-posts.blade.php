<div>
    <a href="{{ route('posts.create') }}">
        Criar novo post
    </a>
    @foreach ($posts as $post)
        <div>
            <h1>{{ $post->titulo }}</h1>
            <p>{{ $post->conteudo }}</p>
            <p>{{ $post->user->name }}</p>
            <a href="{{ route('posts.edit', $post->id) }} ">Editar</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit">Deletar</button>
            </form>
        </div>
    @endforeach
</div>
