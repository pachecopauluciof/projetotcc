 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $title_pag; ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">

            <?php if(isset($estilos)){
                    foreach($estilos as $estilo_name){
                        $href = base_url() . "public/". $estilo_name;
                        
                        echo '<link href="'.$href .'" rel="stylesheet">';
                    }
            }

            ?>

</head>

<body>


    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr">GB</b>

                    <img class="brand-title" src="<?php echo base_url(); ?>public/images/logo.png">
                </a>
            </div>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="header-right">

                    <ul class="clearfix">
                        <li class="icons d-none d-md-flex">
                            <a href="javascript:void(0)" class="window_fullscreen-x">
                                <i class="icon-frame"></i>
                            </a>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)" class="">
                                <i class="icon-envelope"></i>
                                <span class="badge badge-danger">3</span>
                            </a>
                            <div class="drop-down animated flipInX">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="<?php echo base_url(); ?>public/images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-text">Hey, What's up! You have a good news !!!</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="<?php echo base_url(); ?>public/images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="<?php echo base_url(); ?>public/images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-text">Hey!</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="<?php echo base_url(); ?>public/images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-text">And what do you do?</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="d-flex justify-content-center bg-primary px-4 text-white" href="email-inbox.html">
                                        <span>See all messagese </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)" class="">
                                <i class="icon-bell"></i>
                                <span class="badge badge-primary">3</span>
                            </a>
                            <div class="drop-down animated flipInX dropdown-notfication">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="d-flex justify-content-between bg-primary px-4 text-white" href="javascript:void()">
                                        <span>All Notifications</span>
                                        <span><i class="icon-settings"></i></span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <div class="user-img c-pointer-x">
                                <span class="activity active"></span>
                                <img src="<?php echo base_url(); ?>public/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated flipInX">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()"><i class="icon-user"></i> <span>My Profile</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-calender"></i> <span>My Calender</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-envelope-open"></i> <span>My Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-paper-plane"></i> <span>My Tasks</span><div class="badge badge-pill bg-dark">3</div></a>
                                        </li>
                                        
                                        <li><a href="javascript:void()"><i class="icon-check"></i> <span>Online</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Menu</li>
                  
                    
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-speedometer"></i><span class="nav-text">Gerenciamento</span></a>
                        <ul aria-expanded="false">
                            <li><a href="mesas">Funcionarios</a></li>
                            <li><a href="#">Usuarios</a></li>
                            <li><a href="#">#</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-speedometer"></i><span class="nav-text">Cardapio</span></a>
                        <ul aria-expanded="false">
                            <li><a href="#">Adicionar categoria</a></li>
                            <li><a href="#">Adicionar novo item</a></li>
                            <li><a href="#">Promoção</a></li>
                            <li><a href="#">Cupom</a></li>
                        </ul>
                    </li>

                     <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-speedometer"></i><span class="nav-text">Estoque</span></a>
                        <ul aria-expanded="false">
                            <li><a href="#">Novo produto</a></li>
                            <li><a href="#">Administrar estoque</a></li>
                        </ul>
                    </li>


                     <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-speedometer"></i><span class="nav-text">Biometria</span></a>
                        <ul aria-expanded="false">
                            <li><a href="#">Gerenciar</a></li>
                        </ul>
                    </li>
                   

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
