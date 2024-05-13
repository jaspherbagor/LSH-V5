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

    $(document).ready(function(){
        var header = $('body');
        
        var backgrounds = new Array(
            'url(../../uploads/1.jpg)',
            'url(../../uploads/2.jpg)',
            'url(../../uploads/3.jpg)',
            'url(../../uploads/4.jpg)',
            'url(../../uploads/5.jpg)',
            'url(../../uploads/6.jpg)',
            'url(../../uploads/7.jpg)'
        );
        
        var current = 0;
        
        
        function nextBackground() {
            header.css('opacity', 1); // Fade out the current background
            setTimeout(function() {
                current++;
                current = current % backgrounds.length;
                header.css('background-image', backgrounds[current]);
                header.css('opacity', 1); // Fade in the new background
            }, 1000); // Wait for 1 second (same duration as the CSS transition)
        }
        setInterval(nextBackground, 3500);
        
        header.css('background-image', backgrounds[0]);
    });

    $('.datepicker').datepicker({ format: "dd/mm/yyyy" });
    $('.timepicker').timepicker({
        icons:
        {
            up: 'fa fa-angle-up',
            down: 'fa fa-angle-down'
        }
    });

})(jQuery);
