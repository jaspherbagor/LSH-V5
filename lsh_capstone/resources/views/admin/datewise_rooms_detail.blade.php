@extends('admin.layout.app')

@section('heading', 'Rooms (Booked and Available) for '.$selected_date)

@section('right_top_button')
<a href="{{ route('admin_datewise_rooms') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back to previous</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    {{-- <th>Accommodation Name</th> --}}
                                    <th>Room Name</th>
                                    <th>Total Rooms</th>
                                    <th>Booked Rooms</th>
                                    <th>Available Rooms</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $rooms = \App\Models\Room::get();
                                @endphp 
                                @foreach($rooms as $row)

                                {{-- @php
                                // dd($row->id);
                                $accommodation = \App\Models\Accommodation::where('id', $row->id)->first();
                                // dd($accommodation) 
                                // \App\Models\Room::where('id',$item->room_id)->first();
                                @endphp --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $accommodation->name }}</td> --}}
                                    <td>{{ $row->room_name }}</td>
                                    <td>{{ $row->total_rooms }}</td>
                                    <td>
                                        @php
                                        $cnt = \App\Models\BookedRoom::where('room_id',$row->id)->where('booking_date',$selected_date)->count();
                                        @endphp
                                        {{ $cnt }}
                                    </td>
                                    <td>
                                        {{ $row->total_rooms-$cnt }}
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