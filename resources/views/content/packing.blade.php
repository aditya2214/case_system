@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Case Number</th>
                        <th>Color</th>
                        <th>From</th>
                        <th>Destination Export</th>
                        <th>Status</th>
                        <th>Created_by</th>
                        <th>Updated_by</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packing as $case)
                    <tr>
                        <td>{{$case->case_number }}</td>
                        <td>{{$case->color}}</td>
                        <td>{{$case->from}}</td>
                        <td>{{$case->destionation_export}}</td>
                        <td>{{$case->status}}</td>
                        <td>{{$case->created_by}}</td>
                        <td>{{$case->updated_by}}</td>
                        <td>{{$case->created_at}}</td>
                        <td>{{$case->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection