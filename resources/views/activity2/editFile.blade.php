@extends('dashboard')

@section('content')

    <h1>&nbsp;&nbsp;Activity 2 FILES</h1>
    </br>

    <div class="card-header-tab card-header">
        &nbsp;&nbsp;&nbsp;<a href="{{route('files.files.index')}}" class="btn btn-success">Back</a>                         
    </div>

    <div class="card-header-tab card-header">
        <form class="ml-5"action="{{route('files.files.update', $file)}}" method="POST">
            @csrf
            {{method_field('PUT')}}
            <label for="file_name">File Name:</label>
            <input class="mb-2" type="input" name="file_name" value="{{$file->file_name}}">        
            </br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-sm ml-5" type="submit"> Update</button>
        </form>
    </div>
@endsection