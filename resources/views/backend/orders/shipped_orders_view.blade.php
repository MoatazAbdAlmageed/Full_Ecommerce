@extends('admin.admin_master')
@section('admin')

    <div class="container-full">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Shipped Orders Data</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Shipped Orders</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th> Amount</th>
                                        <th> Payment</th>
                                        <th> Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                    <tfoot>
                                    @foreach($orders as $item)
                                        <tr>
                                            <td>{{$item->order_date}}</td>
                                            <td>{{$item->invoice_no}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td>{{$item->payment_method}}</td>

                                            <td>
                                                <span class="badge badge-pill badge-success text-capitalize"> {{$item->status}} </span>


                                            </td>
                                            <td width="30%">
                                                <a href="{{ route('shipped.details',$item->id) }}"
                                                   class="btn btn-info"
                                                   title="View order"> <i class="fa fa-eye"></i></a>
                                                <a target="_blank" href=" {{ route('invoice.download',$item->id) }}"
                                                   class="btn btn-danger" title=" Invoice download" id="download"><i
                                                        class="fa fa-download"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->


            </div>
        </section>


    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->

    </div>

@endsection
