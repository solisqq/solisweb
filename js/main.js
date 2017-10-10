$(document).ready(function (){

	var header_size=0;
	var toggle_focus=0;

	/*Pages*/
	main_start_pos = 0;
	/*/Pages*/

	$('#cloud').addClass('active');
	$('#name_main').addClass('active');

	$(window).scroll(function() {//OnScrollChange
		var position = $(document).scrollTop(); //Position
	});
	$(".scroll_link").click(function (e){//Scroll Link
		toggle_focus=1; 
		e.preventDefault();
		var destination = $(this).data('dest');
		var scrollDestination = $(destination).offset().top-header_size;
		this.focus();
        $('html, body').animate({
            scrollTop: scrollDestination
        }, "slow", function(){ toggle_focus=0; });
        console.log(destination);
    });
    $("#scroll_link").click(function (e){
    	toggle_focus=1; 
		e.preventDefault();
		var destination = $(this).data('dest');
		var scrollDestination = $(destination).offset().top-header_size;
		this.focus();
        $('html, body').animate({
            scrollTop: scrollDestination
        }, "slow", function(){ toggle_focus=0; });
        console.log(destination);
    });
});