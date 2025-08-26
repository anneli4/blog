@extends('partials.layout')
@section('title', 'Posts')
@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Create new post</a>
    <div class="text-center my-2">
        {{ $posts->links() }} {{-- lehekülgede lingid --}}
    </div>
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr class="hover:bg-base-300!">
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <div class="join">
                            <a href="{{route('posts.show', ['post' => $post])}}" class="btn join-item btn-info">View</a>
                            <a href="{{route('posts.edit', ['post' => $post])}}" class="btn join-item btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                            <button class="btn join-item btn-error">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
        </tfoot>
    </table>
    <div class="text-center my-2">
        {{ $posts->links() }} {{-- lehekülgede lingid --}}
@endsection
