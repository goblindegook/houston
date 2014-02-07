(function ($) {
jQuery(document).ready(function($){

    p2txt.tagit = '';

	// Navigation
    if ( $(window).width() <= 768 ) {
        $( '#header ul.menu' ).hide();
        $( '#header .widget_search' ).hide();
    }
	$( '.site-navigation h1.assistive-text' ).click(function(e) {
        $( '#header ul.menu' ).slideToggle();
        $( '#header .widget_search' ).slideToggle();
    });

    // Add .parent class to appropriate menu items
    $( 'ul.sub-menu' ).parent().addClass( 'parent' );

    $( 'body' ).fitVids();

    // Also scroll to top when postbox textarea is focused
    $( '#postbox .inputarea textarea' ).focus(function () {
        $( 'body,html' ).animate({
            // scrollTop: 0
        }, 800);
        return false;
    });

    // Hide the tag / submit inputs until the postbox label is clicked
    $( '#postbox .inputs' ).hide();

    $('#post-prompt').click(function(e) {
        $(this).toggleClass( 'active' );
        $( '#postbox .inputs' ).slideToggle( 400 );
        $( '#posttext' ).focus();
        return false;
    });

    $('#post-types a').click(function(e) {
        $('.post-input').hide();
        $('#post-types a').removeClass('selected');
        $(this).addClass('selected');
        $('#postbox-type-' + $(this).attr('id')).show();
        return false;
    });

    $("#posttitle").blur(function(e) {
        if ($("#posttitle").val().length !== 0) {
            $('#post_format').val('');
        } else {
            $('#post_format').val('status');
        }
    });

});

jQuery(window).resize(function(){

    // Navigation
    if ( jQuery(window).width() > 768 ) {
        jQuery( '#header ul.menu' ).show();
    } else {
        jQuery( '#header ul.menu' ).hide();
    }

});
}(jQuery));