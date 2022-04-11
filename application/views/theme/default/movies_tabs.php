<div id="section-opt" >
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="movies-list-wrap mlw-latestmovie">
					<div class="ml-title m-b-10">
						<span class="pull-left title"><?php echo trans('all_movies'); ?><span style="color:#5DC560;font-weight:bold"> Irish Eyes</span> </span>
						<a href="<?php echo base_url('movies/allmovies') ?>" class="pull-right cat-more"><?php echo trans('view_more'); ?> »</a>
						<ul role="tablist" class="nav nav-tabs">
						<li class="active">
								<a data-toggle="tab" role="tab" href="#latest-all" aria-expanded="false"><?php echo trans('all'); ?></a>
							</li>
							<li class="">
								<a data-toggle="tab" role="tab" href="#new" aria-expanded="false"><?php echo trans('top_rating'); ?></a>
							</li>
							<!--
							<?php
								//$featured_genres = $this->common_model->get_features_genres(6);
								//foreach ($featured_genres as $genre) :
							?>
							<li class="">
								<a data-toggle="tab" role="tab" href="#<?php //echo $genre['slug']; ?>" aria-expanded="false"><?php //echo $genre['name'] ?></a>
							</li>
						<?php //endforeach; ?>-->
						</ul>
						<div class="clearfix"></div>
					</div><br>
					<div class="tab-content">
						<div id="new" class="movies-list movies-list-full tab-pane fade ">
							<div class="row clean-preset">
								<div class="movie-container">
									<input type='hidden' id='current_page' />
									<input type='hidden' id='show_per_page' />
									<ul id="pagingBox">
										<?php 
										$all_top_rated_movies = $this->common_model->fetch_top_rated_movies();
										foreach ($all_top_rated_movies as $videos) : 
										?>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<?php include('thumbnail.php'); ?>
											</div>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
							<div class="pagination-container text-center page_navigation" id='page_navigation'></div>
						</div>

						<div id="latest-all" class="movies-list movies-list-full tab-pane fade active in">
							<div class="row clean-preset">
								<div class="movie-container">
									<input type='hidden' id='current_page1' />
									<input type='hidden' id='show_per_page1' />
									<ul id="pagingBox1">
										<?php
										 $all_published_videos = $this->common_model->fetch_movies();
										 foreach ($all_published_videos as $videos) :?>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<?php include('thumbnail.php'); ?>
											</div>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
							<div class="pagination-container text-center page_navigation" id='page_navigation1'></div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>


<script src="<?php echo base_url(); ?>assets/js/pagination.js"></script>
