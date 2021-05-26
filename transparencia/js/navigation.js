/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation don't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button don't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );
function startJS(){
	function limiteTextoActualidad(){
		var aux = document.getElementsByClassName("entry-content");
		var aux2 = document.getElementById("div-actualidad");
		for(i=0; i<aux.length;i++){
			if (aux[i].parentElement.parentElement==aux2){
				if(aux[i].textContent.length>80){
					var a = aux[i].textContent;
					aux[i].textContent = a.substr(0,80)+"...";
				}
			}
		}
	}
	limiteTextoActualidad();
	var buscador = document.getElementById("mega-menu-menu-1");
	buscador.innerHTML+="<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-12'><form role='search' method='get' class='search-form' action='http://172.28.0.120/'>"+
	"<button type='submit' class='search-submit'><i class='bi-search' data-toggle='tooltip' data-placement='bottom' title='Buscar'></i></button>"+
	"<label><span class='screen-reader-text'>Buscar:</span><input type='search'name='s' class='search-field' id='buscador' placeholder='Buscador' value></label></form></li>"+
	"<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-12'><a href='#' class='btn-contacto'><i class='bi bi-telephone-fill' data-toggle='tooltip' data-placement='bottom' title='Contacto'></i></a>";
	
	$("#buscador").focusin(function(){
		$(this).addClass("on-focus");
	});
	$("#buscador").focusout(function(){
		$(this).removeClass("on-focus");
	});
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});
	$("#mega-menu-menu-1").addClass("max-width-content");
}
window.onload=startJS;
