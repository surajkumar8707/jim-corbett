@extends('admins.layouts.app')


@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">Tour Packages</h4>
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
                            <th>Details</th>
                            <th>Message</th>
                            <th>Enquiry date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($enquiries as $key => $enquiry)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <p class="p-0 m-0">{{ $enquiry->name }}</p>
                                    <p class="p-0 m-0">{{ $enquiry->email }}</p>
                                    <p class="p-0 m-0">{{ $enquiry->phone }}</p>
                                </td>
                                <td>{{ $enquiry->message }}</td>
                                <td>
                                    <span class="badge badge-primary">{{ date('D m Y', strtotime($enquiry->created_at)) }}</span>
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
