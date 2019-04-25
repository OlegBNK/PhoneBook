<html>
<head>
    <title>App Name - @yield('title_shmaitl')</title>

    @php
        $hour = 10; //date('H');
        $cssFile = 'light.css';
        if ($hour >= 17 || $hour <= 6){
            $cssFile = 'dark.css';
        }
        @endphp

    <link rel="stylesheet" href="/css/ @php echo $cssFile; @endphp" />
</head>
<body>
@section('sidebar')
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>