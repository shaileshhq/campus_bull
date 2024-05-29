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
                    <h3 class="card-title">Student List</h3>

                    <div class="card-tools">
                        <form class="mt-1 mr-4" action="" method="GET" id="valid_form">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right"
                                    placeholder="Enter Phone "
                                    @isset($search) value="{{ $search }}" @endisset>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Score</th>
                                <th>Exam Type</th>
                                <th>Subscription</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($list as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ optional($data->customer)->score }}</td>
                                    <td>{{ optional($data->customer)->exam_type }}</td>
                                    <td>
                                        @if (!empty(optional($data->payment)->payment_id))
                                            <b>Plan Name: </b>{{ optional($data->payment)->plan_name }} <br>
                                            <b>Payment_id: </b>{{ optional($data->payment)->payment_id }} <br>
                                            <b>Date: </b>{{ optional($data->payment)->created_at }}<br>
                                            <i class="fa fa-info-circle" title="Show Transaction History"></i>
                                        @else
                                            Not Subscribed
                                            <div class="form-group">
                                                <select class="form-control" id="package_{{ $data->id }}">
                                                    <option value=""> Select Package</option>
                                                    <option value="2359"> Package ₹ 1990/- </option>
                                                    {{-- <option value="29499"> Package ₹ 24999/- </option> --}}
                                                </select>
                                        @endif
                                        <br>
                                        <label class="switch">
                                            <input type="checkbox" class="tog" name="my-checkbox"
                                                value="{{ $data->id }}"
                                                @if (!empty(optional($data->payment)->payment_id)) checked @endif>
                                            <span class="slider round"></span>
                                        </label>

                                    </td>
                                    <td>
                                        <a class="btn btn-success  btn-sm mr-1"
                                            href="{{ route('student.edit', $data->id) }}"><i class="far fa-edit"></i></a>
                                    </td>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            $('.tog').change(function() {
                var c = $(this).val();
                var packages = $('#package_' + c).val();
                console.log(packages);
                if (packages == '') {
                    alert('Please Select Package');
                } else {
                    var status = $(this).prop('checked');
    
                    if (status == true) {
                        var state = "enable";
                    }
                    if (status == false) {
                        var state = "disable";
                    }
    
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('update_status_subscription') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            stat: state,
                            user_id: c,
                            packages: packages
                        },
                        success: function(data) {
                            if (data == 1) {
    
    
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Subscription Activate'
                                });
                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Subscription DeActivate'
                                });
                            }
                        }
                    });
                }
            })
    
    
        });
    </script>

@endsection
