<?php
    $theme_dir          =   'theme/default/';
    $assets_dir         =   'assets/theme/default/';
?>
<?php if($this->common_model->get_ads_status('tv_header')=='1'): ?>
<!-- header ads -->
<div id="ads" style="padding: 20px 0px;text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php echo $this->common_model->get_ads('tv_header'); ?>
            </div>
        </div>
    </div>
</div>
<!-- header ads -->
<?php endif; ?>





<!-- Breadcrumb -->
<!-- <div id="title-bar" style="margin-top:80px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="page-title">
                    <h1 class="text-uppercase"><?php echo trans('Watch_TV_Series'); ?></h1>
                </div>
            </div>
            <div class="col-md-6 col-sm-6col-xs-12 text-right">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url();?>"><i class="fi ion-ios-home"></i><?php echo trans('home'); ?></a>
                    </li>
                    <li class="active"><?php echo trans('tv-series'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->
<!-- End Breadcrumb -->

<div id="section-opt"  style="margin-top:-10px">
    <div class="container">
		<?php $this->load->view($theme_dir.'header_image_tv_series'); ?>
	</div>
</div>

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
</div> -->

<?php include('tv_series_tab.php'); ?>
