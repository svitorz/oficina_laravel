<div>
    <a href="{{ route('posts.create') }}">
        Criar novo post
    </a>
    @foreach ($posts as $post)
        <div>
            <h1>{{ $post->titulo }}</h1>
            <p>{{ $post->conteudo }}</p>
            <p>{{ $post->user->name }}</p>
        </div>
    @endforeach
</div>
