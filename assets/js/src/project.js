'use strict';
( function( $ ) {

	$( function() {

		$( function() {

			$( '.issue' ).matchHeight();

			$( '.issue .content' ).matchHeight();

			$( '.issue .issue-title' ).matchHeight();

		} );

		var $searchForm = $( '.search-form' );

		function navResize() {
			var winW = window.innerWidth;
			var appended = false;

			if ( winW < 544 && !appended ) {
				appended = true;
				$searchForm.appendTo( '.mobile-nav .submenu' );
			}
		}
		navResize();

		function shortContent() {

			var winHeight = $( window ).height();

			var bodyHeight = $( 'body' ).height();

			if ( winHeight > bodyHeight ) {
				$( 'footer' ).addClass( 'shortContent' );
			}
		}
		shortContent();

		$( '.mobile-nav .toggle' ).click( function( event ) {
			event.preventDefault;
			$( '.mobile-nav .submenu' ).toggleClass( 'hide' );
		} );
		$( '.tablet-nav .toggle' ).click( function( event ) {
			event.preventDefault;
			$( '.tablet-nav .submenu' ).toggleClass( 'hide' );
		} );

		// window scale execute functions
		$( window ).resize( function() {
			navResize();
			shortContent();
		} );

		$( '.tablet-nav #search-icon' ).click( function( event ) {

			event.preventDefault;
			$( '.search-form' ).css( 'top', '-0.5rem' );

		} );

		$( '#search-icon' ).click( function( event ) {

			event.preventDefault;
			$( '.search-form' ).css( 'top', '-0.5rem' );

		} );

		$( '#search-close' ).click( function( event ) {

			event.preventDefault;
			$( '.search-form' ).css( 'top', '-10rem' );

		} );

		$( 'a' ).not( '[href*="mailto:"]' ).each( function() {
			var isInternalLink = new RegExp( '/' + window.location.host + '/' );

			if ( !isInternalLink.test( this.href ) ) {
				$( this ).attr( 'target', '_blank' );
			}
		} );

		$( window ).scroll( function() {
			var headerHeight = $( '.site-header' ).height();

			var heroHeight = $( '.hero' ).height();

			var scroll = $( window ).scrollTop();

			if ( scroll >= headerHeight ) {
				$( '.site-header' ).addClass( 'stick' );
			} else {
				$( '.site-header' ).removeClass( 'stick' );
			}

			if ( scroll >= heroHeight ) {
				$( '.hero' ).css( 'z-index', '-2' );
			} else {
				$( '.hero' ).css( 'z-index', '0' );
			}

		} );

	} );

} )( jQuery );
