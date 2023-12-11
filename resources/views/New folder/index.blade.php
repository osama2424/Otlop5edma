@extends('layouts.master')
@section('title')
الرئيسية
@stop
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">مرحبا بك  مرة اخري</h2>
						  
						</div>
					</div>
					<div class="main-dashboard-header-right">
						
						
					</div>
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
@if(session()->has('paid'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>{{ session()->get('paid') }}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">عدد حالات اليوم</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{#}</h4>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">0</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">عدد حالات الشهر </h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{#}</h4>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">0</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالي عدد التقارير</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{#}</h4>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">0</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالي عدد الحالات </h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{#}</h4>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">0</span>
						</div>
					</div>
				</div>

				<!-- row closed -->

			
			<div class="row">
			<div class="col">
				<a href="/create_invoice"><button class="btn btn-outline-primary btn-block">حالات اليوم</button></a>
			</div>
			<div class="col">
				<a href="/create_glass"><button class="btn btn-outline-primary btn-block">البحث عن حالة بالرقم القومي</button></a>
			</div>
			
			
		</div>
		</div>
		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
	  <div class="modal-dialog" role="document">
			<div class="modal-content">
				 <div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">اضافة مصروفات</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					  </button>
				 </div>
				 <div class="modal-body">

					  <form action="/paid_payment" method="post" autocomplete="off">
							{{csrf_field()}}
							<div class="form-group">
								 
								<label for="inputName" class="control-label">اختر نوع المصروف</label>
								<select id="type_payment" name="type_payment" class="form-control SlectBox" >
									<!--placeholder-->
									<option value=""  selected disabled >اختر نوع المصروف</option>
									 <option value="الايجار" >الايجار</option>
									 <option value="فاتورة كهرباء" >فاتورة كهرباء</option>
									 <option value="فاتورة مياة" >فاتورة مياة</option>
									 <option value="اخري" >اخري</option>
								</select>
								<div id="ather" >
									<label for="recipient-name"  class="col-form-label"> الاخري</label>
									<input class="form-control"  name="ather" type="text" > 
								</div>
								<label for="recipient-name" class="col-form-label"> قيمة المصروف</label>
								<input class="form-control" name="paid" type="text" > 
							</div>

				 </div>
				 <div class="modal-footer">
					  <button type="submit" class="btn btn-primary">تاكيد</button>
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
				 </div>
				 </form>
			</div>
	  </div>
 </div>
</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>



<script>
    $("#ather").hide();
     $('#exampleModal2').on('change',"#type_payment", function(event) {
        var test = $("#type_payment option:selected").val();
     
        if (test === "اخري") {
            $("#ather").show();
  } else {
            $("#ather").hide();
  }

  
    
})
    </script>
@endsection
