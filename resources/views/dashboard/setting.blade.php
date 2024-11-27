@extends('dashboard.layout.template')

@section('content')

    <main class="nxl-container">
        <form action="/admin/settings" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="container pt-5">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                        <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" class="form-control" placeholder="Makale Başlığı" name="title" value="{{ old('title', $data->title ?? '') }}">
                        </div>
                        <div class="form-group mt-4">
                            <label for="tags">Site Etiketler</label>
                            <input type="text" class="form-control" placeholder="etiket1,etiket2 ..." name="tags" value="{{ old('tags', $data->tags ?? '') }}">
                        </div>
                        <div class="form-group mt-4">
                            <label for="logo">Logo</label>
                            <input type="file" class="form-control" name="logo">
                            @if (isset($data->logo))
                                <img src="{{ asset('images/' . $data->logo) }}" alt="Current Image" width="100" class="mt-2">
                            @endif
                        </div>
                        <div class="form-group mt-4">
                            <label for="logo">Slider Banner</label>
                            <input type="file" class="form-control" name="slider">
                            @if (isset($data->slider))
                                <img src="{{ asset('images/' . $data->slider) }}" alt="Current Image" width="100" class="mt-2">
                            @endif
                        </div>
                        <div class="form-group mt-4">
                            <label for="slidercontent">Slider Açıklaması</label>
                            <textarea class="form-control" id="editor" style="min-height: 50px" name="slidercontent">{{ old('slidercontent', $data->slidercontent ?? '') }}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for="description">Site Açıklaması</label>
                            <textarea class="form-control" style="min-height: 50px" name="description">{{ old('description', $data->description ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container pt-5">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" placeholder="https://...." name="facebook" value="{{ old('facebook', $data->facebook ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="instagram">İnstagram</label>
                            <input type="text" class="form-control" placeholder="https://...." name="instagram" value="{{ old('instagram', $data->instagram ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" class="form-control" placeholder="https://...." name="linkedin" value="{{ old('linkedin', $data->linkedin ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="" name="email" value="{{ old('email', $data->email ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="text" class="form-control" placeholder="" name="phone" value="{{ old('phone', $data->phone ?? '') }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 mt-3">
                    <button type="submit" class="btn btn-md btn-primary">
                        <i class="feather-save me-2"></i>
                        <span>Kaydet</span>
                    </button>
                </div>
            </div>
        </form>
    </main>

    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editor"), {
            height: '400px'
        });
    </script>
@endsection
