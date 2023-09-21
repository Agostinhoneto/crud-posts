<x-app-layout>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Conteúdo</label>
            <textarea name="content" id="content" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="published">Publicado</label>
            <input type="checkbox" name="published" value="published">
        </div>
        <button type="submit" class="btn btn-primary">Criar Post</button>
    </form>
</x-app-layout>
