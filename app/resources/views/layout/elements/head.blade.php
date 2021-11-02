<head>
    <title>{{setting('site.title')}}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Include All CSS -->
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/all.css')}}"/>

<!-- End Include All CSS -->

<!-- Favicon Icon -->
<link rel="icon" type="image/png" href="{{asset('favicona.png')}}">
<!-- Favicon Icon -->
    @livewireStyles

</head>

