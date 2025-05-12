<form action="{{ route('posts.store') }}" method="POST">
    <div class="text-dark">
        <div>
            @csrf
            <label for="titulo">Insira o titulo do seu post</label>
            <input type="text" name="titulo" id="titulo" value="" />
        </div>
        <div>
            <label for="conteudo">Insira o conteudo do seu post:</label>
            <input type="text" name="conteudo" id="conteudo" value="" />
        </div>
        <button type="submit">
            Salvar Post.
        </button>
    </div>
</form>
