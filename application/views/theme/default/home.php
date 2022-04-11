

<?php $theme_dir                      =   'theme/default/'; ?>
<?php if($this->common_model->get_ads_status('home_header')=='1'): ?>
<!-- header ads -->
<div id="ads" style="padding: 20px 0px;text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php echo $this->common_model->get_ads('home_header'); ?>
            </div>
        </div>
    </div>
</div>
<!-- header ads -->
<?php endif; ?>
<?php 
    $live_tv_publish    =   $this->db->get_where('config' , array('title' =>'live_tv_publish'))->row()->value;
    if($this->live_tv_model->get_featured_tv_status() && $live_tv_publish =='1'):
?>
<!-- live tv section -->
<div id="section-opt" style="margin-top:170px">
    <div class="container">
        <div class="row">
            <!-- Upcomming Movies -->
            <div class="col-md-12 col-sm-12">
                <div class="latest-movie movie-opt">
                    <div class="movie-heading overflow-hidden">
						<h2> <span class="head"><?php echo trans('featured_tv_channels'); ?> </span>  <span style="color:#5DC560;font-weight:bold" >&nbsp;Irish Eyes</span>  </h2>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12 col-sm-12">
                <div class="owl-carousel-featured live_tv_owl" >
                    <?php
                    $featured_tvs =$this->live_tv_model->get_featured_live_tv();
                    foreach ($featured_tvs as $tv):
                    ?>

						<?php include('tv_thumb.php'); ?>

                    <?php endforeach; ?>
                </div>
                <script type = "text/javascript" >
                    $('.live_tv_owl').owlCarousel({
                        stagePadding: 0,
                        /*the little visible images at the end of the carousel*/
                        loop: true,
                        rtl: false,
                        lazyLoad: true,
                        margin: 15,
                        center: true,
                        nav: false,
						navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        dots: false,
                        responsive: {
                            0: {
                                items: 1.5
                            },
                            600: {
                                items: 3
                            },
                            800: {
                                items: 4
                            },
                            1000: {
                                items: 4
                            },
                            1200: {
                                items: 5
                            }
                        }
                    }); 
					
                </script>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!--
<div id="section-opt">
	<div class="container">
		<div class="row">
			<?php
				//$i      = 0;
				//$related_videos = $this->common_model->temp_get_watch_again_first_row();     
				//foreach ($related_videos as $videos):
					//$i++;
			?>
			<div class="col-md-3 col-sm-6 col-xs-6"  id="<?php //echo $videos['videos_id']; ?>">
				<?php //include('banner_temp.php'); ?>
			</div>
			<?php //endforeach; ?>
			<?php
				//$i      = 0;
				//$related_videos = $this->common_model->temp_get_watch_again();     
				//foreach ($related_videos as $videos):
					//$i++;
			?>
			<div class="col-md-3 col-sm-6 col-xs-6"  id="<?php //echo $videos['videos_id']; ?>">
				<?php //include('banner_temp.php'); ?>
			</div>
			<?php //endforeach; ?>
		</div>

		
	</div>
</div> -->


<?php include('movies_tabs.php'); ?>

<div id="section-opt" style="margin-top:-80px">
    <div class="container">
        <div class="movies-list-wrap mlw-latestmovie">
            <div class="ml-title m-b-10">
                <span class="pull-left title"><?php echo trans('All_tv'); ?><span style="color:#5DC560;font-weight:bold"> Irish Eyes</span></span>
                <a href="<?php echo base_url('live_tv.html') ?>" class="pull-right cat-more"><?php echo trans('view_more'); ?> »</a>
                <ul role="tablist" class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" role="tab" href="#latest-tv" aria-expanded="false"><?php echo trans('all'); ?></a>
                    </li>
					
                    <?php
                        $live_genres = $this->common_model->get_tv_genres(6);
                        foreach ($live_genres as $genre) :
                    ?>
                    <li class="">
                        <a data-toggle="tab" role="tab" href="#<?php echo $genre['slug']; ?>-tv" aria-expanded="false"><?php echo $genre['live_tv_category'] ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
                <div class="clearfix"></div>
            </div><br>
            <div class="tab-content">
                <div id="latest-tv" class="owl-carousel-featured live_tv_owl tab-pane fade active in">
                    <?php
                         $latest_published_live_tv = $this->common_model->latest_live_tv();
                        foreach ($latest_published_live_tv as $tv) :
                    ?>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<?php include('tv_thumb.php'); ?>
						</div>
                    <?php endforeach; ?>     
                </div>

				<?php
                     $live_genres = $this->common_model->get_tv_genres(6);
                    foreach ($live_genres as $genre) :
                ?>
				<div id="<?php echo $genre['slug']; ?>-tv" class="owl-carousel-featured live_tv_owl tab-pane fade" >
                    <?php
                         $genre_videos = $this->genre_model->get_tv_by_id($genre['live_tv_category_id']);
                        foreach ($genre_videos as $tv):
                    ?>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<?php include('tv_thumb.php'); ?>
						</div>
                    <?php endforeach; ?>     
                </div>
				<?php endforeach; ?>     

            </div>
        </div>
    </div>
</div>


<?php include('tv_series_tab.php'); ?>

<!--
<div id="section-opt" style="margin-top:-10px;height:500px">
	<div class="container">
		<div class="row">
			<?php
				//$i      = 0;
				//$related_videos = $this->common_model->temp_get_watch_series_again_first_row();     
				//foreach ($related_videos as $videos):
					//$i++;
			?>
			<div class="col-md-3 col-sm-6 col-xs-6"  id="<?php //echo $videos['videos_id']; ?>">
				<?php //include('banner_temp.php'); ?>
			</div>
			<?php //endforeach; ?>
		</div>
	</div>
</div>-->

