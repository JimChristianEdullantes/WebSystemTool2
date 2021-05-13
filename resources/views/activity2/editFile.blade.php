@extends('dashboard')

@section('title')
Activity 2
@endsection

@section('content')

<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
								
		<!--begin::Card-->
		<div class="card card-custom gutter-b">
			<div class="card-header">
				<div class="card-title">
					<h3 class="card-label">Edit Filename</h3>
				</div>
			</div>
			<!--begin::Form-->
            <form class="ml-5"action="{{route('files.files.update', $file)}}" method="POST">
                @csrf
                {{method_field('PUT')}}
				<div class="card-body">
					<div class="form-group row">
                        <label for="file_name">File Name:</label>
                        <input class="mb-2 form-control" type="input" name="file_name" value="{{$file->file_name}}">        
                        </br>
					</div>

				</div>

				<div class="card-footer">
					<div class="row">
						<div class="col-lg-3"></div>
							<div class="col-lg-4">
								<button type="submit" class="btn btn-light-primary mr-2">Update</button>
								<a class="btn btn-primary" href="{{route('files.files.index')}}">Cancel</a>
							</div>
						</div>
					</div>
			</form>
			<!--end::Form-->
		</div>
		<!--end::Card-->

	</div>
<!--end::Container-->
</div>
@endsection