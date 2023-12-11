@extends('layouts.master')
@section('css')
<!---Internal  Prism css-->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!---Internal Input tags css-->
<link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
<!--- Custom-scroll -->
<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
@endsection
@section('title')
    تفاصيل الحالة
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">قائمة الحالات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    تفاصيل الحالة</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif



    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif



    <!-- row opened -->
    <div class="row row-sm">

        <div class="col-xl-12">
            <!-- div -->
            <div class="card mg-b-20" id="tabs-style2">
                <div class="card-body">
                    <a  href= "#"  class="modal-effect btn btn-sm btn-primary" style="color:white"><i
                        class="fas fa-print"></i>&nbsp; التقرير الطبي </a>
    
                    <div class="text-wrap">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-2">
                                <div class=" tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs main-nav-line">
                                            <li><a href="#tab4" class="nav-link active" data-toggle="tab">المعلومات الاساسية </a></li>
                                            <li><a href="#tab5" class="nav-link " data-toggle="tab"> المستندات</a></li>
                                       
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body main-content-body-right border">
                                    <div class="tab-content">


                                        <div class="tab-pane active" id="tab4">
                                        <div class="table-responsive">
                        <table id="example2" class="table key-buttons text-md-nowrap" data-page-length='50'style="text-align: center">
                            <thead>
                                <tr>
                                  <th class="border-bottom-0">اسم الحالة</th>
                                  <th class="border-bottom-0"> السن</th>
                                  <th class="border-bottom-0"> الجنس</th>
                                  <th class="border-bottom-0"> الرقم القومي</th>
                                  <th class="border-bottom-0">تاريخ الطلب</th>
                                </tr>
                                </thead>
                            <tbody>
                         {{-- <tr>
                              <td>{{ $invoice->name}} </td>  
                              <td>{{ $invoice->phonenum}} </td> 
                              <td>{{ $invoice->invoice_Date}} </td>
                              <td>{{ date_format ($invoice->created_at , 'h:ia')}} </td>
                              <td>{{ $invoice->Due_date}} </td>
                              <td>{{ $invoice->namedoctor}} </td>



                            </tr>  --}}

                                        </tbody>
                        </table>    
                                        </div>
                                        </div>

                                        <div class="tab-pane" id="tab5">
                                        <div class="table-responsive">
                        <table id="example3" class="table key-buttons text-md-nowrap" data-page-length='50'style="text-align: center">
                            <thead>
                                <tr>
                                    
            
                                    <th class="border-bottom-0">البطاقة الشخصية</th>
                                    <th class="border-bottom-0">جواز السفر</th>
                                    <th class="border-bottom-0">التأشيرة</th>
                                   

                                    
                                 
                            
                                </tr>
                            </thead>
                            <tbody>
                           
                            
                            
                                    <tr>

                                
                                    <td> <a  href= "#"  class="modal-effect btn btn-sm btn-primary" style="color:white"><i
                                        class="fas fa-"></i>&nbsp; عرض المستند</a> </td>
                                        <td> <a  href= "#"  class="modal-effect btn btn-sm btn-primary" style="color:white"><i
                                            class="fas fa-"></i>&nbsp; عرض المستند</a> </td>
                                            <td> <a  href= "#"  class="modal-effect btn btn-sm btn-primary" style="color:white"><i
                                                class="fas fa-show"></i>&nbsp; عرض المستند</a> </td>
                               
                                     
                                    
                                   
                                    </tr>
                                

                            </tbody>
                        </table>
                    </div>
                                    
           
                                        </div>





       


            <!-- /div -->
        </div>
        

    </div>
    <!-- /row -->

    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Jquery.mCustomScrollbar js-->
    <script src="{{ URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- Internal Input tags js-->
    <script src="{{ URL::asset('assets/plugins/inputtags/inputtags.js') }}"></script>
    <!--- Tabs JS-->
    <script src="{{ URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <script src="{{ URL::asset('assets/js/tabs.js') }}"></script>
    <!--Internal  Clipboard js-->
    <script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js') }}"></script>
    <!-- Internal Prism js-->
    <script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>

  


@endsection
