@include('layouts.navbars.navs.auth')

@guest()
@include('layouts.navbars.navs.guest')
@endguest