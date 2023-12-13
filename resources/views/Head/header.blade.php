@include("Head.sidebar")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <title>Document</title>
</head>
<body>
    @yield("sidebar")
    @yield("content")
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="{{ asset('js/custom.js') }}"></script> -->
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>