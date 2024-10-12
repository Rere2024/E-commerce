<!DOCTYPE html>
<html lang="en">
    @include('public.includes.head')
    <body>
        @include('public.includes.preload')
        @include('public.includes.header')

        @yield('content')
        
        @include('public.includes.footer')
        @include('public.includes.script')
  </body>
</html>
