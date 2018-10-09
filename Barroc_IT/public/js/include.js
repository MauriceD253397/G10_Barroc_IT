$(document).ready(function() {
    //window_size = $(window).height();
    //$('.content-field, .menu-field').height(window_size);

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
        $('.collapsible').collapsible();
    });

    $(".secondAddress").hide();

    $(":checkbox").click(function(event) {
        if ($(this).is(":checked"))
            $(".secondAddress").show();
        else
            $(".secondAddress").hide();
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
        $('.modal').modal();
    });

});