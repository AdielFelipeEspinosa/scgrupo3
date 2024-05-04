<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.include.head')
  <title>Servitecas SAS</title>
</head>
<body>
@include('layouts.include.header')  
@include('layouts.include.navError')

  @yield('content')

@include('layouts.include.footer')
</body>
</html>