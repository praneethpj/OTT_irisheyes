<?php
    $theme_dir          =   'theme/default/';
    $assets_dir         =   'assets/theme/default/';
?>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 7px;
}

.button2 {background-color: #cc0000;} /* Blue */
.button3 {background-color: #ffc40c;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */


#sliders-container {
    position: relative;
    margin-top: -12%;
    margin-left: -90px;
    margin-right: -9%;
}

#sliders {
    height: 800px;
    width: 100%;
    margin-bottom: -200px;
}

#sliders > div {
    height: 100%;
    width: 100%;
}

.vid-carousel {
    position: relative;
}

#sliders img {
    opacity: 0.2;
}

#carousel-vid-buttons {
    position: absolute;
    top: 35%;
    right: 5%;
    z-index: 998;
}


</style>

	<div class="row row-eq-height">
		<div class="col-md-7 col-sm-7">
			<div style="color: white;font-size: 50px;font-family: 'Roboto Condensed', sans-serif;font-weight: bold"> <?php echo $videos['title'];?> </div>
			<div class="top-banner-description-sub-title m-5"> Action, Adventure, Fantasy </div>
			<div class="top-banner-description m-5"> <?php echo $videos['description'];?> </div><br>

			<div class="row" style="margin-top:100px">
				<a class="combi" href="<?php echo base_url('watch/'.$videos['slug']).'.html';?>"> 
					<button class="button button2"><b><i class="fa fa-play" aria-hidden="true"></i>&nbsp;&nbsp;WATCH</b></button>
				</a> &nbsp;&nbsp;&nbsp;
				<button class="button button3" onclick="wish_list_add('wl','<?php echo $videos['videos_id'];?>')"style="color: black;">
					<b><i style="color:black;" class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;ADD TO LIST</b>
				</button>
			</div>
		</div>
		
		<div class="col-md-5 col-sm-5 top-banner-fill">
			<img class="img-fluid" src="<?php echo $this->common_model->get_header_image_thumb_url($videos['videos_id']); ?>"> 
		</div>
</div>
    
    



<script type="text/javascript">
    function wish_list_add(list_type = '', videos_id = '') {

		if (list_type == 'fav') {
            list_name = 'wish';
        } else {
            list_name = 'watch later';
        }
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>user/add_to_wish_list',
            data: "list_type=" + list_type + "&videos_id=" + videos_id,
            dataType: 'json',
            beforeSend: function() {},
            success: function(response) {
                var status = response.status;
                if (status == "success") {
                    swal('Done!', 'Added to your ' + list_name + ' List.', 'info');
                } else if (status == "login_fail") {
                    window.location.replace('<?php echo (base_url() . 'login') ?>');
                } else {
                    swal('OPPS!', 'Already exist on your ' + list_name + ' list.', 'error');
                }
            }
        });
    }
</script>
