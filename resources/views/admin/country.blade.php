@extends('admin.layouts.app')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Country Table</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Country table</li>
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
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th style="width: 7%;">Edit</th>
                                            <th style="width: 10%;">Delete</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($show as $value)
                                        <tr>
                                            <th scope="row">{{$value->id}}</th>
                                            <td>{{$value->name}}</td>
                                            <td>
                                                <a href="{{url('country/edit',['Id'=>$value->id])}}"><i class="mdi mdi-account-edit"></i>Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{url('country/delete',['Id'=>$value->id])}}"><i class="mdi mdi-delete"></i>Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <td colspan="8">
                                                <a href="{{url('add')}}"><button id="button" class="btn btn-success" style="float: right;">Thêm cầu thủ</button></a>
                                            </td>
                                        </tr>
                                    </tfoot> -->
                                </table>
                                {{ $show->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{url('country/add')}}"><button id="button" class="btn btn-success">Create Country</button></a>
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
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            
@endsection