<h1>Edit Post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
    <br>

    <label for="content">Content:</label>
    <textarea name="content" id="content" required>{{ old('content', $post->content) }}</textarea>
    <br>

    <label for="current_images">Current Images:</label>
    <div id="current_images">
        @foreach($post->images as $image)
            <div style="display: inline-block; margin-right: 10px; position: relative;">
                <img src="{{ asset('storage/images/' . $image->path) }}" alt="{{ $post->title }}" style="width: 100px; height: 100px;">
            </div>
        @endforeach
    </div>
    <br>

    <label for="images">Add New Images:</label>
    <input type="file" name="images[]" id="images" multiple>
    <br>

    <button type="submit">Update</button>
</form>
