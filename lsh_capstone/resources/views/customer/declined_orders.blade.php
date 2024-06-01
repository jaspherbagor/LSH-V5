@extends('customer.layout.app')

@section('heading', 'Declined Bookings')

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Reference No.</th>
                                        <th>Payment Method</th>
                                        <th>Booking Date</th>
                                        <th>Paid Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($declined_orders as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->transaction_id }}</td>
                                        <td>{{ $row->payment_method }}</td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('d/m/Y', $row->booking_date)->format('F d, Y') }}</td>
                                        <td>₱{{ number_format($row->paid_amount, 2) }}</td>
                                        <td class="pt_10 pb_10">
                                            <button type="button" class="btn btn-dark">{{ $row->status }}</button>
                                        </td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('customer_invoice',$row->id) }}" class="btn btn-info mb-md-0 mb-1" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></a>
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
    </div>
@endsection
