
jQuery(document).ready(function () {
	var show_per_page_tv_series = 18; 
	var number_of_items_tv_series = $('#pagingBox_tv_series').children().size();
	var number_of_pages_tv_series = Math.ceil(number_of_items_tv_series/show_per_page_tv_series);

	$('#current_page_tv_series').val(0);
	$('#show_per_page_tv_series').val(show_per_page_tv_series);

	var navigation_html_tv_series = '<a class="previous_link_tv_series" href="javascript:previous_tv_series();">Prev</a>';
	var current_link_tv_series = 0;
	while(number_of_pages_tv_series > current_link_tv_series){
		navigation_html_tv_series += '<a class="page_link_tv_series" href="javascript:go_to_page_tv_series(' + current_link_tv_series +')" longdesc="' + current_link_tv_series +'">'+ (current_link_tv_series + 1) +'</a>';
		current_link_tv_series++;
	}
	navigation_html_tv_series += '<a class="next_link_tv_series" href="javascript:next_tv_series();">Next</a>';

	$('#page_navigation_tv_series').html(navigation_html_tv_series);
	$('#page_navigation_tv_series .page_link_tv_series:first').addClass('active_page_tv_series');
	$('#pagingBox_tv_series').children().css('display', 'none');
	$('#pagingBox_tv_series').children().slice(0, show_per_page_tv_series).css('display', 'block');
	
});

function previous_tv_series(){
	new_page_tv_series = parseInt($('#current_page_tv_series').val()) - 1;
	if($('.active_page_tv_series').prev('.page_link_tv_series').length==true){
		go_to_page_tv_series(new_page_tv_series);
	}
}

function next_tv_series(){
	new_page_tv_series = parseInt($('#current_page_tv_series').val()) + 1;
	if($('.active_page_tv_series').next('.page_link_tv_series').length==true){
		go_to_page_tv_series(new_page_tv_series);
	}

}
function go_to_page_tv_series(page_num_tv_series){
	var show_per_page_tv_series = parseInt($('#show_per_page_tv_series').val());
	start_from_tv_series = page_num_tv_series * show_per_page_tv_series;
	end_on_tv_series = start_from_tv_series + show_per_page_tv_series;
	$('#pagingBox_tv_series').children().css('display', 'none').slice(start_from_tv_series, end_on_tv_series).css('display', 'block');
	$('.page_link_tv_series[longdesc=' + page_num_tv_series +']').addClass('active_page_tv_series').siblings('.active_page_tv_series').removeClass('active_page_tv_series');
	$('#current_page_tv_series').val(page_num_tv_series);
}


jQuery(document).ready(function () {
	var show_per_page_tv_series1 = 18; 
	var number_of_items_tv_series1 = $('#pagingBox_tv_series1').children().size();
	var number_of_pages_tv_series1 = Math.ceil(number_of_items_tv_series1/show_per_page_tv_series1);

	$('#current_page_tv_series1').val(0);
	$('#show_per_page_tv_series1').val(show_per_page_tv_series1);

	var navigation_html_tv_series1 = '<a class="previous_link_tv_series1" href="javascript:previous_tv_series1();">Prev</a>';
	var current_link_tv_series1 = 0;
	while(number_of_pages_tv_series1 > current_link_tv_series1){
		navigation_html_tv_series1 += '<a class="page_link_tv_series1" href="javascript:go_to_page_tv_series1(' + current_link_tv_series1 +')" longdesc="' + current_link_tv_series1 +'">'+ (current_link_tv_series1 + 1) +'</a>';
		current_link_tv_series1++;
	}
	navigation_html_tv_series1 += '<a class="next_link_tv_series1" href="javascript:next_tv_series1();">Next</a>';

	$('#page_navigation_tv_series1').html(navigation_html_tv_series1);
	$('#page_navigation_tv_series1 .page_link_tv_series1:first').addClass('active_page_tv_series1');
	$('#pagingBox_tv_series1').children().css('display', 'none');
	$('#pagingBox_tv_series1').children().slice(0, show_per_page_tv_series1).css('display', 'block');
	
});

function previous_tv_series1(){
	new_page_tv_series1 = parseInt($('#current_page_tv_series1').val()) - 1;
	if($('.active_page_tv_series1').prev('.page_link_tv_series1').length==true){
		go_to_page_tv_series1(new_page_tv_series1);
	}
}

function next_tv_series1(){
	new_page_tv_series1 = parseInt($('#current_page_tv_series1').val()) + 1;
	if($('.active_page_tv_series1').next('.page_link_tv_series1').length==true){
		go_to_page_tv_series1(new_page_tv_series1);
	}

}
function go_to_page_tv_series1(page_num_tv_series1){
	var show_per_page_tv_series1 = parseInt($('#show_per_page_tv_series1').val());
	start_from_tv_series1 = page_num_tv_series1 * show_per_page_tv_series1;
	end_on_tv_series1 = start_from_tv_series1 + show_per_page_tv_series1;
	$('#pagingBox_tv_series1').children().css('display', 'none').slice(start_from_tv_series1, end_on_tv_series1).css('display', 'block');
	$('.page_link_tv_series1[longdesc=' + page_num_tv_series1 +']').addClass('active_page_tv_series1').siblings('.active_page_tv_series1').removeClass('active_page_tv_series1');
	$('#current_page_tv_series1').val(page_num_tv_series1);
}
