<!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Shihanur Rahman Chowdhury">
        <link rel="shortcut icon" type="image/x-icon" href="#">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- CDN BootStrap v5.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- Custom CSS -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .content a {text-decoration: none;}
            .content .a-border {border: 1px solid #ddd}
        </style>

    </head>
<body>

	<h1 class="text-center text-success pt-5">Bismillah Hir Rahmanir Rahim</h1>

    <div class="content display-6 text-center">
        <div class="text-info py-5">
            Laravel v-8
        </div>
        <div>
            <a class="text-warning px-3" href="{{ URL::to('/') }}">Home</a>
            <a class="text-warning px-3" href="#">About</a>
            <a class="text-success px-3 a-border" href="{{ url('four') }}">IV</a>
            <a class="text-warning px-3" href="{{ route('vi') }}">VI</a>
            <a class="text-warning px-3" href="#">Blog</a>
            <a class="text-warning px-3" href="#">Contact</a>
        </div>
    </div>



	<!-- CDN BootStrap v5.0x JQuery first, then popper js then Bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
