<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
            <a href="index.html" class="logo"><img src="{{ url('public') }}/images/logo.png" height="14"
                    alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-inner slimscrollleft" id="sidebar-main">
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ url('base-penulis') }}" class="waves-effect waves-light"><i
                            class="mdi mdi-view-dashboard"></i><span>
                            Dashboard </span></a>
                </li>
                <li>
                    <a href="{{url('blog-penulis')}}" class="waves-effect waves-light"><i class="fa fa-book"></i><span>
                            Blog </span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
