@extends('dashboard.layout.template')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard </h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/menu">Menü</a></li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="/admin/menu/add" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Yeni Menü Ekle</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- [Countries] end -->
            <!-- [Contact Leads ] start -->
            <div class="col-xxl-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="col-xxl-10 col-lg-10 mt-4 ml-2 mx-auto">
                    <div class="card stretch stretch-full">
                        <div class="card-header">
                            <h5 class="card-title">Menü</h5>
                        </div>
                        <div class="card-body">
                            @foreach ($data as $item)
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center ">
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">
                                                    <i class="fa fa-circle-dot text-danger"></i>
                                                    {{ $item->title ?? '' }}</a>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="/admin/menu/add/{{$item->id}}"> <i class="fa fa-edit text-success"></i></a>
                                            <a href="/admin/menu/delete/{{$item->id}}"> <i class="fa fa-trash-alt text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="children " style="padding-left: 15px">
                                    @foreach ($item->children as $child)
                                        <div class="p-3 border border-red border-dashed rounded-3 mb-1">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center ">
                                                    <div class="text-dark">
                                                        <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">
                                                            <i class="fa fa-circle-dot text-success"></i>
                                                            {{ $child->title ?? '' }}</a>
                                                    </div>
                                                </div>
                                                <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                                    <a href="/admin/menu/add/{{$child->id}}"> <i class="fa fa-edit text-success"></i></a>
                                                    <a href="/admin/menu/delete/{{$child->id}}"> <i class="fa fa-trash-alt text-danger"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- [Contact Leads] end -->
            <!-- [Support Inbox] start -->
        </div>
    </main>
@endsection
