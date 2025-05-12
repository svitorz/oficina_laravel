<form action="{{ route('posts.update', $post->id) }}" method="POST">
    <div class="text-dark">
        <div>
            @csrf
            @method('PUT')
            <label for="titulo">insira o titulo do seu post</label>
            <input type="text" name="titulo" id="titulo" value="{{ $post->titulo }}" />
        </div>
        <div>
            <label for="conteudo">insira o conteudo do seu post:</label>
            <input type="text" name="conteudo" id="conteudo" value="{{ $post->conteudo }}" />
        </div>
        <button type="submit">
            atualizar post.
        </button>
    </div>
</form>
