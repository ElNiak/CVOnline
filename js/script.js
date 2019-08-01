$(document).ready(function() {
    // Add scrollspy to <body>
    $('body').scrollspy({target: ".navbar", offset: -20}); //bug

    // Add smooth scrolling on all links inside the navbar
    $(".navbar li a,#up").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top-20
            }, 700, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });

        } // End if

    });

    //Change CSS of portfolio items
    $(".bigger").hover(function(){
        $(this).addClass("border-danger");
        var i = $(this).width()+3;
        $(this).width(i);
    }, function() {
        $(this).removeClass("border-danger");
        var i = $(this).width()-3;
        $(this).width(i);
    });

    $('body').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });
});

