<?php
    $theme_dir          =   'theme/default/';
    $assets_dir         =   'assets/theme/default/';
?>
<div class=" hidden-xs">
    <!-- <div class="col-md-12"> -->
        <div class="similler-movie">
                <div class="movie-container">
                    <?php
                        $i = 0;
                        $related_video = $this->common_model->get_header_image_movies();
                        // var_dump($related_video);        
                        foreach ($related_video as $videos):
                        $i++;
                    ?>
                    <?php include('header_thumbnail.php'); ?>
                    <?php if($i%6==0){ echo "</div></div><div class='row'><div class='movie-container'>";} ?>
                    <?php endforeach; ?>
                </div>
        <!-- </div> -->
    </div>
</div>
