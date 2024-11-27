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
                        <li class="breadcrumb-item"><a href="/admin/makaleler">Makaleler</a></li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="/admin/makaleler/add" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Yeni Makale Ekle</span>
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

            </div>
            <!-- [Contact Leads] end -->
            <!-- [Support Inbox] start -->

            <div class="card stretch stretch-full">
                <div class="card-body custom-card-action p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Makale</th>
                                    <th scope="col">Son Düzenleme</th>
                                    <th scope="col">Durum</th>
                                    <th scope="col">hit</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="position-relative">
                                            <div
                                                class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-success rounded">
                                            </div>
                                            <div class="hstack gap-3">
                                                {{-- <div class="avatar-image rounded">
                                                <img class="img-fluid" src="assets/images/avatar/12.png"
                                                    alt="">
                                            </div> --}}
                                                <div>
                                                    <a href="javascript:void(0);"
                                                        class="d-block">{{ $item->title ?? '' }}</a>
                                                    {{-- <span class="fs-12 text-muted">halimagdemir@emial.com</span> --}}
                                                </div>
                                            </div>
                                        </td>
                                        {{-- <td>
                                        <a href="javascript:void(0)" class="avatar-image avatar-md">
                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                        </a>
                                    </td> --}}
                                        <td>{{ $item->created_at ?? '' }}</td>
                                        <td>
                                            @if ($item->status == 'true')
                                                <a href="javascript:void(0)"
                                                    class="badge bg-soft-success text-success">Yayınlandı</a>
                                            @else
                                                <a href="javascript:void(0)"
                                                    class="badge bg-soft-warning text-dark">Yayında değil</a>
                                            @endif
                                        </td>
                                        <td style="padding-left: 40px;"><a
                                                href="javascript:void(0);">{{ $item->hit ?? 0 }}</a></td>
                                        <td class="d-flex gap-2">
                                            <a href="/admin/makaleler/status/{{$item->id}}" class="btn btn-success"> <i class="fa fa-check"></i></a>
                                            <a href="/admin/makaleler/add/{{$item->id}}" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                                            <a href="/admin/makaleler/delete/{{$item->id}}" class="btn btn-danger"> <i class="fa fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
