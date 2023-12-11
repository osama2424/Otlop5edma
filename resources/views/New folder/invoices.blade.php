@extends('layouts.master')
@section('title')
الحالات
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الحالات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة
                    الحالات</span>
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

    @if(session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session()->has('delivery'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delivery') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('delete_invoice'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم حذف الفاتورة بنجاح",
                    type: "success"
                })
            }

        </script>
    @endif

    

    <!-- row -->
    <div class="row">
        <!--div-->
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                            <a class="modal-effect btn btn-sm btn-success" href="{{ url('invoices_delivery') }}"
                            style="color:white">&nbsp; الحالات التامة </a>
                    
                            <a class="modal-effect btn btn-sm btn-danger" href="{{ url('invoices_undelivery') }}"
                            style="color:white">&nbsp; الحالات المعلقة</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'style="text-align: center">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">اسم الحالة</th>
                                    <th class="border-bottom-0">الرقم القومي</th>
                                    <th class="border-bottom-0">الجنس</th>
                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{-- <?php $i =0?>
                             @foreach ($invoices as $invoice)
                             <?php $i++?>
                                    <tr>
                                    <td> {{$i}} </td>
                                    <td><a href="{{ url('InvoicesDetails') }}/{{ $invoice->id }}">{{ $invoice->name}}</a> </td>
                                   <td>{{ $invoice->phonenum}} </td>
                                   <td>{{ $invoice->lenses}} </td>
                                   <td>{{ $invoice->frame}} </td>
                                   <td>{{ $invoice->price}} </td>
                                   <td>{{ $invoice->paid}} </td>
                                   <td>{{ $invoice->rise}} </td>
                                   <td>{{ $invoice->invoice_Date}} </td>
                                   <td>{{ $invoice->Due_date}} </td>
                                   <td> @if ($invoice->Status == 'مدفوعة')
                                                <span class="text-success">{{ $invoice->Status }}</span>
                                            @else($invoice->Status == 'غير مدفوعة')
                                                <span class="text-danger">{{ $invoice->Status }}</span>
                                            @endif</td>

                                   <td>@if ($invoice->StatusDelivery == 'Delivery')
                
                                                <span class="text-success">مستلم</span>
                                            @else($invoice->Status == 'UnDelivery')
                                                <span class="text-danger"> غير مستلم </span>
                                            
                                            @endif  </td>
                                   <td>{{ $invoice->note}} </td>
                                   <td>
                                   <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item"
                                                            href=" {{ url('edit_invoice') }}/{{ $invoice->id }}"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="18" height="18"
                                                            viewBox="0 0 24 24"
                                                            style=" fill:#000000;">    <path d="M 18.414062 2 C 18.158062 2 17.902031 2.0979687 17.707031 2.2929688 L 15.707031 4.2929688 L 14.292969 5.7070312 L 3 17 L 3 21 L 7 21 L 21.707031 6.2929688 C 22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062 L 19.121094 2.2929688 C 18.926094 2.0979687 18.670063 2 18.414062 2 z M 18.414062 4.4140625 L 19.585938 5.5859375 L 18.292969 6.8789062 L 17.121094 5.7070312 L 18.414062 4.4140625 z M 15.707031 7.1210938 L 16.878906 8.2929688 L 6.171875 19 L 5 19 L 5 17.828125 L 15.707031 7.1210938 z"></path></svg>تعديل الفاتورة</a>
                                                        <a class="dropdown-item"
                                                            href="#"  data-target="#exampleModal2"  data-toggle="modal"   data-id="{{ $invoice->id }}"  data-name="{{ $invoice->name }}"  data-description="{{ $invoice->StatusDelivery }}" ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="16" height="16"
                                                            viewBox="0 0 16 16"
                                                            style=" fill:#000000;"><path d="M12.527 7.473L8.527 3.473 1 11 1 15 5 15zM11.172.828l-1.065 1.065 4 4 1.065-1.065c1.105-1.105 1.105-2.895 0-4l0 0C14.067-.276 12.276-.276 11.172.828z"></path></svg> تعديل حالة الاستلام</a>
                                                        <a class="dropdown-item"
                                                            href="Print_invoice/{{ $invoice->id }}"    ><i
                                                                class="text-success fas fa-print"></i>&nbsp;&nbsp;طباعة
                                                        </a>
                                                        <a class="dropdown-item" href="#" data-invoice_id="{{ $invoice->id }}" data-name="{{ $invoice->name }}" data-name_lenses="{{ $invoice->lenses }}" data-name_frame="{{ $invoice->frame }}"
                                                            data-toggle="modal" data-target="#delete_invoice"><i
                                                                class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;حذف
                                                        الفاتورة</a> --}}

                                    {{-- </td>
                                    </tr>
                                   
                        </div>
                                    @endforeach --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
	  <div class="modal-dialog" role="document">
			<div class="modal-content">
				 <div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel"> التقرير الطبي</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					  </button>
				 </div>
				 <div class="modal-body">

					  <form action="/paid_payment" method="post" autocomplete="off">
							{{csrf_field()}}
							<div class="form-group">
								 
								<label for="inputName" class="control-label">التقرير الطبي</label>
                                <div class="row">
                                    <div class="col-4" >
                                <input class="form-control" name="name" id="name" type="text" readonly>
                                
                                <input class="form-control"  name="text" type="text" > 

                                </div>
				 </div>
				 <div class="modal-footer">
					  <button type="submit" class="btn btn-primary">تاكيد</button>
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
				 </div>
				 </form>
			</div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"  id="exampleModalLabel">العمليات</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    {{ method_field('PATCH') }}
                                        {{csrf_field()}}
                                        
                                        <form  action="invoiceses/{id}" method="GET">
                                        <div class="row">
                                            <div class="col-4" >
                                        <input class="form-control" name="name" id="name" type="text" readonly>
                                        </div>
                                            <div class="col"><select class="form-control SlectBox" id="description" name="StatusDelivery" aria-label="Default select example">
                                                 <option value="Delivery">مستلم</option>
                                                 <option value="UnDelivery" >غير مستلم</option>
                                                    </select>
                                                    <input type="hidden" name="id" id="id" value="">
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

    
    <!-- حذف الفاتورة -->
    <div class="modal fade" id="delete_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف الفاتورة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{#}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                </div>
                <div class="modal-body">
                    هل انت متاكد من عملية الحذف ؟
                    <input type="hidden" name="name_lenses" id="name_lenses" value="">
                    <input type="hidden" name="name_frame" id="name_frame" value="">
                    <input type="hidden" name="invoice_id" id="invoice_id" value="">
                    <input class="form-control" name="name" id="name" type="text" readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-danger">تاكيد</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- ارشيف الفاتورة -->
    <!-- <div class="modal fade" id="Transfer_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ارشفة الفاتورة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="
                </div>
                <div class="modal-body">
                    هل انت متاكد من عملية الارشفة ؟
                    <input type="hidden" name="invoice_id" id="invoice_id" value="">
                    <input type="hidden" name="id_page" id="id_page" value="2">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-success">تاكيد</button>
                </div>
                </form>
            </div>
        </div>
    </div> -->

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>

    <script>
        $('#delete_invoice').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var invoice_id = button.data('invoice_id')
            var name = button.data('name')
            var name_lenses = button.data('name_lenses')
            var name_frame = button.data('name_frame')
            var modal = $(this)
            modal.find('.modal-body #invoice_id').val(invoice_id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #name_lenses').val(name_lenses);
            modal.find('.modal-body #name_frame').val(name_frame);
        })

    </script>

    <script>
        $('#Transfer_invoice').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var invoice_id = button.data('invoice_id')
            var modal = $(this)
            modal.find('.modal-body #invoice_id').val(invoice_id);
        })

    </script>

<script>
        $('#exampleModal2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var description = button.data('description')
            
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #description').val(description);
            
        })
    </script>






@endsection
