<div id="wrapper">
<?php
   use Illuminate\Support\Facades\Session;
    $user = Session::get('username');
    ?>

<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"  style="margin-top:-1%"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i></a>
                <div class="top-left-part" ><a class="logo" href="/dashboard"><b><img src="/plugins/images/scis.png" alt="home" /></b>
                        </a></div>
                <span class="hidden-xs"><img src="/plugins/images/pree.png" alt="home" style="position: absolute; left: 4%; margin-top: 1%"/>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li style="position: relative; right:30%">
                        <a class="profile-pic" href="#"> <img src="/plugins/images/users/admin.png" alt="user-img" width="20%" class="img-circle">
                            <b class="hidden-xs">{{$user}}</b> </a>
                    </li>

                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li style="position: absolute; right: .5%; margin-top: 0%; margin-bottom: 1%; color: white;">
                        <a href="/logout"><input type="button" value="Logout" style="position:relative; border-radius: 5px; color:gray"; class="btn btn-default square-btn-adjust"></a>
                    </li>

                </ul>
            </div>
</nav>
</div>