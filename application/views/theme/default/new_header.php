<?php
    $header_templete                  =   ovoo_config('header_templete');
    $theme_dir                        =   'theme/default/';
    $assets_dir                     =   'assets/theme/default/New/';
    $registration_enable            =   ovoo_config('registration_enable');    
    $frontend_login_enable          =   ovoo_config('frontend_login_enable');    
    $country_to_primary_menu        =   ovoo_config('country_to_primary_menu');    
    $genre_to_primary_menu          =   ovoo_config('genre_to_primary_menu');
    $release_to_primary_menu        =   ovoo_config('release_to_primary_menu');    
    $contact_to_primary_menu        =   ovoo_config('contact_to_primary_menu');
    $privacy_policy_to_primary_menu =   ovoo_config('privacy_policy_to_primary_menu');
    $dmca_to_primary_menu           =   ovoo_config('dmca_to_primary_menu');
    $az_to_primary_menu             =   ovoo_config('az_to_primary_menu');
    $az_to_footer_menu              =   ovoo_config('az_to_footer_menu');
    $movie_request_enable           =   ovoo_config('movie_request_enable');
    $facebook_url                   =   ovoo_config('facebook_url');
    $twitter_url                    =   ovoo_config('twitter_url');
    $business_phone                 =   ovoo_config('business_phone');
    $contact_email                  =   ovoo_config('contact_email');
?>
<style>
#logo-container:hover {
        background: url("<?php echo base_url($assets_dir); ?>img/animated.gif");
    }
</style>

<style>
		.loader,
        .loader:after {
            border-radius: 50%;
            width: 10em;
            height: 10em;
        }
        .loader {            
            margin: 60px auto;
            font-size: 10px;
            position: relative;
            text-indent: -9999em;
            border-top: 1.1em solid rgba(93, 197, 96, 0.2);
            border-right: 1.1em solid rgba(93, 197, 96, 0.2);
            border-bottom: 1.1em solid rgba(93, 197, 96, 0.2);
            border-left: 1.1em solid #0000;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load8 1.1s infinite linear;
            animation: load8 1.1s infinite linear;
			margin-top:20rem;
        }
        @-webkit-keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        #loadingDiv {
		  width: 100%;
          height: 100%;
          position:absolute;
          top: 0;
          left: 0;
          background-color: #000 !important;
          display: block;
          justify-content: center;
          align-items: center;
          z-index: 888;
          overflow: hidden;
		  opacity: 0.9;
        }
</style>



<header>
	<header-top></header-top>
    <nav>
        <div id="nav-bg"></div>
        <div id="menu-bars"><i class="fa fa-bars menu-bars show"></i><i class="fas fa-times menu-close"></i></div>
        <ul id="menu-container">
            <li id="logo-container">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url($assets_dir); ?>img/non-animated.gif" class="non-animated" alt="" style="">
                    <img src="<?php echo base_url($assets_dir); ?>img/animated.gif" class="animated" alt="" style="">
                </a>
            </li>

            <li><a href="<?php echo base_url('home/movies')?>"><?php echo trans('movies'); ?></a></li>
            
            <?php 
                $tv_series_publish          = ovoo_config('tv_series_publish');
                $tv_series_pin_primary_menu = ovoo_config('tv_series_pin_primary_menu');
                if($tv_series_publish =='1' && $tv_series_pin_primary_menu =='1'):
            ?>
                <li><a href="<?php echo base_url('tvseries/home')?>"><?php echo trans('tv_series'); ?></a></li>
            <?php endif; ?>

            <li><a href="<?php echo base_url('live_tv')?>">Live <span>TV</span></a></li>
            <li><a href="<?php echo base_url('latest')?>">New</a></li>
        </ul>
        <div id="search-container">
            <form action="/home/search" id="search-form" name="searchForm">
                <input type="text" placeholder="Search..." name="search" id="search">
            </form>
            <div id="search-icon" onClick="searchIcon()"><i class="fas fa-search"></i></div>
				<div id="user-menu">
					<!-- <img src="<?php //echo base_url($assets_dir); ?>img/221-2217551_computer-user-clip-art.png" style="border-radius: 50%;" alt=""> -->
					<i class="fas fa-user" aria-hidden="true"></i>
					<i class="fas fa-caret-down" id="down_arrow"></i>
				</div>
			
            <div id="user-interface">
                <ul id="user-list">
					<?php if((isset($_SESSION['user_is_login']) && $_SESSION['user_is_login'] == 1)) {?>
						<li><a href="/user/profile"><i class="fas fa-user" aria-hidden="true"></i><span>Account settings</span></a></li>
					<?php } else { ?>
                    <li><a href="/user/login"><i class="fas fa-user" aria-hidden="true"></i><span>Account settings</span></a></li>
					<?php } ?>
                </ul>
                <ul id="config-list">
                    <li><a href="<?php echo base_url('/home/help')?>">Help</a></li>
                    <?php if((isset($_SESSION['user_is_login']) && $_SESSION['user_is_login'] == 1)) {?>
                    <?php if($page_name == 'profile' || (isset($_SESSION['user_is_login']) && $_SESSION['user_is_login'] == 1)):?>
						 <li><a href="<?php echo base_url('/user/logout')?>">Sign Out</a></li>
                    <?php endif; ?>
                    <?php } else { ?>
                    <?php if($page_name == 'new_login'):?>
						<li><a href="<?php echo base_url('/user/registration')?>">Sign Up</a></li>
                    <?php endif; ?>
                    <?php if($page_name == 'forget_password' || $page_name == 'new_password' || $page_name == 'help'):?>
						<li><a href="<?php echo base_url('/user/login')?>">Sign In</a></li>
						<li><a href="<?php echo base_url('/user/registration')?>">Sign Up</a></li>
                    <?php endif; ?>
                     <?php if($page_name == 'signup' || $page_name == 'new_movies' || $page_name == 'tv_series' || $page_name == 'live_tv' || $page_name == 'latest' || $page_name == 'home' || $page_name == 'search_results'):?>
						<li><a href="<?php echo base_url('/user/login')?>">Sign In</a></li>
                    <?php endif; ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script type="text/javascript">
$(document).ready(function(){
   
    $("#user-menu").click(function(){
        $("#user-interface").toggleClass("show");
        if($('#user-interface').hasClass('show')) {
			$("#down_arrow").addClass( "rotate" );
		} else {
			$("#down_arrow").removeClass("rotate");
		}
        
    });

    $("#search-icon").click(function(){
        $("#search-form").toggleClass("show");
    });
    

    $('#logo-container').hover(function () {
        $('.non-animated').fadeOut(0);
        $('.animated').fadeIn(0).attr('src', '<?php echo base_url($assets_dir); ?>img/animated.gif');
    }, function () {
        $('.animated').fadeOut(0);
        $('.non-animated').fadeIn(0);
    });

    /* function userMenu() {
		$("#user-interface").toggleClass("show");
	}

	function searchIcon() {
		$("#search-form").toggleClass("show");
	} */

});
</script>

<script>
	$('header-top').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
$(window).on('load', function(){
  setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
  });  
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
