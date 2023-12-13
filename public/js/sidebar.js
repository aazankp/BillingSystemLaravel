$(document).ready(function(){
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        width = window.innerWidth
        if(width > 768){
            $("#wrapper").toggleClass("toggled-2");
            $('#menu ul').hide();
        }else{
            $("#wrapper").toggleClass("toggled");
            $('#menu ul').hide();
        }
    });
    function initMenu() {
        $('#menu ul').hide();
        $('#menu ul').children('.current').parent().show();
        $('#menu li a').click(
            function() {
                var checkElement = $(this).next();
                if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    return false;
                }
                if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#menu ul:visible').slideUp('normal');
                    checkElement.slideDown('normal');
                    return false;
                }
            }
        );
    }

    initMenu();
});