@extends('layouts.adminStructure')

@section('title' , "All Blogs")

@section('main-content')


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">id_dept</th>
            <th scope="col">Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <th scope="row">{{$blog->id}}</th>
            <td>{{$blog->name}}</td>
            <td>{{$blog->description}}</td>
            <td>{{ $blog->departments->name }}</td>
            <td><img style="width: 200px;" src={{ asset('images/blogs/' . $blog->blogPhoto) }} alt=""></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection