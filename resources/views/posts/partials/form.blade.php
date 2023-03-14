<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" autofocus>
    @error('title')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="image" class="form-label">Choice Image...</label>
        <input type="file" class="form-control" name="image" id="image">
        <img src=" @isset($post->img){{ asset('images/' . $post->img) }}@endisset" width="20px" heigth="20px" class="img-fluid" alt="post_image">
    @error('image')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="description" class="form-label">Body</label>
    <textarea value="{{ old('description') }}" class="form-control @error('description') is-invalid @enderror" id="description" name="description" autofocus></textarea>
    @error('description')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>