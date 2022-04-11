<!-- Breadcrumb -->
<div id="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="page-title">
                    <h1 class="text-uppercase" style="color:gray"> <?php echo trans('star_info'); ?></h1>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url();?>"><i class="fi ion-ios-home"></i><?php echo trans('home'); ?></a>
                    </li>
                    <li class=""><?php echo trans('stars'); ?></li>
                    <li class="active"><?php echo $star_name; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="page-title">
					<h1 style="line-height:24px;color:white"><?php echo $star_name; ?></h1>
                </div>
			</div>
		</div>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-2 col-sm-12">
				<img src="<?php echo $this->common_model->get_Star_img($star_id); ?>" style="width:150px;height:180px"  >
				</div>
				<div class="col-md-10 col-sm-12">
					<div class="page-title">	
						<h4 style="line-height:24px;color:gray"><?php echo $star_desc; ?></h4>
						<?php if($star_desc == NULL):?>
							<h4 style="line-height:26px;color:gray">No description found</h4>
						<?php endif; ?>
					</div>
				</div>
					
			</div>
		</div>
    </div>

<!-- Secondary Section -->
<div id="section-opt">
    <div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="page-title">
					<h1 style="color:gray">Videos</h1>
                </div>
			</div>
		</div>
        <div class="row">
            <!-- All Movies -->
            <?php if($total_rows > 0):  ?>
                <div class="col-md-12 col-sm-12">
                    <div class="latest-movie movie-opt">
                        <div class="row clean-preset">
                            <div class="movie-container">
                                <?php foreach ($all_published_videos as $videos) :?>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <?php include('thumbnail.php'); ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- End All Movies -->
        </div>
        <?php if($total_rows > 24): echo $links; endif; ?>        
    </div>
</div>
<!-- Secondary Section -->
