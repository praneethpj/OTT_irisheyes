<?php
    $theme_dir          =   'theme/default/';
    $assets_dir         =   'assets/theme/default/';
?>



<div id="section-opt">
    <div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="latest-movie movie-opt" style="margin-top: 15px;">
					<div class="movie-heading overflow-hidden"> <span>All Movies</span>
						<div class="disable-bottom-line"></div>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
         
            <!-- All Movies -->
            <div class="col-md-12 col-sm-12">
                <div class="latest-movie movie-opt">
                    <div class="row clean-preset">
                        <div class="movie-container">
							<input type='hidden' id='current_page' />
							<input type='hidden' id='show_per_page' />
								<ul id="pagingBox">
									<?php foreach ($all_published_movies as $videos): ?>
									<div class="col-md-3 col-sm-4 col-xs-6 slider-show" >
										<?php include('thumbnail.php'); ?>
									</div>
									<?php endforeach; ?>
								</ul>
                        </div>
                    </div>
					<div class="pagination-container text-center page_navigation" id='page_navigation'></div>
                </div>
            </div>
            <!-- End All Movies -->
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/pagination.js"></script>
