<?php $assets_dir  =   'assets/theme/default/'; ?>

<div class="latest-movie-img-container lazy" data-lId="<?php echo $tv['live_tv_id']; ?>" style=" background-repeat: no-repeat; background-image: url(<?php echo $this->live_tv_model->get_tv_poster($tv['poster']); ?>);">
	<input type="hidden" id="video_url_<?php echo $tv['live_tv_id']; ?>" name="video_url" value="<?php echo base_url('live-tv/'.$tv['slug']).'.html';?>">
	<input type="hidden" name="title" id="title_<?php echo $tv['live_tv_id']; ?>" value="<?php echo $tv['tv_name']; ?>">
	<input type="hidden" name="keyword" id="keyword_<?php echo $tv['live_tv_id']; ?>" value="<?php echo $tv['focus_keyword']; ?>">
	<input type="hidden" name="description" id="description_<?php echo $tv['live_tv_id']; ?>" value="<?php echo $tv['meta_description']; ?>">
	<input type="hidden" name="main_video" id="main_video_<?php echo $tv['live_tv_id']; ?>" value="<?php echo $tv['stream_url']; ?>">
    <div class="movie-img">
		<?php if($tv['is_paid'] == '1'):?>
			<div class="ribbon ribbon-top-right"></div>
		<?php endif; ?>   
		<a href="<?php echo base_url('live-tv/'.$tv['slug']).'.html';?> " class="ico-play ico-play-sm">
			<img class="img-responsive play-svg svg" style="object" src="<?php echo base_url($assets_dir); ?>images/play-button.svg" alt="play" onerror="this.src='<?php echo base_url($assets_dir); ?>images/play-button.png'">
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
