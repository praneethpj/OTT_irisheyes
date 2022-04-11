<?php   
    $facebook_url               =   $this->db->get_where('config' , array('title'=>'facebook_url'))->row()->value;
    $twitter_url                =   $this->db->get_where('config' , array('title'=>'twitter_url'))->row()->value;
    $vimeo_url                  =   $this->db->get_where('config' , array('title'=>'vimeo_url'))->row()->value;
    $linkedin_url               =   $this->db->get_where('config' , array('title'=>'linkedin_url'))->row()->value;
    $youtube_url                =   $this->db->get_where('config' , array('title'=>'youtube_url'))->row()->value;
    $footer1_title              =   $this->db->get_where('config' , array('title'=>'footer1_title'))->row()->value;
    $footer1_content            =   $this->db->get_where('config' , array('title'=>'footer1_content'))->row()->value;
    $footer2_title              =   $this->db->get_where('config' , array('title'=>'footer2_title'))->row()->value;
    $footer2_content            =   $this->db->get_where('config' , array('title'=>'footer2_content'))->row()->value;
    $footer3_title              =   $this->db->get_where('config' , array('title'=>'footer3_title'))->row()->value;
    $footer3_content            =   $this->db->get_where('config' , array('title'=>'footer3_content'))->row()->value;
    $footer_text                =   $this->db->get_where('config' , array('title'=>'copyright_text'))->row()->value;
    $privacy_policy_to_footer_menu  =   $this->db->get_where('config' , array('title'=>'privacy_policy_to_footer_menu'))->row()->value;
    $assets_dir                 =   'assets/theme/default/';
?>
<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@100;200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">


<?php if ($page_name != 'watch') : ?>
<?php if($page_name != 'cookies' && $page_name != 'privacy-policy' && $page_name != 'terms-and-conditions' && $page_name != 'live_tv_player' && $page_name != 'search_results') {?>
<div id="subscribe" class="site-content-subscribe">
    <div id="subscribe-content">
        <div id="sub-title">
            <!-- <span id="envelope"><i class="far fa-envelope"></i></span> -->
            <span id="envelope">
				<i class="fa-regular fa-message" style="font-size: 16px;margin-top: -10px;border-radius: 9px;"></i>
				<i class="fa fa-hashtag" style="margin-top: -25px;font-size: 9px;"></i>
            </span>
			<h1><span>GET</span>
           <span class="span-irish-text">IRISH EYES</span><span>EMAIL</span><span> UPDATES</span></h1>
        </div>
        <div id="subscribe-form">
            <form class="custom-form" id="signup-form" method="POST" action="<?php echo base_url().'user/subscribeMovies/'.$page_name; ?>">
                <div id="form-email">
                    <label for="email">First Name</label><br>
                    <input type="text" id="first_name" name="first_name" required="" style="background-color: white;">
                </div>
                <div id="form-email">
                    <label for="email">Last Name</label><br>
                    <input type="text" id="last_name" name="last_name" required="" style="background-color: white;">
                </div>
                <div id="form-email">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" required="" style="background-color: white;">
                </div>
                <div id="form-email">
                    <label for="birthday">Birthday</label><br>
                    <input type="date" id="birthday" name="birthday" required="" style="background-color: white;">
                </div>
                <div id="form-terms">
                    <input type="checkbox" id="checkbox" name="check" required=""> 
                    <label for="email" style="margin-top: 1px;font-size: 1.15em;">I have read and agree to the Terms of Use and Privacy Policy. I agree to receive updates, alerts and promotions from  <span class="green-text" style="color:#5DC560">Irish Eyes.</span>
                    
                    </label>
                </div>
            </form>

            <a href="javascript:void(0);" id="signup" onClick="saveSubscribe()">Sign up</a>

        </div>
    </div>
</div>
<?php } ?>
<footer>
	<?php if($page_name != 'cookies' && $page_name != 'privacy-policy' && $page_name != 'terms-and-conditions' && $page_name != 'live_tv_player' && $page_name != 'search_results' && $page_name != 'list_genre' && $page_name != 'genre') {?>
    <div id="devices">
        <h1>Available devices</h1>
        <div id="devices-list">
            <div class="device" id="tv">
                <div class="footer-img-box mt-5">
                    <img src="<?php echo base_url($assets_dir); ?>images/app_store.png" class="img-fluid" alt="">
                </div>
            </div>
			
            <div class="device" id="computer">
                <div class="device-cont">
                    <img class="img-fluid" src="<?php echo base_url($assets_dir); ?>images/computer.png" alt="">
                </div>
                <div class="device-list">
					<h3>Computer</h3>
					<ul style="list-style: none;">
						<li>Chrome OS</li>
						<li>MacOS</li>
						<li>Windows PC</li>
					</ul>
				</div>
				<div class="device-list">
					<h3>Mobile &amp; Tablet</h3>
					<ul style="list-style: none;">
						<li>Amazon Fire Tablets</li>
						<li>Android Phones &amp; Tablets</li>
						<li>iPhone &amp; iPad</li>
					</ul>
				</div>
			</div>

			<div class="device" id="computer">
                <div class="device-cont">
                    <img class="img-fluid" style="height:170px" src="<?php echo base_url($assets_dir); ?>images/game_console.png" alt="">
                </div>
                <div class="device-list">
					<h3>TV</h3>
					<ul style="list-style: none;">
						<li>Amazon Fire TV</li>
						<li>Android TV devices</li>
						<li>Apple TV</li>
						<li>Chromecast</li>
						<li>LG TVs</li>
						<li>Roku</li>
						<li>Samsung</li>
						<li>Sky Q</li>
					</ul>
				</div>
				<div class="device-list">
					<h3>Game Consoles</h3>
					<ul style="list-style: none;">
						<li>PS4</li>
						<li>PS5</li>
						<li>Xbox One</li>
						<li>Xbox Series X</li>
						<li>Xbox Series S</li>
					</ul>
				</div>
			</div>
           
        </div>
        <?php } ?>
        <footer id="site-content-footer" style="padding-bottom: 30px;" >
			<div id="social-media">
				<?php if($facebook_url !=''): ?>                    
				<a href="<?php echo $facebook_url; ?>" target="_blank" ><i class="fa fa-instagram fa-lg" style="color:white;" aria-hidden="true"></i></a>
				<?php endif; if($twitter_url !=''): ?>
				<a href="<?php echo $twitter_url; ?>" target="_blank"><i class="fa fa-twitter fa-lg" style="color:white" aria-hidden="true"></i></a>
				<?php endif; if($linkedin_url !=''): ?> 
				<a href="<?php echo $linkedin_url; ?>" target="_blank"><i class="fa fa-linkedin fa-lg" style="color:white" aria-hidden="true"></i></a>
				<?php endif; ?>
			</div>
			<div id="quick-links" style="margin-bottom: 3px;">
				<a href="/home/terms">Terms &amp; Conditions</a> <span>|</span>
				<a href="/home/policy">Privacy Policy</a> <span>|</span>
				<a href="/home/cookies">Cookies</a> <span>|</span>
				<a href="/home/help">Help</a> <span>|</span>
				<a href="mailto:info@irisheyes.tv">Contact Us</a> <span>|</span>
				<!-- <a href="<?php //echo base_url(); ?>">About Us</a> -->
			</div>
			<div id="new_copyright" style="text-align: center;">© All Rights Reserved by 
				<span class="green-text">
					<a href="<?php echo base_url(); ?>" target="_blank">IrishEyes.tv</a>
				</span>
			</div>
		</footer>
    </div>
</footer>
<?php endif; ?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
	function saveSubscribe() {
		var email = $('#email').val();
		var dob = $('#birthday').val();
		var first_name = $('#first_name').val();
		var last_name = $('#last_name').val();
		var chk = $('#checkbox').is(':checked');
		//alert(chk);
		if(email && dob && first_name && last_name && chk) {
			// alert('123');return false;
			$('#signup-form').submit();
		} else {
			alert('Please enter all fields');
		}
	}
</script>
