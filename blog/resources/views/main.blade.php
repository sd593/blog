<!DOCTYPE html>
<html lang="en">
      <head>

            @include('partials._head')

            @yield('stylesheet')


      </head>

      <body>

            @include('partials._navbar')

          <div class="container">
            @include('partials._messages')
            @yield('content')
          </div>


            @yield('sidebar')



            @include('partials._footer')

            <!-- include used for partials-->
            @include('partials._scripts')
            @yield('scripts')



      </body>
</html>