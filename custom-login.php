<?php
    /**
     * Template Name: Login Page
     *
     *
     */
    global $user_ID;
     global $wpdb;

     if (!$user_ID){

        if($_POST){

        $username = $wpdb -> escape($_POST['username']);
        $password = $wpdb -> escape($_POST['password']);
        //$rememberme = $wpdb -> escape($_POST['rememberme']);

       // if($rememberme) $rememberme = "true";
       // else $remember = "false";

         $Login_array = array();
         $Login_array['user_login'] = $username;
         $Login_array['user_password'] = $password;
        // $login_array['rememberme'] = $remember;

         $verify_user = wp_signon($Login_array, true);
          if(!is_wp_error($verify_user)){
              echo "<script>window.location = '".site_url('/membership-only')."'</script>";
         }else{
               
                 echo "<script>";
                 echo " alert('Invalid Credentials! , try again!');      
                    window.location.href='".site_url('login')."';
            </script>";
               
                
         }

        }else{

            get_header();?>

            <h3 class="pippin_header" style="color:#fff;"><?php _e('Login'); ?></h3>



		 
            <div class="info" style=""></div>
            <div class="form" style="">
            <form id="wp_login_form" action="" method="post" style="width:400px; margin-bottom:200px; margin-top:100px;">
            <label for="tab-1" class="tab" style="text-align:center;">Member Log In</label><br>

            <label class="username" >Username</label><br>
            <input type="text" name="username" id="username" class="text" value=""><br>
            <label class="password" style="color:#fff;" >Password</label><br>

            <input type="password" name="password" id="password"class="text" value="" > <br>
            <label>
           <input class="myremember" name="rememberme" id="rememberme" type="checkbox" value="forever"><span class="hey">Remember me</span></label>
            
            <span class="hey"><a style="color:#fff; padding-left:7px;" href="https://nnngo.org/wp-login.php?action=lostpassword">Forgot Password?</a></span>
            
            <br><br>
            
            <input type="submit" id="submitbtn" name="submit" value="Login" style="float:right; margin-top:-40px; margin-right:23px;">

            </form>
            </div>

     <?php
     get_footer();


        }

      }else{

     }

?>
