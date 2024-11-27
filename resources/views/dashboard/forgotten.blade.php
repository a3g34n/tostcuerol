<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">
    <title>Email Doğrulama</title>
    <link rel="shortcut icon" type="image/x-icon" href="/dashboard/assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/theme.min.css">
</head>

<body>
    <main class="auth-cover-wrapper">
        <div class="auth-cover-sidebar-inner">
            <div class="auth-cover-card-wrapper">
                <div class="auth-cover-card">
                    <h2 class="fs-20 fw-bolder mb-4">Email Doğrulama</h2>

                    <form action="{{ route('password.verifyEmail') }}" method="post" class="w-100 mt-4 pt-2">
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        @csrf
                        <div class="mb-4">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-lg btn-primary w-100">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="/dashboard/assets/vendors/js/vendors.min.js"></script>
    <script src="/dashboard/assets/js/common-init.min.js"></script>
    <script src="/dashboard/assets/js/theme-customizer-init.min.js"></script>
</body>

</html>
