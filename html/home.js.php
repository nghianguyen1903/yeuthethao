<script type="text/javascript">
    $(document).ready(function() {
        $('#score-live .list-item').owlCarousel({
            loop: true,
            margin: 36,
            autoplay: false,
            autoplayTimeout: 8000,
            slideBy: 1,
            items: 1
        });
        // -- Control -- 
        var listRoll = $("#score-live .list-item").owlCarousel();
        // Next
        $('#score-live .next').click(function(){
            listRoll.trigger('next.owl.carousel');
            return false;
        });
        // Prev
        $('#score-live .prev').click(function(){
            listRoll.trigger('prev.owl.carousel');
            return false;
        });
    	// tab tab-league-table
    	$('#tab-league-table').tabify();
    	
        $(window).on("load",function(){ 
            $("#hot-news").mCustomScrollbar({
                // theme:"minimal"
            });
            $("#last-news").mCustomScrollbar({
                // theme:"minimal"
            });
            $("#box-premier-league").mCustomScrollbar({
                // theme:"minimal"
            });
            $("#list-box-vn").mCustomScrollbar({
                // theme:"minimal"
            });
            $("#table-bxh").mCustomScrollbar({
                // theme:"minimal"
            });
        });
        $(window).on("load resize", function() {
        	var height_box_hot = $('.display-flex .content-left').height();
        	console.log(height_box_hot);
        	$('.content-box-scroll').css('height', height_box_hot - 29);
        })
    });
    
</script>