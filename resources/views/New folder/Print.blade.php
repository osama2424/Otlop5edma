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
     طباعة مستند مديرية الشئون الصحية
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">التقرير الطبي </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                         طباعة مستند مديرية الشئون الصحية
</span>
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
                                <h2>محافظة كفر الشيخ</h2>
                                <p>مديرية الشئون الصحية  </p>
                                <p> ادارة الطب العلاجي </p>
                                <p> بتاريخ </p>
                            </div><!-- billed-from -->
                        </div><!-- invoice-header -->
                        <div class="row mg-t-20">
                        <div class="col-md">
                                <label>السيد الاستاذ /وكيل اول الوزارة  (ٍسكرتير عام المحافظة) 
                                </label>
                                <br>
                                <br>
                                <br>
                                <div class="text-center">
                                    <p> تحية طيبة و بعد..</p>
                                    <br>
                                </div>
                        </div>
                     
                    
                        <div class="table-responsive mg-t-40">
                            <table class="table table-invoice border text-md-nowrap mb-">
                        
                                
                                <div >
                                <tbody >
                                    <tr>
                                           
                                        </td>
                                        <td class="tx-right">نتشرف بان نرسل لسيادتكم شهادة طبية باسم </td>
                                        <td class="tx-right">{خالي من اي امراض باطنة او جلدية قد تكون ضارة او معدية اثناء رحلة السفر }</td>
                                    </tr>
                                    </td>
                                 
                                </tbody>
                            </div>
                            </table>
                            <br>
                            برجاء اعتمادها من سيادتكم.
                            <br>
                            <br>
                           وتعتمد علي مسؤلية المستشفي دون أدني مسئولية علي المديرية. 
                           <br>
                           <br> 
                           <br> 
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
                                        <label class="tx-gray-600"> مدير عام الطب العلاجي</label>
                                        </div>
                            
                                        <div class="col-md">
                                            <label class="tx-gray-600"> المدير العام</label>
                                        </div>
                                            <div class="col-md">
                                                <br>
                                                <br>
                                                <hr /> 
                                              

                                               

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
