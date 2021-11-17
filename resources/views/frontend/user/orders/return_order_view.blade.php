@extends('frontend.main_master')

@section('content')

    <div class="body-content">

        <div class="container">
            <div class="row">

                @include('frontend.common.user_profile_side')



                <div class="col-md-8">
                    <div class="table-responsive ">
                        <table style="margin-top: 2rem;" class="table">
                            <tbody>
                            <tr style="background:#e2e2e2">
                                <td class="col-md-1">
                                    <label for="">Date</label>
                                </td>

                                <td class="col-md-3">
                                    <label for="">Total($)</label>
                                </td>
                                <td class="col-md-3">
                                    <label for="">Payment Method</label>
                                </td>

                                <td class="col-md-3">
                                    <label for="">Invoice</label>
                                </td>

                                <td class="col-md-1">
                                    <label for="">Order No:</label>
                                </td>
                                <td class="col-md-3">
                                    <label for="">Status</label>
                                </td><td class="col-md-3">
                                    <label for="">Action</label>
                                </td>


                            </tr>


                            @foreach($orders as $order)
                                <tr>
                                    <td class="col-md-1">
                                        <label for="">{{$order->order_date}}</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for="">{{$order->amount}}</label>
                                    </td>
                                    <td class="col-md-3">
                                        <label for="">{{$order->payment_method}}</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for="">{{$order->invoice_no}}</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for="">{{$order->order_number}}</label>
                                    </td>

                                    <td class="col-md-2">
                                        <label for="">

                                            @if($order->return_order == 0)
                                                <span class="badge badge-pill badge-warning" style="background: #418DB9;"> No Return Request </span>
                                            @elseif($order->return_order == 1)
                                                <span class="badge badge-pill badge-warning" style="background: #800000;"> Pending </span>
                                                <span class="badge badge-pill badge-warning" style="background:red;">Return Requested </span>

                                            @elseif($order->return_order == 2)
                                                <span class="badge badge-pill badge-warning" style="background: #008000;">Return Approved </span>
                                            @endif

{{--                                            <span class="badge badge-pill badge-warning" style="background: #418DB9">--}}
{{--                                                {{$order->status}}--}}
{{--                                            </span>--}}


                                        </label>
                                    </td>

                                    <td class="col-md-1">
                                        <a href="{{url('user/order_details/'.$order->id)}}"
                                           class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</a>
                                        <a target="_blank" href="{{url('user/invoice_download/'.$order->id)}}"
                                           style="color: white; margin-top: 5px;" class="btn btn-danger btn-sm"><i
                                                class="fa fa-download"></i> Invoice</a>
                                    </td>


                                </tr>

                            @endforeach


                            </tbody>

                        </table>

                    </div>


                </div>
            </div>

        </div>
    </div>


@endsection
