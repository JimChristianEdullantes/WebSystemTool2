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
					<h3 class="card-label">File Upload</h3>
				</div>
			</div>
			<!--begin::Form-->
			<form class="ml-5"action="{{route('files.files.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-form-label col-lg-3 col-sm-12 text-lg-right"></label>
						<div class="col-lg-4 col-md-9 col-sm-12">
							<div class="dropzone dropzone-default dz-clickable" id="kt_dropzone_1">
								<div class="dropzone-msg dz-message needsclick">
									<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
									<span class="dropzone-msg-desc"><input class="mb-2" type="file" name="file" id="fileUpload">
                                                      @error('file')
                                                      	<div class="alert alert-danger mt-1 mb-1">
                                                            	{{$message}}
                                                      	</div>
                                                      @enderror</span>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="card-footer">
					<div class="row">
						<div class="col-lg-3"></div>
							<div class="col-lg-4">
								<button type="submit" class="btn btn-light-primary mr-2">Submit</button>
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