<a href="{{ route('posts.create') }}">Add</a>
<h1>Posts</h1>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Images</th>
        <th>Actions</th>
    </tr>
    </thead>

    <tbody>
    @forelse($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>
                @foreach($post->images as $image)
                    <img src="{{ asset('storage/images/' . $image->path) }}" alt="{{ $post->title }}" style="width: 100px; height: 100px;">
                @endforeach
            </td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4">No posts found</td>
        </tr>
    @endforelse


    </tbody>
</table>
