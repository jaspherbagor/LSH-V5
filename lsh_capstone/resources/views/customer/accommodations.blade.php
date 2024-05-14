@extends('customer.layout.app')

@section('heading', 'All Accommodations')

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
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($accommodations as $row)
                                   
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/'.$row->photo) }}" alt="slide_image" class="w_200">
                                        </td>
                                        <td>{{ $row->name }}</td>
                                        <td class="pt_10 pb_10">
                                            
                                            <a href="{{ route('customer_review_add', $row->id) }}" class="btn btn-success mb-md-0 mb-1" data-toggle="tooltip" data-placement="top" title="Add Review"><i class="fa fa-star" aria-hidden="true"></i></a>
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
