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
	//icono apartado que contiene submenu
	const submenu = document.getElementsByClassName("menu-item-has-children");
	for(let i = 0; i < submenu.length; i++){
		submenu[i].firstElementChild.innerHTML+= " <i class='bi-chevron-down' style='font-size: 0.75rem; color: #fff;'></i>";
	}
	//Icono de Inicio
	document.getElementById("menu-item-77").firstChild.textContent="";
	document.getElementById("menu-item-77").firstChild.innerHTML="<i class='bi-house-door-fill' style='font-size:1rem'></i>";
	//EFECTO BUSCADOR
	document.getElementById("buscador").addEventListener("focus",function(){
		this.className+=" on-focus";
	});
	document.getElementById("buscador").addEventListener("focusout",function(){
		this.className="search-field";
	});
	//Boton Menu Responsive
	const menubutton = document.getElementsByClassName("menu-toggle");
	for(let i=0; i<menubutton.length; i++){
		menubutton[i].innerHTML="<i class='bi-list' style='font-size: 1.8rem'></i>"
	}
	//Logo Responsive
	const parentrrss = document.getElementsByClassName("menu-menu-principal-container");
	const divlogo_responsive = document.createElement("div");
	divlogo_responsive.className="logo-menu-responsive"
	divlogo_responsive.innerHTML="<img src='http://192.168.3.216/wordpress/wp-content/uploads/2021/03/logo-molina-responsive.jpg' alt=''>";
	for(let i = 0; i < parentrrss.length; i++){
		//insertar logo portal
		document.getElementById("site-navigation").insertBefore(divlogo_responsive,parentrrss[i]);
	}
	//Reloj Dinámico
	function iniciarReloj(){
		var horaActual = new Date();
		var hora = horaActual.getHours();
		var minutos = horaActual.getMinutes();
		var segundos = horaActual.getSeconds();
		if(hora<10){
			hora = "0"+hora;
		}
		if(minutos<10){
			minutos = "0"+minutos
		}
		if(segundos<10){
			segundos = "0"+segundos
		}

		var mostrarHora = " "+hora + ":" + minutos + ":" + segundos;
		document.getElementById("reloj").textContent=mostrarHora;
		setTimeout(iniciarReloj,1000);
	}
	iniciarReloj();
}() );
