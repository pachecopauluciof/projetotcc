
<!DOCTYPE html>
<html lang="en" class="h-100">

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

<body class="h-100">
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-5">
                    <div class="form-input-content">
                        <div class="card card-login">
                            <div class="card-header">
                                <div class="position-relative  text-center w-100">
                                    <div class="brand-logo">
                                        <a href="login">
                                             <img src="<?php echo base_url(); ?>public/images/logo_login.png"> 
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" id="login_form">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control rounded-0 bg-transparent" name="usuario" id="username" placeholder="Usuario">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control rounded-0 bg-transparent" name="senha" id="senha" placeholder="Senha">
                                    </div>
                                    <div class="form-group ml-3 mb-5">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="label-checkbox ml-2 mb-0" for="checkbox1">Lembrar da senha</label>
                                    </div>
                                    <button class="btn btn-primary btn-block border-0" id="btn_login" type="submit">Login</button>
                                    <span class="help-block"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>public/plugins/common/common.min.js"></script> 
    <script src="<?php echo base_url(); ?>public/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/settings.js"></script>
    <script src="<?php echo base_url(); ?>public/js/quixnav.js"></script>


    <?php if(isset($scripts)){
                    foreach($scripts as $scripts_name){
                        $href = base_url() . "public/". $scripts_name;
                        
                        echo '<script src="'.$href .'"></script>';
                    }
    }

    ?>
</body>

</html>