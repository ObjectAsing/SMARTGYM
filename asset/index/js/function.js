

$(window).on('scroll', function(){

	
	// console.log($('this').scrollTop())

	var top = $(this).scrollTop();
	var headHeight = $('.head').height()/2.5;
    

    if (top <= headHeight){
    $('.studio-name').css({
        'transform':'translate(0px,'+top / 3+'%)'
    });
    
    }
});

$(document).ready(function(){

	$('.dropdown-btn a').on('click', function(){
		$('body, html').animate({
			scrollTop : $('.main').offset().top -20,
		},1200, 'easeInOutQuint');
	});

	$('.back-to-top a').on('click', function(){
		$('body, html').animate({
			'scrollTop' : 0
		},1200, 'easeInOutQuint');
	});

	// data-tables
	$('.data-tables').DataTable();


	$('.datetimepicker').datetimepicker({
    minDate:0,
    format:'Y-m-d H:i',
    allowTimes:['10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00','17:00', '18:00', '19:00', '20:00', '21:00', '22:00'],
    allowDate:['2016', '2017', '2018', '2019', '2020']
	});
});



