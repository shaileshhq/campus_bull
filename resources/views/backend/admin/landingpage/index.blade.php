@extends('backend.layouts.app')
@section('content')
    <section class="content-header">
            
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h2 class="card-title">PG Medical Admission Enquiry</h2>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>Neet Score</th>
                                <th>Number</th>
                                <th>Branch</th>
                                <th>Budget</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($enquirys) && $enquirys->count())
                                @foreach ($enquirys as $key => $enquiry)
                                    <tr>
                                        
                                        <td>{{ $enquiry->name }}</td>
                                        <td>{{ $enquiry->neet_score }}</td>
                                        <td><a href="tel:{{ $enquiry->phone }}"> {{ $enquiry->phone }}</a></td>
                                        <td>{{ $enquiry->branch }}</td>
                                        <td>{{ $enquiry->budget }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                <tr>
                            @endif
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
@endsection