@extends('dashboard.layout.template')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/menu">Makaleler</a></li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                @if (isset($errors))
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form action="/admin/menu/add" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
                    <div class="formgroup">
                        <label for="title">Başlık</label>
                        <input type="text" class="form-control" placeholder="Başlık" name="title"
                            value="{{ old('title', isset($data) && isset($data->title) ? $data->title : '') }}">
                    </div>
                    <div class="formgroup">
                        <label for="url">Url</label>
                        <input type="text" class="form-control" placeholder="Url" name="url"
                            value="{{ old('url', isset($data) && isset($data->url) ? $data->url : '') }}">
                    </div>
                    <div class="formgroup">
                        <label for="url">Sıra</label>
                        <input type="text" class="form-control" placeholder="order" name="order"
                            value="{{ old('order', isset($data) && isset($data->order) ? $data->order : '') }}">
                    </div>
                    <div class="formgroup">
                        <label for="title">Üst Kategori</label>
                        <select name="parent_id" class="form-control">
                            <option value="">Seçiniz</option>
                            @foreach ($parents as $item)
                                @if (isset($data) && isset($data->parent_id))
                                    <option value="{{ $item->id }}" selected>{{ $item->title }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endif
                            @endforeach
                        </select>

                    </div>

                    <div class="d-flex align-items-center gap-2 mt-3">
                        <button type="submit" class="btn btn-md btn-primary">
                            <i class="feather-save me-2"></i>
                            <span>Kaydet</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editor"), {
            height: '400px'
        });
    </script>
@endsection
