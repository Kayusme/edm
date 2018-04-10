<!-- Navigation -->
<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header text-nowrap">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Eduque Moi | Espace Elève</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">2</span></a>
            <ul class="dropdown-menu">
                <li class="dropdown-menu-header">
                    <strong>Messages</strong>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="<?=base_url("assets/eleve/images/1.png")?>" alt=""/>
                        <div>Nouveau message</div>
                        <small>1 minute ago</small>
                        <span class="label label-info">Nouveau</span>
                    </a>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="<?=base_url("assets/eleve/images/2.png")?>" alt=""/>
                        <div>Nouveau message</div>
                        <small>1 minute ago</small>
                        <span class="label label-info">NEW</span>
                    </a>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="<?=base_url("assets/eleve/images/3.png")?>" alt=""/>
                        <div>Nouveau message</div>
                        <small>2 minutes ago</small>
                    </a>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="<?=base_url("assets/eleve/images/4.png")?>" alt=""/>
                        <div>Nouveau message</div>
                        <small>5 minutes ago</small>
                    </a>
                </li>
                <li class="dropdown-menu-footer text-center">
                    <a href="#">Voir tous les messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<?=base_url("assets/eleve/images/1.png")?>"><span class="badge">4</span></a>
            <ul class="dropdown-menu">
                <li class="dropdown-menu-header text-center">
                    <strong>Profil</strong>
                </li>
                <li class="m_2"><a href="<?=base_url("Eleve/inbox")?>"><i class="fa fa-bell-o"></i> Notification <span class="label label-info">42</span></a></li>
                <li class="m_2"><a href="<?=base_url("Eleve/compose")?>"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">2</span></a></li>
                <li class="m_2"><a href="<?=base_url("Eleve/devoir")?>"><i class="fa fa-tasks"></i> Devoirs <span class="label label-danger">6</span></a></li>
                    <br /><br /><strong style="margin-left: 40%">Settings</strong><br />
                </li>
                <li class="m_2"><a href="<?=base_url("Eleve/profile")?>"><i class="fa fa-user"></i> Profile</a></li>
                <li class="m_2"><a href="<?=base_url("Eleve/blog")?>"><i class="fa fa-users icon_1"></i> Blog <span class="label label-default">4</span></a></li>
                <li class="divider"></li>
                <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
    <form class="navbar-form navbar-right">
        <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Search...';}">
    </form>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Acceuil</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-indent nav_icon"></i>Cours<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                         <li>
                            <?=anchor("eleve/horaire","Journal de classe")?>
                        </li>
                        <li>
                            <?=anchor("eleve/cours","Cours")?>
                        </li>
<!--                        <li>-->
<!--                            <a href="typography.html">Typography</a>-->
<!--                        </li>-->
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope nav_icon"></i>Messageries<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?=anchor("eleve/inbox","Notifications")?>
                        </li>
                        <li>
                            <?=anchor("eleve/compose","Chat Box")?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
<!--                <li>-->
<!--                    <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Widgets</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>-->
<!--                    <ul class="nav nav-second-level">-->
<!--                        <li>-->
<!--                            <a href="forms.html">Basic Forms</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="validation.html">Validation</a>-->
<!--                        </li>-->
<!--                    </ul>-->
                    <!-- /.nav-second-level -->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>-->
<!--                    <ul class="nav nav-second-level">-->
<!--                        <li>-->
<!--                            <a href="basic_tables.html">Basic Tables</a>-->
<!--                        </li>-->
<!--                    </ul>-->
                    <!-- /.nav-second-level -->
<!--                </li>-->
                <li>
                    <a href="#"><i class="fa fa-table nav_icon"></i>Résultat<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
<!--                        <li>-->
<!--                            <a href="media.html">Media</a>-->
<!--                        </li>-->
                        <li>
<!--                            <a href="login.html">Login</a>-->
                            <?=anchor("eleve/login","Résultat")?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>