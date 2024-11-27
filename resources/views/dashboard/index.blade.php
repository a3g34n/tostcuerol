@extends('dashboard.layout.template')

@section('content')
<div class="container">
    <h1>Edit Home Page</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Banner Image -->
        <div class="mb-3">
            <label for="banner_image" class="form-label">Banner Image</label>
            <input type="file" id="banner_image" name="banner_image" class="form-control">
            @if($homePage->banner_image)
                <img src="{{ asset('storage/' . $homePage->banner_image) }}" alt="Banner" class="img-fluid mt-2">
            @endif
        </div>

        <!-- Banner Text -->
        <div class="mb-3">
            <label for="banner_text" class="form-label">Banner Text</label>
            <input type="text" id="banner_text" name="banner_text" class="form-control" value="{{ $homePage->banner_text }}">
        </div>

        <!-- Images and Texts -->
        @for ($i = 1; $i <= 5; $i++)
            <div class="mb-3">
                <label for="image{{ $i }}" class="form-label">Image {{ $i }}</label>
                <input type="file" id="image{{ $i }}" name="image{{ $i }}" class="form-control">
                @if($homePage->{"image$i"})
                    <img src="{{ asset('images/' . $homePage->{"image$i"}) }}" alt="Current Image" width="100" class="mt-2">

                @endif
            </div>
            <div class="mb-3">
                <label for="text{{ $i }}" class="form-label">Text {{ $i }}</label>
                <input type="text" id="text{{ $i }}" name="text{{ $i }}" class="form-control" value="{{ $homePage->{"text$i"} }}">
            </div>
        @endfor

        <!-- Catchphrase -->
        <div class="mb-3">
            <label for="catchphrase" class="form-label">Catchphrase</label>
            <input type="text" id="catchphrase" name="catchphrase" class="form-control" value="{{ $homePage->catchphrase }}">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection