<?php $assets_dir  =   'assets/theme/default/'; ?>
<!-- Breadcrumb -->
<div id="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-10">
                <div class="page-title">
                    <h1 class="text-uppercase"><?php echo '"'.$search_keyword.'" search results'; ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Secondary Section -->
<div id="section-opt" style="margin-top:30px">
    <div class="container">
        <div class="row">
            <!-- All Movies -->
           
            <div class="col-md-12 col-sm-12">
			 <h2 class="block-title text-left" style="color:white">Movies and TV series</h2>
				<?php if($total_rows_videos>0){
					if($total_rows_videos > 24){
					echo $links;
				}
				?>
                <div class="latest-movie movie-opt">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php foreach ($all_published_videos_movie_tv_series as $videos) :?>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
							
                        </div>
                    </div>
                </div>
				<?php }else{
              	  echo '<h4 style="color: #03ad716b;padding: 5px;">Nothing found by "'.$search_keyword.'"</h4>';
            	} ?>
            </div>
				<?php if($total_rows_videos > 24){
							echo $links;
						}
				?>	
		</div>


		<div class="row">
			<div class="col-md-12 col-sm-12">
			 <h2 class="block-title text-left" style="color:white">Live TV</h2>
				<?php if($total_rows_movies>0){
					if($total_rows_movies > 24){
					echo $links;
				}
				?>
                <div class="latest-movie movie-opt">
                    <div class="row clean-preset">
                        <div class="movie-container">
                           
						<?php foreach ($all_published_videos_live as $tv):?>
							 <div class="col-md-3 col-sm-4 col-xs-6 ">
								<div class="latest-movie-img-container lazy" data-lId="<?php echo $tv['live_tv_id']; ?>" style="height:160px; background-repeat: no-repeat; background-image: url(<?php echo $this->live_tv_model->get_tv_poster($tv['poster']); ?>);">
									<input type="hidden" id="video_url_<?php echo $tv['live_tv_id']; ?>" name="video_url" value="<?php echo base_url('live-tv/'.$tv['slug']).'.html';?>">
									<input type="hidden" name="title" id="title_<?php echo $tv['live_tv_id']; ?>" value="<?php echo $tv['tv_name']; ?>">
									<input type="hidden" name="keyword" id="keyword_<?php echo $tv['live_tv_id']; ?>" value="<?php echo $tv['focus_keyword']; ?>">
									<input type="hidden" name="description" id="description_<?php echo $tv['live_tv_id']; ?>" value="<?php echo $tv['meta_description']; ?>">
									<input type="hidden" name="main_video" id="all_video_<?php echo $tv['live_tv_id']; ?>" value="<?php echo $tv['stream_url']; ?>">
									<div class="movie-img">
										<?php if($tv['is_paid'] == '1'):?>
											<div class="ribbon ribbon-top-right"></div>
										<?php endif; ?>   
										<a href="<?php echo base_url('live-tv/'.$tv['slug']).'.html';?> " class="ico-play ico-play-sm">
												<img class="img-responsive play-svg svg" src="<?php echo base_url($assets_dir); ?>images/play-button.svg" alt="play" onerror="this.src='<?php echo base_url($assets_dir); ?>images/play-button.png'">
										</a>
										
										<a  href="<?php echo base_url('live-tv/'.$tv['slug']).'.html';?>">
											<div class="overlay-div"></div>
										</a>
									</div>

									<div class="">
										<h3>
											<div class="align-left" style="margin-top: -15px;">
												<a  style="color: white;font-size: 0.60em;" href="<?php echo base_url('live-tv/'.$tv['slug']).'.html';?>"><?php echo $tv['tv_name'];?></a></br>            
												<!-- <p style="color:gray;">Action, Adventure, Fantasy</p> -->
											</div>
										</h3>
									</div>
                    			</div>
							</div>
							<?php endforeach; ?>	

							
                        </div>
                    </div>
                </div>
				<?php }else{
                  echo '<h4 style="color: #03ad716b;padding: 5px;">Nothing found by "'.$search_keyword.'"</h4>';
            	} ?>
            </div>
			<?php if($total_rows_movies > 24){
                        echo $links;
                    }
        	?>
        </div>
        	
        
    </div>
</div>
<!-- Secondary Section -->
