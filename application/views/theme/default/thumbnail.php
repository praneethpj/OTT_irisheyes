<?php 
  $theme_dir      =   'theme/default/';
    $assets_dir     =   'assets/theme/default/';
    if($videos['is_tvseries'] == 0) {
            $video_file    = $this->common_model->get_first_video_details_videos_id($videos['videos_id']);
            $file_url      = $video_file->file_url;
           
    } else {
        $video_file   = $this->common_model->get_first_episode_details_videos_id($videos['videos_id']);
        $file_url     = $video_file->file_url;
    }
    
?>

<div class="latest-movie-img-container lazy"  data-src="<?php echo $this->common_model->get_video_thumb_url($videos['videos_id']); ?>" style="max-height:160px;background-image: url(<?php echo base_url('uploads/default_image/blank_thumbnail.jpg');?>);">
    <div class="movie-img">
        <?php if($videos['is_paid'] == '1'):?>
          <div class="ribbon ribbon-top-right"></div>
        <?php endif; ?>        
        <a class="slider-show-<?php echo $videos['videos_id']; ?> ico-play ico-play-sm" id="<?php echo $videos['videos_id']; ?>" >
            <img class="img-responsive play-svg svg" src="<?php echo base_url($assets_dir); ?>images/play-button.svg" alt="play" onerror="this.src='<?php echo base_url($assets_dir); ?>images/play-button.png'">
        </a>
        <div class="overlay-div"></div>
        <div class="video_quality">
            <span class="label label-primary">
                <?php if($videos['is_tvseries']=='1'): echo $this->common_model->get_num_episodes_by_id($videos['videos_id']).' EPISODES'; else: echo $videos['video_quality']; endif; ?>
            </span>
        </div> 
    </div>
	<div class="align-left" style="margin-top: -15px;">
            <h3>
                <a style="color: white;" class="slider-show"><?php echo $videos['title'];?></a>
            </h3>
        </div>
</div>

<img src="<?php echo base_url($assets_dir); ?>img/one-logo.png" class="logo" alt="">

<input type="hidden" id="video_url_<?php echo $videos['videos_id']; ?>" name="video_url" value="<?php echo base_url('watch/'.$videos['slug']).'.html';?>" />
<input type="hidden" name="title" id="title_<?php echo $videos['videos_id']; ?>" value="<?php echo $videos['title']; ?>">
<input type="hidden" name="release" id="release_<?php echo $videos['videos_id']; ?>" value="<?php echo $videos['release']; ?>">
<input type="hidden" name="keyword" id="keyword_<?php echo $videos['videos_id']; ?>" value="<?php echo $videos['focus_keyword']; ?>">
<input type="hidden" name="description" id="description_<?php echo $videos['videos_id']; ?>" value="<?php echo $videos['meta_description']; ?>">
<input type="hidden" name="main_video" id="main_video_<?php echo $videos['videos_id']; ?>" value="<?php echo $file_url.'&mute=1'; ?>">

<!-- pop up -->
<div id="p-cont-bg" class="videoPlay-<?php echo $videos['videos_id']; ?>">
	<div id="p-cont">
		<header class="op-down">
			<div id="p-header">
				<a class="p-close-button topRight"><i class="fa fa-xmark"></i></a>

				<video src="https://irisheyestemp.xyz/video/home-bg-hq.mp4" id="vid-sample" loop="true" autoplay="autoplay" muted="" style="display: inline;">
					<source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
					<source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
				</video>

				<div id="p-buttons">
					<div id="carousel-vid-buttons">
						<a href="<?php echo base_url('watch/'.$videos['slug']).'.html';?>"><p>Watch Now<i class="fas fa-play-circle" aria-hidden="true"></i></p></a>
					</div>
					<h2><?php echo $videos['title'];?></h2>
					<div id="p-add"><i class="fa fa-plus-circle p-header-button"></i></div>
					<div id="p-like"><i class="fa fa-heart p-header-button"></i></div>
					<div id="p-dislike"><i class="fa fa-heart-crack p-header-button"></i></div>
					<!-- <div id="p-sound"><i class="fa-solid fa-volume-high show"></i><i class="fa-solid fa-volume-off"></i></div> -->
				</div>
			</div>
		</header>
		<main class="op-down">

			<div id="p-main-info">
				<div id="p-tech-info">
					<dl>
						<dt>Year of release</dt>
						<dd><?php echo $videos['release'];?></dd>
						<dt>Duration</dt>
						<dd><?php echo $videos['runtime'];?></dd>
						<dt>Quality</dt>
						<dd><?php echo $videos['video_quality'];?></dd>
						
					</dl>
				</div>
				<div id="p-prod-info">
					<dl>
						<dt>Genre</dt>
						<dd>
						<?php if($videos['genre'] !='' && $videos['genre'] !=NULL):
								$i = 0;
								$genre =explode(',', $videos['genre']);                                                
									foreach ($genre as $genre_id):
									if($i>0){ echo ',';} $i++;                                           ?>
									<a style="font-size:12px" href="<?php echo $this->genre_model->get_genre_url_by_id($genre_id);?>"><?php echo $this->genre_model->get_genre_name_by_id($genre_id);?></a>
							<?php endforeach; endif;?>
						</dd>
						<dt>Actors</dt>
						<dd>
						<?php if($videos['stars'] !='' && $videos['stars'] !=NULL):
								$i = 0;
								$stars =explode(',', $videos['stars']);                                                
									foreach ($stars as $star_id):
									if($i>0){ echo ',';} $i++;                                           ?>
									<a style="font-size:12px" href="<?php echo base_url().'star/'.$this->common_model->get_star_slug_by_id($star_id);?>"><?php echo $this->common_model->get_star_name_by_id($star_id);?></a>
							<?php endforeach; endif;?>
						</dd>
						<dt>Director</dt>
						<dd>
							<?php if($videos['director'] !='' && $videos['director'] !=NULL):
								$i = 0;
								$stars =explode(',', $videos['director']);                                                
									foreach ($stars as $star_id):
									if($i>0){ echo ',';} $i++;                                           ?>
									<a style="font-size:12px" href="<?php echo base_url().'star/'.$this->common_model->get_star_slug_by_id($star_id);?>"><?php echo $this->common_model->get_star_name_by_id($star_id);?></a>
							<?php endforeach; endif;?>
						</dd>
						<dt>Keywords</dt>
						<dd><a style="font-size:12px">
							<?php echo $videos['focus_keyword'];?></a>
						</dd>
						
					</dl>
				</div>
			</div>

			<div id="p-description"><?php echo $videos['description'];?></div>
		</main>
	</div>
</div>
                

<script type="text/javascript">
	$(".slider-show-<?php echo $videos['videos_id']; ?>").click(function(){
		$(".videoPlay-<?php echo $videos['videos_id']; ?>").toggleClass("show");
		
		var video_url = $("#video_url_"+id).val();
        var bg_video = $("#main_video_"+id).val();
		$("#bg_video").attr('src', bg_video);
		$("#p-cont-bg").css("display","block");
        $("#p-cont-bg").addClass("show");
	});

	$(".p-close-button").click(function(){
		$("#p-cont-bg").css("display","none");
		$(".videoPlay-<?php echo $videos['videos_id']; ?>").removeClass("show");
		$("body").removeClass("overflow");
		
	});
</script>
