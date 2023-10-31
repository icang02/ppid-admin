<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">

    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="{{ route('dashboard') }}" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="{{ asset('img/ppid.png') }}" alt="" class="logo" width="115">
            <img src="{{ asset('admin-assets/assets/images/logo-icon.png') }}" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="pop-search font-weight-bold">DASHBOARD PPID UHO</i></a>
            </li>

        </ul>

    </div>


</header>
<!-- [ Header ] end -->
