(function($){

    "use strict";

    $(".inputtags").tagsinput('items');

    $(document).ready(function() {
        $('#example1').DataTable();
    });

    $('.icp_demo').iconpicker();

    $(document).ready(function() {
        $('.snote').summernote();
    });

    // $(document).ready(function(){
    //     var header = $('body');
        
    //     var backgrounds = new Array(
    //         'url(https://assets.hiphotels.com/images/media/518819/brown_s_hotel_er_17.jpg)',
    //         'url(https://celebratedexperiences.com/app/uploads/2016/09/BRO-misc-34-1152x768.jpg)',
    //         'url(https://celebratedexperiences.com/app/uploads/2016/09/BRO-room-Classic-Suite6-1536x1024.jpg)',
    //         'url(https://cdn.kiwicollection.com/media/room_images/PR003135/xl/pr003135-c1s-deluxesuite.jpg)'
    //     );
        
    //     var current = 0;
        
        
    //     function nextBackground() {
    //         header.css('opacity', 1); // Fade out the current background
    //         setTimeout(function() {
    //             current++;
    //             current = current % backgrounds.length;
    //             header.css('background-image', backgrounds[current]);
    //             header.css('opacity', 1); // Fade in the new background
    //         }, 1000); // Wait for 1 second (same duration as the CSS transition)
    //     }
    //     setInterval(nextBackground, 3500);
        
    //     header.css('background-image', backgrounds[0]);
    // });

    $('.datepicker').datepicker({ format: "dd/mm/yyyy" });
    $('.timepicker').timepicker({
        icons:
        {
            up: 'fa fa-angle-up',
            down: 'fa fa-angle-down'
        }
    });

})(jQuery);
