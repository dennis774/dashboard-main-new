<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Cap-Board</title>
        {{-- BOOTSTRAP --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" />
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        {{-- END OF BOOTSTRAP --}} {{-- FONT AWESOME --}}
        <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}" />
        {{-- END OF FONT AWESOME --}}
    </head>
    <body>
        <div class="container-fluid">
            @yield('content')
        </div>
        <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
