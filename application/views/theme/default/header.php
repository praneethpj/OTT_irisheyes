<?php
	$header_templete                  =   ovoo_config('header_templete');
	$theme_dir                        =   'theme/default/';
    $assets_dir                     =   'assets/theme/default/';
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
<style type="text/css">
    #myFooter {
    background-color: #232323;
    }
    #myFooter .footer-copyright {
        background-color: #151414;
    }
		input[type="text"]::placeholder {
			color: white;
		}
</style>
<?php if($header_templete == 'header1'): ?>
	<nav class="navbar navbar-default navbar-static-top">
	    <div class="container">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="<?php echo base_url(); ?>">
						<img src="<?php echo base_url(); ?>uploads/system_logo/<?php echo ovoo_config('logo'); ?>" alt="logo">
		        </a>
		     </div>
	      	<div class="collapse navbar-collapse" id="navbar1">
	      		<?php $this->load->view($theme_dir.'left_menu_item'); ?>        
		      
		      	<?php $this->load->view($theme_dir.'right_menu_item'); ?> 
									
	    	</div>
	    </div>
	 </nav>
<?php elseif($header_templete == 'header2'): ?>
  <!-- Main Bar-->
  <div id="primary-bar">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-12 col-xs-12 border-right">
                  <div class="logo">
                      <a href="<?php echo base_url(); ?>"> <img class="img-responsive" src="<?php echo base_url(); ?>uploads/system_logo/<?php echo ovoo_config('logo'); ?>?<?php  echo time();?>" alt="Logo" > </a>
                  </div>
              </div>
              <div class="col-md-4 m-t-10">
              </div>
              <div class="col-md-2 col-sm-4">
                  <div class="social-icon">
                      <ul class="list-inline list-unstyled">
                      <?php
                          if($facebook_url !=''):
                              echo '<li><a href="'.$facebook_url.'"><i class="fa fa-facebook"></i></a></li>';
                          endif;
                          if($twitter_url !=''):
                              echo '<li><a href="'.$twitter_url.'"><i class="fa fa-twitter"></i></a></li>';
                          endif;
                          if($vimeo_url !=''):
                              echo '<li><a href="'.$vimeo_url.'"><i class="fa fa-vimeo"></i></a></li>';
                          endif;
                          if($linkedin_url !=''):
                              echo '<li><a href="'.$linkedin_url.'"><i class="fa fa-linkedin"></i></a></li>';
                          endif;
                          if($youtube_url !=''):
                              echo '<li><a href="'.$youtube_url.'"><i class="fa fa-youtube"></i></a></li>';
                          endif;
                      ?>
                      </ul>
                  </div>
              </div>
              <div class="col-md-2 col-sm-4 border-left">
                  <?php $this->load->view($theme_dir.'right_menu_item'); ?>
              </div>
          </div>
      </div>
  </div>
  <!-- Main Bar -->
  <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
         </div>
          <div class="collapse navbar-collapse" id="navbar1">
            <?php $this->load->view($theme_dir.'left_menu_item'); ?>
        </div>
      </div>
   </nav>
<?php elseif($header_templete == 'header3'): ?>
  <header class="topbar hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="top-info-left">
                    <a href=""><i class="fa fa-envelope"></i>  <?php echo $contact_email; ?></a>
                    <a href=""><i class="fa fa-phone"></i>  <?php echo $business_phone ; ?></a>
                </div>
            </div>            
            <!--- END COL -->
            <div class="col-xs-12 col-sm-6">
                <div class="social-icon pull-right">
                    <ul class="list-inline list-unstyled">
											<?php
													if($facebook_url !=''):
															echo '<li><a href="'.$facebook_url.'"><i class="fa fa-facebook"></i></a></li>';
													endif;
													if($twitter_url !=''):
															echo '<li><a href="'.$twitter_url.'"><i class="fa fa-twitter"></i></a></li>';
													endif;
													if($vimeo_url !=''):
															echo '<li><a href="'.$vimeo_url.'"><i class="fa fa-vimeo"></i></a></li>';
													endif;
													if($linkedin_url !=''):
															echo '<li><a href="'.$linkedin_url.'"><i class="fa fa-linkedin"></i></a></li>';
													endif;
													if($youtube_url !=''):
															echo '<li><a href="'.$youtube_url.'"><i class="fa fa-youtube"></i></a></li>';
													endif;
											?>
                    </ul>
                </div>
            </div>
            <!--- END COL -->
        </div>
        <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</header>
  <div class="header6">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>uploads/system_logo/<?php echo ovoo_config('logo'); ?>" alt="logo">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
          <?php $this->load->view($theme_dir.'left_menu_item'); ?>
          <?php $this->load->view($theme_dir.'right_menu_item'); ?>
          </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>
  </div>

	<style>
		
		.btns
{
  display: block;
  width: 100px;
	margin-top:0px !important;
  height: 30px;
  border: none;
  background-color: #03ad71;
  color: #fff;
  font-size: 12px;
  border-radius: 6px;
  outline: none;
  cursor: pointer;
  transition: .3s linear;
  font-weight:bold;
}


.btns4:hover {
  transform: rotateY(0deg);
	
}
		</style>
<?php elseif($header_templete == 'header4'): ?>
  <header class="topbar visible-lg visible-xl hidden-sm hidden-xs">
    <div class="container">
      <div class="row">
						<div class="col-xs-6 col-sm-6">
								<div class="top-info-left">
									<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>uploads/system_logo/<?php echo ovoo_config('logo'); ?>" alt="logo">
									</a>
									
								</div>
						</div>
         		 <!--- END COL -->
          <div class="col-xs-6 col-sm-6">
            <div class="top-info-right" >
              <div class="social-icon">
                  <ul class="list-inline list-unstyled">
									<!--	<?php //if($this->session->userdata('login_status') == 1):?>
											<li class="hidden-xs-down hidden"><a href="<?php //echo base_url('user/login'); ?>"><?php //echo trans('signup'); ?></a></li>
											<?php //endif; ?> -->
										
										<?php
										if($facebook_url !=''):
												echo '<li><a href="'.$facebook_url.'"target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a></li>';
										endif;
										if($twitter_url !=''):
												echo '<li><a href="'.$twitter_url.'"target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a></li>';
										endif;   
											?>
                  </ul>
                </div>
              </div>
          	</div>
      		</div>
  	</div>
</header>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
				<a class="navbar-br visible-sm visible-xs visible-md hidden-lg hidden-xl" style="margin-top:5px;margin-left:10px"  href="<?php echo base_url(); ?>"><img style="height: 43px;" src="<?php echo base_url(); ?>uploads/system_logo/<?php echo ovoo_config('logo'); ?>" alt="logo">
									</a>
     </div>
      <div class="collapse navbar-collapse" id="navbar1">
        <?php $this->load->view($theme_dir.'left_menu_item'); ?>        
      
        <?php $this->load->view($theme_dir.'right_menu_item'); ?> 
    </div>
  </div>
</nav>
<?php elseif($header_templete == 'header5'): ?>
  <header class="topbar hidden-sm hidden-xs">
    <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-6">
              <div class="top-info-left">
                  <a href=""><i class="fa fa-envelope"></i>  <?php echo $contact_email; ?></a>
                  <a href=""><i class="fa fa-phone"></i>  <?php echo $business_phone ; ?></a>
              </div>
          </div>
          <!--- END COL -->
          <div class="col-xs-12 col-sm-6">
              <div class="top-info-right">
                  <div class="social-icon">
                      <ul class="list-inline list-unstyled">
                      <?php
                          if($facebook_url !=''):
                              echo '<li><a href="'.$facebook_url.'"><i class="fa fa-facebook"></i></a></li>';
                          endif;
                          if($twitter_url !=''):
                              echo '<li><a href="'.$twitter_url.'"><i class="fa fa-twitter"></i></a></li>';
                          endif;
                          if($vimeo_url !=''):
                              echo '<li><a href="'.$vimeo_url.'"><i class="fa fa-vimeo"></i></a></li>';
                          endif;
                          if($linkedin_url !=''):
                              echo '<li><a href="'.$linkedin_url.'"><i class="fa fa-linkedin"></i></a></li>';
                          endif;
                          if($youtube_url !=''):
                              echo '<li><a href="'.$youtube_url.'"><i class="fa fa-youtube"></i></a></li>';
                          endif;
                      ?>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>
<div class="header3">
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>uploads/system_logo/<?php echo ovoo_config('logo'); ?>" alt="logo">
          </a>
       </div>
        <div class="collapse navbar-collapse" id="navbar1">
          <?php $this->load->view($theme_dir.'left_menu_item'); ?>               
          <?php $this->load->view($theme_dir.'right_menu_item'); ?> 
      </div>
    </div>
  </nav>
</div>
<?php endif; ?>

