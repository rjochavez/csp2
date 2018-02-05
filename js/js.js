
// $('.fa-bars').click(function(event) {
// 	$('.brand-nav-navbar').toggle(300);
// });

// $(window).resize(function(event) {
// 	$('.brand-nav-navbar').show(300);
// });


// $(document).ready(function(){
// 	if ($(window).width() < 769) {
// 		$('.comics-navbar-container').hide(300);
// 	}else{
// 		$('.comics-navbar-container').show(300);
// 	}
// });








$('.footer-subsection-one').click(function() {
	$('.footer-list1').toggle(300);
});

$('.footer-subsection-two').click(function() {
	$('.footer-list2').toggle(300);
});

$('.footer-subsection-three').click(function() {
	$('.footer-list3').toggle(300);
});

$('.footer-subsection-four').click(function() {
	$('.footer-list4').toggle(300);
});

$('.footer-subsection-five').click(function() {
	$('.footer-list5').toggle(300);
});







$('.fa-chevron-right').click(function() {
	$('.seller-content-slider').css({
		left: '-'+'100%'
	});
	if($('.seller-content-slider').css('left') == '0px'){
		$('.fa-chevron-right').css('visibility', 'hidden');
		$('.fa-chevron-left').css('visibility', 'visible');
	}
});


$('.fa-chevron-left').click(function() {
	$('.seller-content-slider').css({
		left: '+'+'0'
	});
	if($('.seller-content-slider').css('left') < '0px'){
		$('.fa-chevron-left').css('visibility', 'hidden');
		$('.fa-chevron-right').css('visibility', 'visible');
	}
});



var x = $('.slide').width() + 3;
var z = 1
$('.counter-1').css('background-color', 'white');
$('.counter-1').css('color', 'black');
setInterval(function(){
	$('.counter').css('background-color', 'black')
	$('.counter').css('color', 'white')
	$('.main-slider-image').css('left','-='+ x + 'px');
	z++
	$('.slidertext-image').attr({
		src: 'img/slidertext-content2.png',
	});
	$('.counter-' + z).css('background-color', 'white');
	$('.counter-' + z ).css('color', 'black');
	$('.main-slider-text' + z).css('background-color', 'blue');

	if (z == 6) {
		$('.main-slider-image').css('left','0');
		z = 1;
		$('.counter-1').css('background-color', 'white')
		$('.counter-1').css('color', 'black')
	}

	if (z == 1){
		$('.slidertext-image').attr({
		src: 'img/slidertext-content.png',
	});
	}

	if (z == 3){
		$('.slidertext-image').attr({
		src: 'img/slidertext-content3.png',
	});
	}

	if (z == 4){
		$('.slidertext-image').attr({
		src: 'img/slidertext-content4.png',
	});
	}

	if (z == 5){
		$('.slidertext-image').attr({
		src: 'img/slidertext-content5.png',
	 });
	}
	
	},3000);



$(window).resize(function() {
	location.reload();
});



$(window).resize(function(event) {
	if ($(window).width() = 768) {
		$('.comics-navbar-container').css('display','none');
	}
});


