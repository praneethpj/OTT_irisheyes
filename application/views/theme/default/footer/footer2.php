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
    $site_name                  =   $this->db->get_where('config' , array('title'=>'site_name'))->row()->value;
    $about_us_enable            =   $this->db->get_where('config' , array('title'=>'about_us_enable'))->row()->value;
    $about_us_to_footer_menu    =   $this->db->get_where('config' , array('title'=>'about_us_to_footer_menu'))->row()->value;
    $about_us_text              =   $this->db->get_where('config' , array('title'=>'about_us_text'))->row()->value;
    $contact_to_footer_menu     =   $this->db->get_where('config' , array('title' =>'contact_to_footer_menu'))->row()->value; 
    $tv_series_pin_footer_menu  =   $this->db->get_where('config' , array('title' =>'tv_series_pin_footer_menu'))->row()->value; 
    $live_tv_pin_footer_menu    =   $this->db->get_where('config' , array('title' =>'live_tv_pin_footer_menu'))->row()->value;
    $privacy_policy_to_footer_menu  =   $this->db->get_where('config' , array('title'=>'privacy_policy_to_footer_menu'))->row()->value;
    $dmca_to_footer_menu            =   $this->db->get_where('config' , array('title'=>'dmca_to_footer_menu'))->row()->value;
    $theme_dir                  =   'theme/default/';
    $assets_dir                 =   'assets/theme/default/';
?>

<style>
		.text-center>p>a{
			color:white;
		}
		.links-nav>p>a:hover{
			color:red !important;
		}

 	</style>

<footer id="site-content-footer" style="padding-bottom: 30px;background-color: #080808;">
</br>
	<span class="text-center" style="color: white;">
		<h1>Available on your favourite devices</h1>
	</span>
	<main>
		<div class="container-fluid">
			<div id="section-opt">
				<div class="container">
					<div class="row">
						<div style="text-align: center;" class="col-sm-3">
							<div class="device" id="tv">
								<div class="device-cont">
									<img src="<?php echo base_url(); ?>/uploads/system_logo/1-01.svg" style="height:100px" width="150"
										alt="">
								</div>
								<div style="color: white;">
									<h3>TV</h3>

									<p>Amazon Fire TV</p>
									<p>Android TV devices</p>
									<p>Apple TV</p>
									<p>Chromecast</p>
									<p>LG TVs</p>
									<p>Roku</p>
									<p>Samsung</p>
									<p>Sky Q</p>
								</div>
							</div>
						</div>
						<div style="text-align: center;" class="col-sm-3">
							<div class="device" id="computer">
								<div class="device-cont">
									<img src="<?php echo base_url(); ?>/uploads/system_logo/2-02.svg" style="height:100px" width="150"
										alt="computer image">
								</div>
								<div style="color: white;">
									<h3>Computer</h3>

									<p>Chrome OS</p>
									<p>MacOS</p>
									<p>Windows PC</p>
								</div>
							</div>
						</div>
						<div style="text-align: center;" class="col-sm-3">
							<div class="device" id="mobile">
								<div class="device-cont">
									<img src="<?php echo base_url(); ?>/uploads/system_logo/3-03.svg" style="height:100px" width="150" >
								</div>
								<div style="color: white;">
									<h3 style="text-align: center;">Mobile &amp; Tablet</h3>
									<p> Amazon Fire Tablets</p>
									<p> Android Phones &amp; Tablets</p>
									<p> iPhone &amp; iPad</p>
								</div>
							</div>
						</div>
						<div style="text-align: center;" class="col-sm-3">
							<div class="device" id="consoles">
								<div class="device-cont">
									<img src="<?php echo base_url(); ?>/uploads/system_logo/4-04.svg" style="height:100px" width="150"
										alt="">
								</div>
								<div style="color: white;">
									<h3>Game Consoles</h3>
									<p>PS4</p>
									<p>PS5</p>
									<p>Xbox One</p>
									<p>Xbox Series X</p>
									<p>Xbox Series S</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
		<div id="social-media" class="text-center" style="padding: 3px;color:white;">
			<?php if($facebook_url !=''): ?>                    
			<a href="<?php echo $facebook_url; ?>" target="_blank" ><i class="fa fa-instagram fa-lg" style="color:white;" aria-hidden="true"></i></a>
			<?php endif; if($twitter_url !=''): ?>
			<a href="<?php echo $twitter_url; ?>" target="_blank"><i class="fa fa-twitter fa-lg" style="color:white" aria-hidden="true"></i></a>
			<?php endif; if($linkedin_url !=''): ?> 
			<a href="<?php echo $linkedin_url; ?>" target="_blank"><i class="fa fa-linkedin fa-lg" style="color:white" aria-hidden="true"></i></a>
			<?php endif; ?>
		</div>
		<div id="quick-links" class="text-center links-nav" style="margin-bottom: 3px;padding: 3px;">
			<?php echo $footer2_content; ?>
		</div>
		<div id="copyright1" style="text-align: center;color: white;font-size: 0.9em;">© All Rights Reserved by 
			<span class="green-text">
				<a style="color: #03ad71;font-size: 1.05em;" href="<?php echo base_url(); ?>" target="_blank">Ayozat</a>
			</span>
		</div>
	</footer>


		
