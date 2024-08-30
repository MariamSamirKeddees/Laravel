@extends('layouts.app')

@section('container')

    <div class="w-100 text-center mt-3">
        <a class="btn btn-success" href="{{route("posts.create")}}">Create Post</a>
    </div>

    <table class="table table-bordered w-50 m-auto mt-5">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Posted By</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['title']}}</td>
                <td>{{$post['postedBy']}}</td>
                <td>{{$post['createdAt']}}</td>
                <td>
                    <a href="{{route("posts.show", $post['id'])}}" class="btn btn-success">View</a>
                    <a href="{{route("posts.edit", $post['id'])}}" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
