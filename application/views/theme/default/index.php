<?php    
    $default_meta_description       =   ovoo_config('meta_description');
    $default_focus_keyword          =   ovoo_config('focus_keyword');
    $author                         =   ovoo_config('author');
    $front_end_theme                =   ovoo_config('front_end_theme');
    $theme_dir                      =   'theme/default/';
    $assets_dir                     =   'assets/theme/default/';
    $dark_theme                     =   ovoo_config('dark_theme');
    $google_analytics_id            =   ovoo_config('google_analytics_id');       
    $footer_templete                =   ovoo_config('footer_templete');
    $share_this_enable              =   ovoo_config('social_share_enable');    
    $push_notification_enable       =   ovoo_config('push_notification_enable');
    $site_name                      =   ovoo_config('site_name');
    $recaptcha_enable               =   ovoo_config('recaptcha_enable');  
    $favicon                        =   ovoo_config('favicon');
    $enable_ribbon                  =   ovoo_config('enable_ribbon');
?>
<!DOCTYPE html>
<html lang="en">
<head data-cast-api-enabled="true">
<head>
<meta charset="UTF-8">
<meta name="description" content="<?php if (isset($meta_description)) { echo $meta_description;} else{ echo $default_meta_description;} ?>" />
<meta name="keywords" content="<?php if (isset($focus_keyword)) { echo $focus_keyword;} else{ echo $default_focus_keyword ; } ?>" />
<meta name="author" content="<?php echo $author; ?>" />
<link rel="canonical" href="<?php if(isset($canonical) && !empty($canonical)): echo $canonical; else: echo base_url(); endif; ?>">
<?php if($page_name =='watch' || $page_name == 'watch_tv' || $page_name == 'blog_details'): ?>
<meta property="og:locale" content="en_US" />
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="<?php echo $meta_description; ?>" />
<meta name="twitter:title" content="<?php echo $og_title; ?>" />
<meta property="og:title" content="<?php echo $og_title; ?>" />
<meta property="og:url" content="<?php echo $og_url; ?>" />
<meta property="og:type" content="movie" />
<meta property="og:description" content="<?php echo $meta_description; ?>" />
<meta property="og:image" content="<?php echo $og_image_url; ?>" />
<?php endif; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(isset($title) && !empty($title)): echo $title; else: echo $site_name; endif; ?></title>   
<link rel="shortcut icon" href="<?php echo base_url('uploads/system_logo/').$favicon; ?>">
<script src="https://kit.fontawesome.com/8e45108756.js" crossorigin="anonymous"></script>
<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- custom css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
<link rel="stylesheet" href="<?php echo base_url($assets_dir); ?>css/estilos.css">

<!-- Style Sheets -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/additional.css">
<!-- Font Icons -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/socicon-styles.css">
<!-- Font Icons -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/hover-min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/<?php echo $front_end_theme; ?>.css">
<script src="<?php echo base_url($assets_dir); ?>js/jquery-2.2.4.min.js" crossorigin="anonymous"></script>

<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
   
<!-- slider -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>swiper/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>swiper/css/custom.css">
<?php if($page_name =='update_profile'): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/theme/default/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<?php endif; ?>



<?php if($page_name=='watch' || $page_name=='watch_tv'): ?>
<link href="<?php echo base_url(); ?>assets/player/video-js-6.13.0/video-js.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/player/plugins/videojs-mobile-ui/videojs-mobile-ui.css" rel="stylesheet" type="text/css">
<!-- tube skin CSS -->
<!-- <link href="<?php echo base_url(); ?>assets/player/plugins/tube-skin/videojs-tube.min.css" media="only screen and (min-width: 820px)" rel="stylesheet"/> -->
<script src="<?php echo base_url(); ?>assets/player/video-js-6.13.0/video.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/player/plugins/videojs-mobile-ui/videojs-mobile-ui.min.js"></script>
<!-- watermark CSS -->
<link href="<?php echo base_url(); ?>assets/player/plugins/watermark/videojs-logo.min.css" rel="stylesheet">
<!-- social share CSS -->
<link href="<?php echo base_url(); ?>assets/player/plugins/videojs-share/videojs-share.css" rel="stylesheet">
<!-- social share CSS -->
<link href="<?php echo base_url(); ?>assets/player/plugins/videojs-seek-buttons/videojs-seek-buttons.css" rel="stylesheet">

<!-- videojs-chromecast js -->
<script src="<?php echo base_url(); ?>assets/player/plugins/silvermine-videojs-chromecast/silvermine-videojs-chromecast.min.js"></script>
<!-- videojs-chromecast CSS -->
<link href="<?php echo base_url(); ?>assets/player/plugins/silvermine-videojs-chromecast/silvermine-videojs-chromecast.css" rel="stylesheet">
<!-- chromecast sdk -->
<script type="text/javascript" src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>

<?php if($page_name=='watch'): ?>
    <!-- magnific popup -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/magnific-popup/dist/magnific-popup.css">
<?php endif; ?>

<?php endif; ?> 
<?php if($page_name=='home' || $page_name=='live_tv' || $page_name=='watch_tv' || $page_name=='watch' || $page_name=='movies' || $page_name=='tv_series'): ?>
<!-- owlcarousel -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/owl-custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/owl.theme.default.min.css">
<script src="<?php echo base_url($assets_dir); ?>js/owl.carousel.js"></script>
<!-- owlcarousel -->

<!-- HLS Video -->
<script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
<script src="https://vjs.zencdn.net/7.2.3/video.js"></script>

<script>
var player = videojs('hls-example');
player.play();
</script>

<!-- End -->
<?php endif ?>

<?php if($recaptcha_enable == '1'): ?>
    <!-- reCAPTCHA JavaScript API -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
<?php endif; ?>

<!-- typehead search  -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/auto-complete.css">
<?php if($this->language_model->get_rtl_status()): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/rtl.css">
<?php endif; ?>
<!-- typehead search  -->
<?php if($dark_theme=='1'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/dark.css">
<?php endif; ?>
<style type="text/css">
<?php if($front_end_theme =='blue'): ?>    
        :root {
            --swiper-theme-color: #0088cc;
            --primary-color:#0088cc;
            --secenday-color:#0088c0;
          }
<?php elseif($front_end_theme =='green'): ?>
    :root {
        --swiper-theme-color: #5DC560;
        --primary-color:#5DC560;
        --secenday-color:#5DC569;
      }
<?php elseif($front_end_theme =='red'): ?>
    :root {
        --swiper-theme-color: #03ad71;
        --primary-color:#03ad71;
        --secenday-color:#ff0009;
      }
<?php elseif($front_end_theme =='yellow'): ?>
    :root {
        --swiper-theme-color: #FDD922;
        --primary-color:#FDD922;
        --secenday-color:#FDD929;
      }
<?php elseif($front_end_theme =='purple'): ?>
    :root {
        --swiper-theme-color: #6d0eb1;
        --primary-color:#6d0eb1;
        --secenday-color:#6d0eb9;
      }
<?php else: ?>
    :root {
        --swiper-theme-color: #FDD922;
        --primary-color:#FDD922;
        --secenday-color:#0088c0;
      }
<?php endif; ?>
    .owl-carousel .owl-next,.owl-carousel .owl-prev {
        background-color: var(--primary-color);
    }
    a{
        color:var(--primary-color);
    }
    a:hover{
       color:var(--secenday-color); 
    }
    .vjs-chromecast-button .vjs-icon-placeholder {
        width: 18px;
        height: 18px;
    }
</style>
<style type="text/css">
    
.ribbon {
	<?php if($enable_ribbon == '0'): ?>
		display: none;
	<?php endif; ?>
	width: 110px;
	height: 80px;
	overflow: hidden;
	position: absolute;
	background: url(<?php echo base_url($assets_dir); ?>images/lock.png);
	background-repeat: no-repeat;
	overflow: hidden;
}
.ribbon-top-right {
  bottom: 0px;
  left: 0px;
}
.tv-ribbon{
	<?php if($enable_ribbon == '0'): ?>
		display: none;
	<?php endif; ?>
	top: 10px;
	left: 5px;
	position: absolute;
	z-index: 6;
	padding: 2px 11px;
	background-color: #ffe22e;
	color: #383737;
	border-top-right-radius: 5px;
	border-bottom-right-radius: 5px;
	font-size: 14px;
	font-weight: bold;
}

#sliders-container::after{
display: block;
content: "";
width: 100%;
height: 200px;
background-image: url(<?php echo base_url() ?>/uploads/131313.png);
background-size: 216vw;
background-position: center;
background-repeat: no-repeat;
position: absolute;
bottom: 0;
left: -18px;
transform: translateY(50%);
filter: blur(8px);
margin-left: 17px;
}

</style>
<?php if($page_name =='price_plan'): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url($assets_dir); ?>css/price_plan.css">
<?php endif; ?>

</head>
    <body>
        <div id="wrapper">
            <div id="main-content">  	      
            <?php
                $this->load->view($theme_dir .'header');            
                if ($page_name == 'home')
                    $this->load->view($theme_dir .'slider');
                if ($page_name == 'home'): ?>
                <!-- background video start -->
					<main>
						<div id="sliders-container">
							<div id="sliders">
								<div class="carousel-content vid-carousel">
									<!-- dynamic video loading -->
									<?php 
										$video_url = array();
										$this->db->select('vf.videos_id,vh.is_tvseries')
											 ->from('video_file_home vf')
											 ->join('videos_home vh', 'vh.videos_id = vf.videos_id')
											 ->where('vf.file_source','mp4');
										$allVideosquery = $this->db->get();
										$allVideos = $allVideosquery->result_array();
										foreach ($allVideos as $videos) {
											$this->db->where('videos_id', $videos['videos_id']);
											$file_url = $this->db->get('video_file_home')->result_array();
											if($file_url && $file_url[0]['file_url'] != '') {
												array_push($video_url,$file_url[0]['file_url']);
											}
										}
										$chosen_one = $video_url[array_rand($video_url)];
										$this->db->select('vf.videos_id,vh.title,vh.slug,vh.release,vh.focus_keyword,vh.meta_description,vh.button1_name,vh.button2_name,vh.button1_link,vh.button2_link')
											 ->from('video_file_home vf')
											 ->join('videos_home vh', 'vh.videos_id = vf.videos_id')
											 ->where('vf.file_url',$chosen_one)
											 ->where('vf.file_source','mp4');
										$query = $this->db->get();
										$result = $query->result_array();
										
										if($videos['is_tvseries'] == 0) {
											$video_file    = $this->common_model->get_first_video_details_videos_id_home($result[0]['videos_id']);
											$file_url      = $video_file->file_url;
										} else {
											$video_file   = $this->common_model->get_first_episode_details_videos_id($result[0]['videos_id']);
											$file_url     = $video_file->file_url;
										}
									?>
									
									<input type="hidden" id="video_url_<?php echo $result[0]['videos_id']; ?>" name="video_url" value="<?php echo base_url('watch/'.$result[0]['slug']).'.html';?>">
									<input type="hidden" name="title" id="title_<?php echo $result[0]['videos_id']; ?>" value="<?php echo $result[0]['title']; ?>">
									<input type="hidden" name="release" id="release_<?php echo $result[0]['videos_id']; ?>" value="<?php echo $result[0]['release']; ?>">
									<input type="hidden" name="keyword" id="keyword_<?php echo $result[0]['videos_id']; ?>" value="<?php echo $result[0]['focus_keyword']; ?>">
									<input type="hidden" name="description" id="description_<?php echo $result[0]['videos_id']; ?>" value="<?php echo $result[0]['meta_description']; ?>">
									<input type="hidden" name="main_video" id="main_video_<?php echo $result[0]['videos_id']; ?>" value="<?php echo $file_url; ?>">
									
									<video src="<?php echo $chosen_one; ?>" loop autoplay="autoplay" muted style="margin-top: -50px;" poster="<?php echo base_url(); ?>uploads/system_logo/<?php echo $favicon; ?>"></video>
									<div id="carousel-vid-buttons" style="z-index:900">
										<?php 
											if($result[0]['button1_link'] != '') {
												$btn1_link = $result[0]['button1_link'];
											} else {
												$btn1_link = 'javascript:void(0);';
											}
											if($result[0]['button2_link'] != '') {
												$btn2_link = $result[0]['button2_link'];
											} else {
												$btn2_link = base_url().'/user/login';
											}
										?>
										<img src="<?php echo base_url(); ?>assets/theme/default/images/w-logo-v.png" alt="" style="width: 300px;">
										<h3><?php echo $result[0]['title'];?></h3>
										<a  href="<?php echo $btn1_link; ?>" style="text-decoration:none;"><p><?php echo $result[0]['button1_name'];?><i class="fa fa-play-circle"></i></p></a>
										<a  href="<?php echo $btn2_link; ?>" style="text-decoration:none;"><p class="home-video1" id="<?php echo $result[0]['videos_id'];?>" style="margin: 0px; !important"><?php echo $result[0]['button2_name'];?><i class="fa fa-info-circle"></i></p></a>
									</div>
									
									<!-- end of dynamic video -->
								</div>
							</div>
						</div>
					</main>
					<!-- <img src="<?php echo base_url(); ?>uploads/system_logo/<?php echo ovoo_config('favicon'); ?>" style="width: 45%;margin-top: -546px;margin-right: 30%;" alt="logo" id="logo"> -->
					<!-- background video end -->
                    <div class="container">
                        <?php  if($share_this_enable =='1'):?>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox_yl99 m-t-30 m-b-10" data-url="<?php echo base_url();?>" data-title="<?php if($page_name=='watch'){ echo $watch_videos->title;}else{ echo $title; } ?>"></div>
                        <!-- Addthis Social tool -->
                    <?php endif; ?>
                    </div>
            <?php endif; ?> 

            <?php
                $this->load->view($theme_dir.$page_name);
                $this->load->view($theme_dir.'footer/'.$footer_templete);
                $this->load->view($theme_dir.'movie_request');             
            ?>
        </div>
    </div>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <!-- lazy image loading -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.plugins.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.lazy').lazy({
                effect: "fadeIn",
                effectTime: 1000
            });
        });
       
       $(".home-video").unbind().on("click",function(){
        $("#p-cont-bg").css("display","block");
        $("#p-cont-bg").toggleClass("show");
        var id = $(this).attr('id');
		var video_url = $("#video_url_"+id).val();
		var bg_video = $("#main_video_"+id).val();
        var title = $("#title_"+id).val();
        var release = $("#release_"+id).val();
        var keyword = $("#keyword_"+id).val();
        var description = $("#description_"+id).val();
        

      

        $("body").addClass("overflow");
        $("#videoPlay").attr("href", video_url);
        $(".op-down h2").text(title);
        $("#release_year").text(release);
        $("#keywords").text(keyword);
        $("#p-description").text(description);
        $("#bg_video").attr('src', bg_video);
        $("#video_id").val(id);
        if($(this).attr('data-wl') > 0) {
			$('#wl_added').show();
			$('#wl_added_n').hide();
		} else {
			$('#wl_added').hide();
			$('#wl_added_n').show();
		}
		if($(this).attr('data-fav') > 0) {
			$('#fav_added').show();
			$('#fav_added_n').hide();
		} else {
			$('#fav_added').hide();
			$('#fav_added_n').show();
		}
        
    });
    </script>









    <!-- end lazy image loading -->
    <!--sweet alert2 JS -->
    <link href="<?php echo base_url(); ?>assets/plugins/swal2/sweetalert2.min.css" rel="stylesheet">
    <!-- END sweet alert2 JS -->
    <!-- Scripts -->    
    <script src="<?php echo base_url($assets_dir); ?>js/ovoo.js"></script>    
    <script src="<?php echo base_url($assets_dir); ?>js/bootstrap.min.js"></script>
    
    <?php if($google_analytics_id !='' && $google_analytics_id !=NULL && !empty($google_analytics_id)): ?>
        <!-- Google analytics -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', '<?php echo $google_analytics_id; ?>', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- END Google analytics -->
    <?php endif; ?>

    <?php  if($share_this_enable =='1'):?>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58d74b9dcfd76af7"></script>
    <?php endif; ?>
    <!--sweet alert2 JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/swal2/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function() {
            var success_message = '<?php echo $this->session->flashdata('success'); ?>';
            var error_message = '<?php echo $this->session->flashdata('error'); ?>';
            if (success_message != '') {
                swal('Success!',success_message,'info');
            }
            if (error_message != '') {
              //  swal('Error!',error_message,'error');
               // alert("error");
            }
        });
    </script>
    <?php
        if($push_notification_enable == '1'):
        $onesignal_appid                    =   ovoo_config('onesignal_appid');    
        $onesignal_actionmessage            =   ovoo_config('onesignal_actionmessage');    
        $onesignal_acceptbuttontext         =   ovoo_config('onesignal_acceptbuttontext');    
        $onesignal_cancelbuttontext         =   ovoo_config('onesignal_cancelbuttontext');    
     ?>
    <!-- oneSignal -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(["init", {
            appId: "<?php echo $onesignal_appid; ?>",
            subdomainName: 'push',
            autoRegister: false,
            promptOptions: {
                /* These prompt options values configure both the HTTP prompt and the HTTP popup. */
                /* actionMessage limited to 90 characters */
                actionMessage: "<?php echo $onesignal_actionmessage;?>",
                /* acceptButtonText limited to 15 characters */
                acceptButtonText: "<?php echo $onesignal_acceptbuttontext;?>",
                /* cancelButtonText limited to 15 characters */
                cancelButtonText: "<?php echo $onesignal_cancelbuttontext;?>"
            }
        }]);
    </script>
    <script>
       
        var error_message = '<?php echo $this->session->flashdata('error'); ?>';
     
        if(error_message.length==0){
            var player2 = videojs("content_video");
            player2.play();
			 }
        function subscribe() {
            // OneSignal.push(["registerForPushNotifications"]);
            OneSignal.push(["registerForPushNotifications"]);
            event.preventDefault();
        }
        function unsubscribe(){
            OneSignal.setSubscription(true);
        }

        var OneSignal = OneSignal || [];
        OneSignal.push(function() {
            /* These examples are all valid */
            // Occurs when the user's subscription changes to a new value.
            OneSignal.on('subscriptionChange', function (isSubscribed) {
                console.log("The user's subscription state is now:", isSubscribed);
                OneSignal.sendTag("user_id","4444", function(tagsSent)
                {
                    // Callback called when tags have finished sending
                    console.log("Tags have finished sending!");
                });
            });

            var isPushSupported = OneSignal.isPushNotificationsSupported();
            if (isPushSupported)
            {
                // Push notifications are supported
                OneSignal.isPushNotificationsEnabled().then(function(isEnabled)
                {
                    if (isEnabled)
                    {
                        console.log("Push notifications are enabled!");

                    } else {
                        OneSignal.showHttpPrompt();
                        console.log("Push notifications are not enabled yet.");
                    }
                });

            } else {
                console.log("Push notifications are not supported.");
            }
        });
    </script>
<?php endif; ?>
<?php if($page_name=='watch'): ?>
    <!-- magnific popup -->
    <script src="<?php echo base_url(); ?>assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.popup-youtube').magnificPopup({
            type: 'iframe'
          });
        });
    </script>
<?php endif; ?>
</body>
</html>
