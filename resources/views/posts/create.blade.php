<h1>Create Post</h1>
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}" required>

    <label for="content">Content:</label>
    <textarea name="content" id="content" required>{{ old('content') }}</textarea>

    <label for="images">Images:</label>
    <input type="file" name="images[]" id="images" multiple>

    <button type="submit">Create</button>
</form>
