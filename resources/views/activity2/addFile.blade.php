@extends('dashboard')

@section('content')

    <h1>&nbsp;&nbsp;Activity 2 FILES</h1>
    </br>

    <div class="card-header-tab card-header">
        &nbsp;&nbsp;&nbsp;<a href="{{route('files.files.index')}}" class="btn btn-success">Back</a>                         
    </div>

    <div class="card-header-tab card-header">
        <form class="ml-5"action="{{route('files.files.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
  
          <input class="mb-2" type="file" name="file" id="fileUpload">
           @error('file')
               <div class="alert alert-danger mt-1 mb-1">
                   {{$message}}
               </div>
           @enderror

            </br>

            <input class="btn btn-primary btn-sm" type="submit" name="Submit">

        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            maxFileSize = 2 * 1024 * 1024; // 2MB
            $('#fileUpload').change(function(){
                fileSize = this.files[0].size;
                if(fileSize > maxFileSize)
                {
                    this.setCustomValidity("File must not be greater than 2MB");
                    this.reportValidity();
                }
                else
                {
                    this.setCustomValidity("");
                }
            });
        });
    </script>

@endsection