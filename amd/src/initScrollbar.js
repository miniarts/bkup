define(['jquery', 'theme_bloom/jquery.doubleScroll'], function($, doubleScroll) {

    var scroll = function(){

        //$(document).ready(function() {
           
          // $('.generaltable.flexible, .gradereport-grader-table, .reporttable table, .user-grade, .admintable, .grade-report-user table, #outlinetable, .submissions').wrap('<div class="table-wrapper"></>');
           $('#region-main table').wrap('<div class="table-wrapper"></>');
    
            var options = {
                    contentElement: undefined, // Widest element, if not specified first child element will be used
                    scrollCss: {                
                        'overflow-x': 'auto',
                        'overflow-y': 'hidden'
                    },
                    contentCss: {
                        'overflow-x': 'auto',
                        'overflow-y': 'auto'
                    },
                    onlyIfScroll: true, // top scrollbar is not shown if the bottom one is not present
                    resetOnWindowResize: true // recompute the top ScrollBar requirements when the window is resized
                }
            

            if($('.table-wrapper').length){ 
                $('.table-wrapper').doubleScroll(options);
                $('#region-main').addClass('doubleScroll');
            }           
        //})
    },
    triggerScroll = function(){
        $(window).trigger('resize');
    }
    
    return {
        init: function(){
            "use strict"; 

            $(document).ready(function() {
                if($('.path-mod-assign').length || $('body').hasClass('path-mod-coursework') || $('body').hasClass('path-grade') || $('.path-report').length || 
                    $('#page-admin-tool-task-scheduledtasks').length || $('#page-course-user').length ){
                    scroll();
                    //$(window).trigger('resize'); //didn't work first time on the test site

                    $('.hide-nav').on('click', function(){
                        setTimeout(triggerScroll, 500);
                    })
                }
            });
        }
    };
});