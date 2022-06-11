@extends('admin.layouts.app')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Edit Blog</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <form class="form-horizontal m-t-30" method="post" enctype='multipart/form-data'>
                            @csrf
                                @foreach($edit as $value)
                                <div class="form-group">
                                    <label>Title(*)</label>
                                    <input type="text" name='title' value="{{$value->title}}" class="form-control">
                                    @error('title')
                                        <span style="color:red;">{{$message}}</span></br>
                                    @enderror 
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file"  name="image" class="form-control" value="{{$value->image}}" placeholder="">
                                    @error('image')
                                        <span style="color:red;">{{$message}}</span></br>
                                    @enderror 
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description"  rows="3">{{$value->description}}</textarea>
                                    @error('description')
                                        <span style="color:red;">{{$message}}</span></br>
                                    @enderror 
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="form-control" id="demo" name="content" rows="5"></textarea>
                                    @error('content')
                                        <span style="color:red;">{{$message}}</span></br>
                                    @enderror
                                </div>
                                <input type="submit" value="Edit Blog" class="btn btn-success">
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
@endsection