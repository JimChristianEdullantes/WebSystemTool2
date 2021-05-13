@extends('dashboard')

@section('content') 

<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
								
		<!--begin::Card-->
		<div class="card card-custom gutter-b">
					<div class="card-body">
					<div class="form-group row">
						
						<div class="col-sm-12">
							<p class="display3 display4-lg justify-content-center text-info text-center">Welcome {{ Auth::user()->name }} <p>
						</div>
					</div>
				</div>
		</div>
		<!--end::Card-->

	</div>

@endsection