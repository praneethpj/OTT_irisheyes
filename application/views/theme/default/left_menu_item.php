<?php
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
?>

<style>
	.btns
{
  display: block;
  margin: 15px 0;
  width: 120px;
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

.navbar-right>.dropdown>a{
	margin-top:0px;
}
	</style>



<ul class="nav navbar-nav navbar-left">
  <li><a href="<?php echo base_url(); ?>"><?php echo trans('home'); ?></a></li>
  <?php if($genre_to_primary_menu =='1'): ?>
  <!-- <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php //echo trans('genre'); ?> <span class="caret"></span></a>
    <div class="dropdown-menu row col-lg-12 three-column-navbar" role="menu">
      <?php //$all_published_genre= $this->genre_model->all_published_genre();
          //foreach ($all_published_genre as $genre):                                                
      ?>
      <div class="col-md-3">
        <ul class="menu-item list-unstyled">
            <li><a href="<?php //echo base_url('genre/'.$genre->slug.'.html'); ?>"><?php //echo $genre->name; ?></a></li>
        </ul>
      </div>
      <?php //endforeach; ?>
    </div>
  </li> -->
<?php endif; ?>
<?php if($country_to_primary_menu =='1'): ?>
  <!-- <li class="dropdown"> 
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo trans('country'); ?> <span class="caret"></span></a>
    <div class="dropdown-menu row col-lg-12 three-column-navbar" role="menu">
      <?php $all_published_country= $this->country_model->all_published_country();
        foreach ($all_published_country as $country):                                                
      ?>
      <div class="col-md-3">
        <ul class="menu-item list-unstyled">
          <li><a href="<?php echo base_url('country/'.$country->slug.'.html'); ?>"><?php echo $country->name; ?></a></li>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </li> -->
<?php endif; ?>
<?php if($release_to_primary_menu =='1'): ?>
  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo trans('release'); ?> <span class="caret"></span></a>
    <div class="dropdown-menu row col-lg-12 three-column-navbar" role="menu">
      <?php $current_year = date("Y");
        $end_year = $current_year - 27;
        for($i=$current_year;$i>$end_year;$i--): 
      ?>
      <div class="col-md-3">
        <ul class="menu-item list-unstyled">
          <li><a href="<?php echo base_url('year/'.$i.'.html'); ?>"><?php echo $i; ?></a></li>
        </ul>
      </div>
      <?php endfor; ?>
      <div class="col-md-3">
          <ul class="menu-item list-unstyled">
              <li><a href="<?php echo base_url('year.html'); ?>"><?php echo trans('more'); ?>..</a></li>
          </ul>
      </div>
    </div>
  </li>
<?php endif; ?>
<li><a href="<?php echo base_url('movies.html')?>"><?php echo trans('movies'); ?></a></li>
	
	
	<!-- <li><a href="<?php //echo base_url('genre/sports.html')?>"><?php //echo trans('Sports'); ?></a></li>
	
	<li><a href="<?php //echo base_url('genre/one-offs.html')?>"><?php //echo trans('One-offs'); ?></a></li> -->
  <?php 
    $tv_series_publish          = ovoo_config('tv_series_publish');
    $tv_series_pin_primary_menu = ovoo_config('tv_series_pin_primary_menu');
    if($tv_series_publish =='1' && $tv_series_pin_primary_menu =='1'):
  ?>
    <li><a href="<?php echo base_url('tv-series.html')?>"><?php echo trans('tv_series'); ?></a></li>
  <?php endif; ?>
  <?php if($az_to_primary_menu == '1'): ?>
    <li><a href="<?php echo base_url('az.html')?>"><?php echo trans('az'); ?></a></li>
  <?php endif; ?>
	<?php 
    $live_tv_publish          = ovoo_config('live_tv_publish');
    $live_tv_pin_primary_menu = ovoo_config('live_tv_pin_primary_menu');
    if($live_tv_publish =='1' && $live_tv_pin_primary_menu =='1'):
  ?>
	
	<li><a href="<?php echo base_url('live-tv.html')?>"><?php echo trans('tv'); ?> <span class="badge badge-success" style="background-color:#5DC560"> Live</span></a></li>
  <?php endif; ?>
	
	
  <?php $all_video_type_on_primary_menu= $this->common_model->all_video_type_on_primary_menu();
    foreach ($all_video_type_on_primary_menu as $video_type):                                                
  ?>
  <li><a href="<?php echo base_url().'type/'.$video_type->slug?>"><?php echo $video_type->video_type;?></a></li>
  <?php endforeach; ?>
  <?php 
    $blog_enable          = ovoo_config('blog_enable');
    if($blog_enable =='1'):
  ?>
  <li><a href="<?php echo base_url('blog.html')?>"><?php echo trans('blog'); ?></a></li>
  <?php endif; ?>                  
  <?php $all_page_on_primary_menu= $this->common_model->all_page_on_primary_menu();
    foreach ($all_page_on_primary_menu as $pages):                                                
  ?>
  <li><a href="<?php echo base_url().'page/'.$pages->slug?>"><?php echo $pages->page_title?></a></li>
  <?php endforeach; ?>
  <?php if($movie_request_enable == '1'): ?>
    <li><a href="#" data-toggle="modal" data-target="#movieRequest"><?php echo trans('request'); ?></a></li>
  <?php endif; ?>
  <?php if($privacy_policy_to_primary_menu == '1'): ?>            
    <li><a href="<?php echo base_url('privacy-policy.html')?>"><?php echo trans('privacy_policy'); ?></a></li>
  <?php endif; ?>
  <?php if($dmca_to_primary_menu == '1'): ?>            
    <li><a href="<?php echo base_url('dmca.html')?>"><?php echo trans('dmca'); ?></a></li>
  <?php endif; ?>
  <?php if($contact_to_primary_menu == '1'): ?>            
    <li><a href="<?php echo base_url('contact-us.html')?>"><?php echo trans('contact'); ?></a></li>
  <?php endif; ?>            
</ul>


  