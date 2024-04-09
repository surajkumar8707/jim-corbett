@extends('admins.layouts.app')


@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">Home Page Carousel</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{{ route('admin.tour.package.create') }}">Add +</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($home_page_carousel as $key => $carousel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $carousel->title }}</td>
                                <td>{{ $carousel->image }}</td>
                                <td>
                                    {{-- <input type="checkbox">
                                    {{ $carousel->status }} --}}
                                    <div class="slider-container">
                                        <input type="checkbox" @if($carousel->status == 1) checked @endif id="checkbox-slider" class="checkbox">
                                        <label for="checkbox-slider" class="slider"></label>
                                      </div>
                                </td>
                                <td>
                                    <span class="badge badge-primary">{{ date('D m Y', strtotime($carousel->created_at)) }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th class="text-center" colspan="10">No enquiry available in the table</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
