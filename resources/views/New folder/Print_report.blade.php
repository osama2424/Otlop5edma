@extends('layouts.master')
@section('css')
    <style>
        @media print {
            #print_Button {
                display: none;
            }
        }

    </style>
@endsection
@section('title')
     طباعة التقرير الطبي
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الحالات </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                     طباعة التقرير الطبي</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-md-12 col-xl-12">
            <div class=" main-content-body-invoice" id="print">
                <div class="card card-invoice">
                    <div class="card-body">
                        <div class="invoice-header">
                            <h1 class="invoice-title"></h1>
                            <div class="billed-from">
                                <h2>  وزارة الصحة </h2>
                                <p>مدير الشئون الصحية  </p>
                                <p> مستشفي </p>
                                <p> بتاريخ </p>
                            </div><!-- billed-from -->
                        </div><!-- invoice-header -->
                        <div class="row mg-t-20">
                        <div class="col-md">
                                <label class="tx-gray-600">معلومات العميل</label>
                                <p class="invoice-info-row"><span>بتوقيع الكشف الطبي علي المريض </span>
                                    <span>{#}</span></p>
                                    <p class="invoice-info-row"><span>و بناء علي الطلب المقدم من </span>
                                        <span>{#}</span></p>
                                        <p class="invoice-info-row"><span>و بعد سداد الرسوم المقدرة </span>
                                            <span>{#}</span></p><p class="invoice-info-row"><span>بإيصال رقم  </span>
                                                <span>{#}</span></p>
                                <p class="invoice-info-row"><span>بتاريخ  </span>
                                    <span>{#}</span></p>
                        </div>
                            
                            <div class="col-md">
                                <label class="tx-gray-600"> معلومات الطبيب</label>
                                <p class="invoice-info-row"><span>بمعرفة الدكتور </span>
                                    <span>{#} </span></p>
                                    <p class="invoice-info-row"><span> أخصائي</span>
                                        <span>{#} </span></p>
                                        <p class="invoice-info-row"><span>بمستشفي  </span>
                                            <span>{#} </span></p>
                            </div>
                        </div>
                    
                        <div class="table-responsive mg-t-40">
                            <table class="table table-invoice border text-md-nowrap mb-">
                        
                                
                                <div >
                                <tbody >
                                    <tr>
                                           
                                        </td>
                                        <td class="tx-right">تبين أن المصاب يعاني من </td>
                                        <td class="tx-right">{خالي من اي امراض باطنة او جلدية قد تكون ضارة او معدية اثناء رحلة السفر }</td>
                                    </tr>
                                    </td>
                                   
                                    <tr>
                                        <td class="tx-right"> وقد حصل علي التقرير لتقديمه الي </td>
                                        <td class="tx-right" colspan="2">{#}</td>
                                    </tr>
                                </tbody>
                            </div>
                            </table>
                            <div class="text-center">
                                <p>وتفضلوا سيادتكم بقبول وافر الاحترام</p>
                                <br>
                            </div>
                                {{-- <div class="row-md">

                                <p>وتفضلوا سيادتكم بقبول وافر الاحترام</p>
                                
                                <p>وتفضلوا سيادتكم بقبول وافر الاحترام</p>

                            </div>
                            
                            </div> --}}
                            <hr>
                            <div class="row mg-t-20">
                                <div class="col-md">
                                        <label class="tx-gray-600">مسئول العيادات</label>
                                        </div>
                            
                                        <div class="col-md">
                                            <label class="tx-gray-600">  الأخصائي المعالج</label>
                                        </div>
                                            <div class="col-md">
                                                <label class="tx-gray-600">مدير العيادات</label>

                                                <br>
                                                <br>
                                                <hr /> 
                                                </div>
                                                </div>

                                                <hr>
                                                <div class="row mg-t-20">
                                                    <div class="col-md">
                                                            <label class="tx-gray-600"> استلمت الاصل</label>
                                                            </div>
                                                
                                                            <div class="col-md">
                                                                <label class="tx-gray-600"> اسم مستلم التقرير</label>
                                                            </div>
                                                                <div class="col-md">
                                                                    <label class="tx-gray-600"> التوقيع</label>
                    
                                                                    <br>
                                                                    <br>
                                                                    <hr /> 
                                                                    </div>
                                                                    </div>


                        </div>
                        </div>
                           
                        <hr class="mg-b-40">



                        <button class="btn btn-danger  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
                                class="mdi mdi-printer ml-1"></i>طباعة</button>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>


    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }

    </script>

@endsection
