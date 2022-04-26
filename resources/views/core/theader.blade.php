<header class="main-header">
    <title>Aya Laundry</title>
    <a href="#" class="logo">
        <span class="logo-mini"><b></b></span>
        <span class="logo-lg"><b>Aya Laundry</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">admin</span>
                    </a>
                    <ul class="dropdown-menu">
                        
                        <li class="user-header">
                            <img src="" class="img-circle" alt="User Image">
                            <p>admin</p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{ route('logout') }}"
                                    class="btn btn-default btn-flat" 
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Log Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>

                <li></li>
            </ul>
        </div>
    </nav>
</header>
