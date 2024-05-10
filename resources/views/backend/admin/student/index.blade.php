@extends('backend.layouts.app')
@section('content')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
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
            height: 26px;
            width: 26px;
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
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Students</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Branch</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <form class="search-form-2" id="rank_search" action="{{ route('student.index') }}" accept-charset="UTF-8"
            method="GET">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="search">Search :</label>
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}" />

                </div>

            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success">
                    <span class="fa fa-search"></span> SEARCH
                </button>
                <a href="{{ route('student_bulk_export') }}" class="btn btn-success">
                    EXPORT
                </a>
            </div>
            </div>
        </form>

        <div class="row">
            <div class="col-12">



                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">All Student</h3>
                    </div>
                    <div class="card-body table-responsive p-0" id="table_data">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>NEET Score</th>
                                    <th>DOB</th>
                                    <th>Subscription</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($list as $data)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ optional($data->customer)->neet_score }}</td>
                                        <td>{{ optional($data->customer)->dob }}</td>
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
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {!! $list->links() !!}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
@endsection
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
