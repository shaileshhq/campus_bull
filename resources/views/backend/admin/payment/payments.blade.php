@extends('backend.layouts.app')
@section('content')
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 25px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #dc3545;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #28a745;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #28a745;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
    <section class="content-header">

    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <div class="">
                        <form action="" method="GET" id="valid_form">
                            <div class="row">
                            <div class="col-3">
                                <label>Phone</label><br/>
                                <input type="text" name="search" class="form-control float-right"
                                placeholder="Enter Phone "
                                @isset($search) value="{{ $search }}" @endisset>
                            </div>
                            <div class="col-2">
                                <label>Filter</label><br/>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        Search
                                    </button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Payment Id</th>
                                <th>Amount</th>
                                <th>Plan</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach ($list as $key=> $data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$data->user->name}}</td>
                                    <td>{{$data->payment_id}}</td>
                                    <td>{{$data->payment_amount}}</td>
                                    <td>{{$data->plan_name}}</td>
                                    <td>{{$data->plan_status}}</td>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>

                    {!! $list->links() !!}
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

   

@endsection
