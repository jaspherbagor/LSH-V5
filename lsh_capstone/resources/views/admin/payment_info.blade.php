@extends('admin.layout.app')

@section('heading', 'Payment Information')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_payment_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Existing Gcash Qr</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$payment_info->gcash_qr) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Change Gcash Qr</label>
                                    <div>
                                        <input type="file" name="gcash_qr">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Gcash Recepient Name</label>
                                    <input type="text" class="form-control" name="gcash_name" value="{{ $payment_info->gcash_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Gcash Recepient Number</label>
                                    <input type="text" class="form-control" name="gcash_number" value="{{ $payment_info->gcash_number }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Existing Maya Qr</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$payment_info->maya_qr) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Change Maya Qr</label>
                                    <div>
                                        <input type="file" name="maya_qr">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Maya Recepient Name</label>
                                    <input type="text" class="form-control" name="maya_name" value="{{ $payment_info->maya_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Maya Recepient Number</label>
                                    <input type="text" class="form-control" name="maya_number" value="{{ $payment_info->maya_number }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection