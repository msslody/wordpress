( function( jQuery ){
 jQuery( document ).on( 'click', '.notice-info .notice-dismiss', function () {
        var type = jQuery( this ).closest( '.notice-info' ).data( 'notice' );
        jQuery.ajax( ajaxurl,
          {
            type: 'POST',
            data: {
              action: 'restaurant_chef_dismissed_notice_handler',
              type: type,
              wpnonce: restaurant_chef.wpnonce
            }
          } );
      } );
}( jQuery ) )