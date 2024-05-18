@include('backend.include.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-primary">
                        <span class="info-box-icon"><i class="fa fa-business-time"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Collage</span>
                            <span class="info-box-number">{{App\Models\Collage::get()->count()}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-primary">
                        <span class="info-box-icon"><i class="fa fa-business-time"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Course</span>
                            <span class="info-box-number">{{App\Models\Course::get()->count()}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-primary">
                        <span class="info-box-icon"><i class="fa fa-business-time"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Users</span>
                            <span class="info-box-number">{{App\Models\User::where('user_type','customer')->get()->count()}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-primary">
                        <span class="info-box-icon"><i class="fa fa-business-time"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Enquiries</span>
                            <span class="info-box-number">{{App\Models\Enquiry::get()->count()}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
               
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('backend.include.footer')