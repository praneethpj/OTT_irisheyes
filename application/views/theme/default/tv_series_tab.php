<div id="section-opt" >
    <div class="container">
        <div class="movies-list-wrap mlw-latestmovie">
            <div class="ml-title m-b-10">
                <span class="pull-left title"><?php echo trans('All_tv_series'); ?> <span style="color:#5DC560;font-weight:bold"> Irish Eyes</span> </span>
                <a href="<?php echo base_url('tvseries/allseries') ?>" class="pull-right cat-more"><?php echo trans('view_more'); ?> »</a>
                <ul role="tablist" class="nav nav-tabs">
					<li class="active">
                        <a data-toggle="tab" role="tab" href="#lateall-tvseries" aria-expanded="false"><?php echo trans('all'); ?></a>
                    </li>
					<li class="">
                        <a data-toggle="tab" role="tab" href="#top-rat-tvseries" aria-expanded="false">Top Rated</a>
                    </li>
                  <!--
                    <?php
                        //$featured_genres = $this->common_model->get_features_genres(6);
                        //foreach ($featured_genres as $genre) :
                    ?>
                    <li class="">
                        <a data-toggle="tab" role="tab" href="#<?php //echo $genre['slug']; ?>-tvseries" aria-expanded="false"><?php //echo $genre['name'] ?></a>
                    </li>
                <?php //endforeach; ?> -->
                </ul>
                <div class="clearfix"></div>
            </div><br>
            <div class="tab-content">
				<div id="top-rat-tvseries" class="movies-list movies-list-full tab-pane fade ">
                    <div class="row clean-preset">
						<div class="movie-container">
							<input type='hidden' id='current_page_tv_series' />
							<input type='hidden' id='show_per_page_tv_series' />
							<ul id="pagingBox_tv_series">
								<?php 
								$all_top_rated_series = $this->common_model->fetch_top_rated_series();
								foreach ($all_top_rated_series as $videos) :?>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<?php include('thumbnail.php'); ?>
								</div>
								<?php endforeach; ?>
							</ul>
						</div>
                    </div>
					<div class="pagination-container text-center page_navigation" id='page_navigation_tv_series'></div>
                </div>


                <div id="lateall-tvseries" class="movies-list movies-list-full tab-pane fade active in">
                    <div class="row clean-preset">
						<div class="movie-container">
							<input type='hidden' id='current_page_tv_series1' />
							<input type='hidden' id='show_per_page_tv_series1' />
							<ul id="pagingBox_tv_series1">
								<?php
									$all_published_videos = $this->common_model->fetch_tv_series();
									foreach ($all_published_videos as $videos) :
								?>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<?php include('thumbnail.php'); ?>
								</div>
								<?php endforeach; ?>
							</ul>
						</div>
                    </div>
					<div class="pagination-container text-center page_navigation" id='page_navigation_tv_series1'></div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/pagination_tv_series.js"></script>
