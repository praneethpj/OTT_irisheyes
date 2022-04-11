<?php
  $registration_enable            =   ovoo_config('registration_enable');    
  $frontend_login_enable          =   ovoo_config('frontend_login_enable');
?>
<style>
	.search-input{
		color:black;
	}
.search-container{
    background: #fff;
    height: 30px;
    border-radius: 30px;
    padding: 10px 10px;
    display: flex;
		margin-top:10px;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.8s;
    /*box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
    inset -7px -7px 10px 0px rgba(0,0,0,.1),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
   text-shadow:  0px 0px 6px rgba(255,255,255,.3),
              -4px -4px 6px rgba(116, 125, 136, .2);
  text-shadow: 2px 2px 3px rgba(255,255,255,0.5);
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);*/
}

.search-container:hover > .search-input{
    width: 200px;
}

.search-container .search-input{
    background: transparent;
    border: none;
    outline:none;
    width: 0px;
    font-weight: 500;
    font-size: 16px;
    transition: 0.8s;

}

.search-container .search-btn .fas{
    color: #5cbdbb;
}

input[type="text"]::placeholder {
			color: gray;
		}

</style>

<ul class="nav navbar-nav navbar-right">
	<li  class="hidden-xs-down">
	<form class="search-container" method="get" action="<?php echo base_url('search'); ?>">
        <input type="text" name="q" value="<?php if(isset($search_keyword)){ echo $search_keyword;} ?>" autocomplete="off" id="search-input" placeholder="Search.." class="search-input">
        <a href="#" class="search-btn">
                <i class="fas fa-search"></i>      
        </a>
</form>
	
<!--	<form class="navbar-form navbar-left" method="get" action="<?php //echo base_url('search'); ?>">
		<div class="input-group">
			<input type="text" style="color:white" name="q" value="<?php //if(isset($search_keyword)){ echo $search_keyword;} ?>" autocomplete="off" id="search-input" class="form-control" placeholder="Search..">
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="fa fa-search" style="color:white"></i></button>
			</span>
		</div>
	</form> -->
	</li>
<?php if($this->session->userdata('login_status') == 1):?>
  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="img img-circle" src="<?php echo $this->common_model->get_img('user', $this->session->userdata('user_id'));?>" height="20"> </a>
      <ul class="dropdown-menu" role="menu">
      <?php 
          if($this->session->userdata('admin_is_login') == 1):
              echo '<li><a href="'.base_url().'admin"><i class="fi ion-ios-speedometer-outline m-r-10"></i>'.trans('control_panel').'</a></li>';
          endif; 
      ?>
      <li><a href="<?php echo base_url('my-account/profile'); ?>"><i class="fi ion-ios-person-outline m-r-10"></i><?php echo trans('profile'); ?></a></li>
      <li><a href="<?php echo base_url('my-account/subscription'); ?>"><i class="fi ion-ios-briefcase-outline m-r-10"></i><?php echo trans('my_subscription'); ?></a></li>
      <li><a href="<?php echo base_url('my-account/favorite'); ?>"><i class="fi ion-ios-heart-outline m-r-10"></i><?php echo trans('my_favorite'); ?></a></li>
      <li><a href="<?php echo base_url('my-account/watch-later'); ?>"><i class="fi ion-ios-clock-outline m-r-10"></i><?php echo trans('wish_list'); ?></a></li>
      <li><a href="<?php echo base_url('my-account/update'); ?>"><i class="fi ion-edit m-r-10"></i><?php echo trans('update_profile'); ?></a></li>
      <li><a href="<?php echo base_url('my-account/change-password'); ?>"><i class="fi ion-key m-r-10"></i><?php echo trans('change_password'); ?></a></li>
      <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fi ion-log-out m-r-10"></i><?php echo trans('logout'); ?></a></li>
      </ul>
  </li>
<?php else: ?>
  <?php if($frontend_login_enable =='1'): ?>
    <li class="hidden-xs-down"><a href="<?php echo base_url('user/login'); ?>"><?php echo trans('login'); ?></a></li>
  <?php endif; ?>
  <?php if($registration_enable =='1'): ?>
    <li class="hidden-xs-down"><a href="<?php echo base_url('user/login'); ?>"><?php echo trans('signup'); ?></a></li>
  <?php endif; ?>
<?php endif; ?>          
  <!-- language switch -->
  <!-- <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" style="text-transform: capitalize;"><?php //echo $this->language_model->language_by_id($this->session->userdata('active_language_id')); ?></a>
      <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <?php
              // $languages = $this->language_model->get_languages();
              // foreach ($languages as $language) : ?>
              <li><a class="dropdown-item" href="<?php //echo base_url('language/language_switch/').$language->short_form; ?>"><?php //echo $language->name; ?></a></li>
          <?php //endforeach; ?>                    
      </ul>
  </li> -->
  <!-- END language -->

</ul>


  


<!-- bootstrap menu -->
<script>
	const clearInput = () => {
		const input = document.getElementsByTagName("input")[0];
		input.value = "";
	}

	const clearBtn = document.getElementById("clear-btn");
	clearBtn.addEventListener("click", clearInput);




    $(".dropdown").hover(function () {
        $(this).addClass("open");
    },function () {
        $(this).removeClass("open");
    });       

  $('.search_tools').click(function(){                    
    $(".search").toggleClass('open');
    if($(".search").hasClass("open")){
      $(this).html('<a href="#"><span class="fa fa-close"></span></a>');
    }else{
      $(this).html('<a href="#"><span class="fa fa-search"></span></a>');
    }
  });


</script>

<!-- typehead search  -->
<script type="text/javascript">
		$(document).ready(function(){
		$("#search-input").autocomplete({
		source: "<?php echo base_url(); ?>/home/autocompleteajax",
		focus: function( event, ui ) {
		//$( "#search" ).val( ui.item.title ); // uncomment this line if you want to select value to search box
		return false;
		},
		select: function( event, ui ) {
		window.location.href = ui.item.url;
		}
		}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
		var inner_html = '<a href="' + item.url + '" ><div class="list_item_container"><div class="image"><img src="' + item.image + '" ></div><div class="th-title"><b>' + item.title + '</b></div><br><div class="th-title">' + item.type + '</div></div></a>';
		return $( "<li></li>" )
		.data( "item.autocomplete", item )
		.append(inner_html)
		.appendTo( ul );
		};
		});
		</script>
<!-- bootstrap menu -->


