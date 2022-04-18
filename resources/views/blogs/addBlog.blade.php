@extends('layouts.adminStructure')

@section('title' , "Add Blog")

@section('main-content')

<form action={{url('blogs/store')}} method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <input class="form-control form-control-sm" type="text" name="name" placeholder="Blog Name">
    </div>

    <div class="mb-2">
        <input class="form-control form-control-sm" type="text" name="description" placeholder="Blog Description">
    </div>

    <div class="mb-2">
        <input class="form-control form-control-sm" name="blogPhoto" type="file">
    </div>

    <div class="mb-2">
        <select name="id_dept">
            @foreach($departments as $department)
            <option value={{$department->id}}> {{$department->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <input class="btn btn-success" type="submit">
    </div>
</form>

@endsection