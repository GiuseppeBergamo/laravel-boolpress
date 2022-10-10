@if($post->exists)
<form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
    @method('PUT')
@else
<form action="{{ route('admin.posts.store') }}" method="POST">
@endif


    @csrf
    <div class="row">
        <div class="col-12">

        
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="category_id">Categorie</label>
                <select class="form-control" id="category_id" name="category_id">
                <option value="">Seleziona categoria</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->label }}</option>
                @endforeach
                </select>
            </div>

        </div>
        <div class="col-12">
            
        
            <div class="form-group">
                <label for="title">Testo</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content', $post->content) }}</textarea>
            </div>
        </div>
        <div class="col-12">

        
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $post->image) }}">
            </div>
        </div>
        <div class="col-12 d-flex justify-content-around align-items-center">

            @foreach($tags as $tag)
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="tag-{{ $tag->label }}" name="tags[]">
                <label class="form-check-label" for="tag-{{ $tag->label }}">{{ $tag->label }}</label>
            </div>
            @endforeach
        </div>
    </div>


    <div class="d-flex justify-content-between">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Torna alla lista</a>

        

        <button class="btn btn-success" id="button" type="submit">
            Salva Post
        </button>
    </div>
</form>