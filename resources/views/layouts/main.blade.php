<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('components.navbar')

@yield('content')
<style>
.carousel-item img {
    height: 400px;
    object-fit: cover;
}
</style>

@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>