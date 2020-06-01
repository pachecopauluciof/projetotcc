     <!--**********************************
        Scripts
    ***********************************-->
     <script src="<?php echo base_url(); ?>public/plugins/common/common.min.js"></script> 
    <script src="<?php echo base_url(); ?>public/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/settings.js"></script>
    <script src="<?php echo base_url(); ?>public/js/quixnav.js"></script>
  <script src="<?php echo base_url(); ?>public/js/styleSwitcher.js"></script> 


              <?php if(isset($scripts)){
                    foreach($scripts as $scripts_name){
                        $href = base_url() . "public/". $scripts_name;
                        
                        echo '<script src="'.$href .'"></script>';
                    }
            }

            ?>
    

</body>

</html>