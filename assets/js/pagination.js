jQuery(document).ready(function () {
	var show_per_page = 18; 
	var number_of_items = $('#pagingBox').children().size();
	var number_of_pages = Math.ceil(number_of_items/show_per_page);

	$('#current_page').val(0);
	$('#show_per_page').val(show_per_page);

	var navigation_html = '<a class="previous_link" href="javascript:previous();">Prev</a>';
	var current_link = 0;
	while(number_of_pages > current_link){
		navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
		current_link++;
	}
	navigation_html += '<a class="next_link" href="javascript:next();">Next</a>';

	$('#page_navigation').html(navigation_html);
	$('#page_navigation .page_link:first').addClass('active_page');
	$('#pagingBox').children().css('display', 'none');
	$('#pagingBox').children().slice(0, show_per_page).css('display', 'block');
	
});

function previous(){
	new_page = parseInt($('#current_page').val()) - 1;
	if($('.active_page').prev('.page_link').length==true){
		go_to_page(new_page);
	}
}

function next(){
	new_page = parseInt($('#current_page').val()) + 1;
	if($('.active_page').next('.page_link').length==true){
		go_to_page(new_page);
	}

}
function go_to_page(page_num){
	var show_per_page = parseInt($('#show_per_page').val());
	start_from = page_num * show_per_page;
	end_on = start_from + show_per_page;
	$('#pagingBox').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
	$('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');
	$('#current_page').val(page_num);
}


jQuery(document).ready(function () {
	var show_per_page1 = 18; 
	var number_of_items1 = $('#pagingBox1').children().size();
	var number_of_pages1 = Math.ceil(number_of_items1/show_per_page1);

	$('#current_page1').val(0);
	$('#show_per_page1').val(show_per_page1);

	var navigation_html1 = '<a class="previous_link1" href="javascript:previous1();">Prev</a>';
	var current_link1 = 0;
	while(number_of_pages1 > current_link1){
		navigation_html1 += '<a class="page_link1" href="javascript:go_to_page1(' + current_link1 +')" longdesc="' + current_link1 +'">'+ (current_link1 + 1) +'</a>';
		current_link1++;
	}
	navigation_html1 += '<a class="next_link1" href="javascript:next1();">Next</a>';

	$('#page_navigation1').html(navigation_html1);
	$('#page_navigation1 .page_link1:first').addClass('active_page1');
	$('#pagingBox1').children().css('display', 'none');
	$('#pagingBox1').children().slice(0, show_per_page1).css('display', 'block');
	
});

function previous1(){
	new_page1 = parseInt($('#current_page1').val()) - 1;
	if($('.active_page1').prev('.page_link1').length==true){
		go_to_page1(new_page1);
	}
}

function next1(){
	new_page1 = parseInt($('#current_page1').val()) + 1;
	if($('.active_page1').next('.page_link1').length==true){
		go_to_page1(new_page1);
	}

}
function go_to_page1(page_num1){
	var show_per_page1 = parseInt($('#show_per_page1').val());
	start_from1 = page_num1 * show_per_page1;
	end_on1 = start_from1 + show_per_page1;
	$('#pagingBox1').children().css('display', 'none').slice(start_from1, end_on1).css('display', 'block');
	$('.page_link1[longdesc=' + page_num1 +']').addClass('active_page1').siblings('.active_page1').removeClass('active_page1');
	$('#current_page1').val(page_num1);
}
