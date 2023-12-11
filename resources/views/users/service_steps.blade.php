@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
				
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
								<h2>	خدمة تقرير طبي للسفر </h2>
								</div>
								<p class="mg-b-20">يرجي اكمال جميع البيانات المطلوبة</p>
								<form action="/save_info"  method="post" enctype="multipart/form-data">
									@csrf
								<div id="wizard1">
									<h3>المعلومات الاساسية</h3>
									<section>
										<div class="control-group form-group">
											<label class="form-label">المحافظة</label>
											<select name="somename" class="form-control SlectBox" >
												<!--placeholder-->
												<option   value="كفرالشيخ">كفرالشيخ</option>

											</select>
										</div>
										<div class="control-group form-group">
											<label class="form-label">المركز</label>
											<select name="somename" class="form-control SlectBox" >
												<!--placeholder-->
												<option   value="مركز كفرالشيخ">مركز كفرالشيخ</option>

											</select>
										</div>
										<div class="control-group form-group">
											<label class="form-label">اختر المستشفي</label>
											<select name="somename" class="form-control SlectBox" >
												<!--placeholder-->
												<option   value="المستشفي العام">المستشفي العام</option>

											</select>
										</div>
										<div class="control-group form-group mb-0">
											<label class="form-label">نوع العيادة</label>
											<select name="somename" class="form-control SlectBox" >
												<!--placeholder-->
												<option   value="عيادة عامة">عيادة عامة</option>

											</select>
										</div>
									</section>
									<h3>اثبات الشخصية</h3>
									<section>
										<p>يرجي رفع  صورة البطاقة الشخصية او جواز السفر</p>
										<br>
										<div class="control-group form-group">
											<div class="row">
												<div class="col-6">
											<div class="main-content-label mg-b-5">
												بطاقة الرقم القومي
											</div>
											<p class="mg-b-20">صيغ الرفع : jpeg , png </p>
											<div class="row row-sm">
												<div class="col-sm-7 col-md-6 col-lg-4">
													<input  class="form-control" name="img_national" type="file" id="photo"  >
												</div>
											</div>
										</div>
												<div class="col">
													<img src="{{URL::asset('assets/img/media/national_num.jpg')}}" class="col-sm-7 col-md-6 col-lg-4" alt="national_num">
												</div>
										</div>
										<br>
										<br>
										<div class="control-group form-group">
											

										<div class="row">
											<div class="col-6">
										<div class="main-content-label mg-b-5">
											صورة جواز السفر الصفحة الاولي
										</div>
										<p class="mg-b-20">صيغ الرفع : jpeg , png </p>
										<div class="row row-sm">
											<div class="col-sm-7 col-md-6 col-lg-4">
												<input  class="form-control" name="img_pass" type="file" id="photo"  >
											</div>
										</div>
									</div>
											<div class="col">
												<img src="{{URL::asset('assets/img/media/Egypt.webp')}}" class="col-sm-7 col-md-6 col-lg-4" alt="passport">
											</div>
									</div>
									</section>


									<h3>التأشيرة</h3>
									<section>
										<br>
										<div class="control-group form-group">
										<div class="row">
											<div class="col-6">
										<div class="main-content-label mg-b-5">
											التأشيرة
										</div>
										<p class="mg-b-20">صيغ الرفع : jpeg , png </p>
										<div class="row row-sm">
											<div class="col-sm-7 col-md-6 col-lg-4">
												<input  class="form-control" name="img_visa" type="file" id="photo"  >
											</div>
										</div>
									</div>
										
									</div>
									</section>
									<h3>رسوم الخدمة</h3>
									<section>
										<div class="table-responsive mg-t-20">
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td><span>الرسوم</span></td>
														<td><h2 class="price text-right mb-0">220 جنية</h2></td>
													</tr>
												</tbody>
											</table>
										</div>
									</section>
									<h3>الدفع</h3>
									<section>
										<br>
										<div class="form-group">
										<div class="row">
											<div class="col">
												<label class="form-check-label" for="flexRadioDefault1" >
													فيزا او ماستر كارد
												</label>
												<input  class="col-sm-5 col-md-5 col-lg-6" type="radio" name="pay" value="visa" id="flexRadioDefault1" checked>
												<label for="flexRadioDefault1"><img src="{{URL::asset('assets/img/media/visa.png')}}"   class="col-sm-5 col-md-5 col-lg-6" alt="visa" ></label>
											</div>
											<div class="col">
												<label class="form-check-label" for="flexRadioDefault2" >
													فودافون كاش
												</label>
												<input class="col-sm-5 col-md-5 col-lg-6" type="radio" name="pay" value="vodafon_cash" id="flexRadioDefault2">
											<label for="flexRadioDefault2"><img src="{{URL::asset('assets/img/media/vodafon_cash.jpeg')}}"   class="col-sm-5 col-md-5 col-lg-6" alt="vodafon_cash"></label>
											
											</div>
											<div class="col">
												<label class="form-check-label" for="flexRadioDefault3" >
													فوري
												</label>
												<input class="col-sm-5 col-md-5 col-lg-6" type="radio" name="pay" value="fawry" id="flexRadioDefault3">
												<label for="flexRadioDefault3"><img src="{{URL::asset('assets/img/media/fawry.png')}}"   class="col-sm-6 col-md-6 col-lg-6" alt="fawry"></label>
													
												</div>
											</div>
											<br>
											<div class="row">
												<button  type="submit" id="submit" class="btn btn-success-gradient btn-block">الدفع و المتابعة</button>
											</div>
										</div>
									</section>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Jquery.steps js -->
<script src="{{URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!--Internal  Form-wizard js -->
<script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>

@endsection