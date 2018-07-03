$(document).ready(function() {
    // tab table-score
    $('#list-table-score').tabify();
    // tab page du doan
    $('#tab-page').tabify();

    $("#hightlight-news").mCustomScrollbar({
        // theme:"minimal"
    });

    // onscroll
    onscroll = function() {
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (scrollTop > 335) {
            $('#header').addClass('header-sticky');
        } else {
            $('#header').removeClass('header-sticky');
        }
    };

    $('.search-form .icon-search > a').click(function() {
        $('#max-search').slideToggle('slow', function() {
            $('.search-form .icon-search').toggleClass('open', $(this).is(':visible'));
        });
    });


   // ---------------- Min menu page ----------------
	$('#min-menu-page li.have-child > a').click(function(){
		$(this).parent().find('ul:first').slideToggle(function(){
            if(!$(this).is(":hidden")){ // Open
                $(this).parent('.have-child').addClass('expand');
            }else{
                $(this).parent('.have-child').removeClass('expand');
            }
        });
		return false;
	});

	// ---------------- Filter ----------------
	$('#filter header .expand').click(function(){
		$('#filter main').slideToggle(300);
    });


    $('#list-item-select .list-item').owlCarousel({
        merge:true,
        loop: false,
        margin: 6,
        autoplay: false,
        autoplayTimeout: 8000,
        slideBy: 1,
        items: 10
    });

    $('.item-select select').niceSelect();  




    
});