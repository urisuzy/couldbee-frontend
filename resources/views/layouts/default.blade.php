@include('components.header')

@if(is_numeric(Cookie::get('user_id')))
@include('components.navbar')
@else
@include('components.navbar-guest')
@endif

@yield('content')

@include('components.footer')