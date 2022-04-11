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
        <a class="slider-show ico-play ico-play-sm" id="<?php echo $videos['videos_id']; ?>">
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

<script type="text/javascript">
	 $(".slider-show").unbind().on("click",function(){
        $("#p-cont-bg").css("display","block");
        $("#p-cont-bg").addClass("show");
        var id = $(this).attr('id');
        console.log(id);
        /* if(id == 128) {
            var video_url = "http://77.68.31.171/plesk-site-preview/irisheyes.tv/https/77.68.31.171/watch/the-ana-kriegel-murder.html";
            var bg_video = "https://iframe.mediadelivery.net/embed/2920/f499c283-5c37-4daf-bd03-96bf9bf427e4?autoplay=false&mute=1";
        } else { */
            var video_url = $("#video_url_"+id).val();
            var bg_video = $("#main_video_"+id).val();
        /* } */
        var title = $("#title_"+id).val();
        var release = $("#release_"+id).val();
        var keyword = $("#keyword_"+id).val();
        var description = $("#description_"+id).val();
        
        $("body").addClass("overflow");
        $("#videoPlay").attr("href", video_url);
        $(".op-down h2").text(title);
        $("#release_year").text(release);
        // $("#keywords").text(keyword.replace(/,/g, ", "));
        $("#keywords").text(keyword);
        $("#p-description").text(description);
        $("#bg_video").attr('src', bg_video);
        $("#video_id").val(id);
    });

    $("#p-close-button").click(function(){
		$("#p-cont-bg").css("display","none");
        /*$("body").removeClass("overflow");*/
        $("#p-cont-bg").removeClass("show");
        $("#videoPlay").attr("href", "");
        $("#bg_video").attr("src", "");
    });
    
    /* $('.p-close-button').click(function () {
        $('.p-cont-bg').removeClass("show");
        $('header').removeClass("op-down");
        $('main').removeClass("op-down");
        $('footer').removeClass("op-down");
        $('body').removeClass("overflow");
        $(this).prev('video').get(0).pause();
    }); */
</script>
