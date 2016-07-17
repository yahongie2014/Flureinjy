@include('layout.header')
@include('layout.head')
@include('layout.menu')
@include('layout.topbar')
@include('layout.nav')
<section id="content_wrapper">
    @include('layout.warning')

@yield('content')

@include('layout.footer')

