@extends('dashboard')

@section('content') 

<h1>&nbsp;&nbsp;Activity 2 FILES</h1>
</br>


<div class="card mb-3">
                            <div class="card-header-tab card-header">
                                 &nbsp;&nbsp;&nbsp;<a href="{{route('files.files.index')}}" class="btn btn-success">Back</a>
                                 
                            </div>
                            <div class="card-body">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 128.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">File Name</th>
                                                <th class="sorting text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 40.2px;" aria-label="Position: activate to sort column ascending">File Type</th>
                                                <th class="sorting text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 80.2px;" aria-label="Office: activate to sort column ascending">Date Created</th>
                                                <th class="sorting text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 44.2px;" aria-label="Age: activate to sort column ascending">Date Updated</th>
                                                <th class="sorting text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 90.2px;" aria-label="Start date: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                         
                                           
                                                <tr>
                                                    <td>{{$file->file_name}}</td>
                                                    <td>{{$file->file_type}}</td>
                                                    <td>{{$file->created_at}}</td>
                                                    <td>{{$file->updated_at}}</td>
                                                    
                                                    <td>

                                                        <a href="{{route('files.files.show', $file)}}" class="btn btn-success btn-sm" style="width:90px;">View File</a>
                                                        <a href="{{route('files.files.edit', $file)}}" class="btn btn-primary btn-sm" style="width:120px;">Edit Filename</a>

                                                        <a class="btn btn-danger btn-sm" href="{{route('files.files.destroy', $file->id)}}" onclick="event.preventDefault();document.getElementById('delete').submit();">Delete File</a>
                                                        <form id="delete" action="{{route('files.files.destroy', $file->id)}}" method="POST" class="d-none">
                                                            @csrf 
                                                            {{method_field('DELETE')}}
                                                        </form>  
                                                        
                                                    </td>
                                                    
                                                </tr>                                                                                         

                                        </tbody>
                                    </table>
                                    <span class="text-center">

                                    </span>

                                    
                            </div>
                        </div>
@endsection
