@extends('layouts.master')
@section('css')
<!---Internal  Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!--- Internal Sweet-Alert css-->
<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
@endsection
@section('title')
التقرير الطبي 
@stop
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"> الحالات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/التقرير الطبي</span>
						</div>
					</div>
					
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				<div class="row row-deck">
					<div class="col-sm-12 col-md-4 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">كتابة التقرير الطبي</h3>
							</div>
							<div class="card-body pt-0">
								<table class="table card-table border">
		
									<tr>
												 <label class="control-label"> تقرير الطبيب</label>
												 <textarea class="form-control" id="exampleTextarea" name="note" rows="3" 	 required>
											 </textarea>
										
										  </tr>
									<tr>
										<td >
											<br>
											<div class="col-sm-6 col-md-6 mg-t-6">
												<td><button class="btn btn-success btn-block">موافقة و طباعة التقرير</button> </td>
												<td><button class="btn btn-danger btn-block">رفض و طباعة التقرير</button> </td>
											</div>
											</div>
																					
									</tr>
								</table>
							</div>
						</div>
					</div><!-- col end -->
				</div><!-- col end -->

				<!-- Row -->
				
				<!-- /row -->

				<!-- Row -->
				
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/ratings.js')}}"></script>
<!--Internal  Sweet-Alert js-->
<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>
<!-- Sweet-alert js  -->
<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('assets/js/sweet-alert.js')}}"></script>
@endsection