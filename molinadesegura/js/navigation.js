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
	const buscador = document.getElementById("primary-menu");
	buscador.innerHTML+="<form role='search' method='get' class='search-form' action='http://172.28.0.120/'>"+
	"<button type='submit' class='search-submit'><i class='bi-search'></i></button>"+
	"<label><span class='screen-reader-text'>Buscar:</span><input type='search'name='s' class='search-field' id='buscador' placeholder='Buscador' value></label></form>";
	//Icono de Inicio
	document.getElementById("menu-item-22").firstChild.textContent="";
	document.getElementById("menu-item-22").firstChild.innerHTML="<i class='bi-house-door-fill' style='font-size:1rem'></i>";
	//Buscador Navegador
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
	//menu responsive links rrss
	const divrrss_responsive = document.getElementById("clon-responsive");
	const divrrss_responsive_clon = divrrss_responsive.cloneNode(true);
	divrrss_responsive_clon.className="social-media social-media-responsive";
	const parentrrss = document.getElementsByClassName("menu-menu-principal-container");
	for(let i = 0; i < parentrrss.length; i++){
		parentrrss[i].appendChild(divrrss_responsive_clon);
	}
	//menu responsive logo portal
	const divlogo_responsive = document.createElement("div");
	divlogo_responsive.className="logo-menu-responsive"
	divlogo_responsive.innerHTML="<img src='http://172.28.0.120/wp-content/uploads/2021/03/logo-molina-responsive.jpg' alt=''>";
	for(let i = 0; i < parentrrss.length; i++){
		//insertar logo portal
		document.getElementById("site-navigation").insertBefore(divlogo_responsive,parentrrss[i]);
		const buscador_responsive = document.createElement("div");
		//insertar buscador en menu responsive
		buscador_responsive.className="div-form-responsive";
		buscador_responsive.innerHTML = "<form role='search' method='get' class='search-form search-form-responsive' action='http://172.28.0.120/'>"+
		"<button type='submit' class='search-submit'><i class='bi-search'></i></button>"+
		"<label><span class='screen-reader-text'>Buscar:</span><input type='search'name='s' class='search-field' id='buscador_responsive' placeholder='Buscador' value></label></form>";
		document.getElementById("site-navigation").insertBefore(buscador_responsive,parentrrss[i]);
	}
	//eventos buscador responsive
	document.getElementById("buscador_responsive").addEventListener("focus",function(){
		this.className+=" on-focus";
	});
	document.getElementById("buscador_responsive").addEventListener("focusout",function(){
		this.className="search-field";
	});
	//Cambiar texto botones paginacion galeria de videos
	const pag = document.getElementsByClassName("pagination");
	for(i=0;i<pag.length;i++){
		for(z=0;z<pag[i].children.length;z++){
			pag[i].children[z].firstElementChild.style.setProperty("background-color", "#850037", "important");
			pag[i].children[z].firstElementChild.style.setProperty("border-color", "#850037", "important");
			pag[i].children[z].firstElementChild.style.setProperty("color", "#fff", "important");
			pag[i].children[z].firstElementChild.addEventListener("mouseover",function(event){
				event.target.style.setProperty("background-color","#fff","important");
				event.target.style.setProperty("border-color", "#fff", "important");
				event.target.style.setProperty("color","#850037","important");
			});
			pag[i].children[z].firstElementChild.addEventListener("mouseout",function(event){
				event.target.style.setProperty("background-color", "#850037", "important");
				event.target.style.setProperty("border-color", "#850037", "important");
				event.target.style.setProperty("color", "#fff", "important");
			});
		}
		pag[i].firstElementChild.firstElementChild.textContent="<";
		pag[i].firstElementChild.firstElementChild.style.setProperty("border-radius", "0.5rem", "important");
		pag[i].lastElementChild.firstElementChild.textContent=">";
		pag[i].lastElementChild.firstElementChild.style.setProperty("border-top-right-radius", "0.5rem", "important");
		pag[i].lastElementChild.firstElementChild.style.setProperty("border-bottom-right-radius", "0.5rem", "important");
	}
	var aux = document.getElementsByClassName("mec-holding-status-expired");
	for(i=0;i<aux.length;i++){
		aux[i].textContent="Evento Finalizado"
	}
	aux = document.getElementsByClassName("mec-booking-button");
	for(i=0;i<aux.length;i++){
		aux[i].textContent="Ver";
	}
	function limiteGridCalendar(){
		aux = document.getElementsByClassName("mec-color-hover")
		for(i=0; i<aux.length;i++){
			if(aux[i].textContent.length>40){
				var a = aux[i].textContent;
				aux[i].textContent = a.substr(0,40)+"...";
			}
		}
	}
	if(document.readyState=="loading"){
		limiteGridCalendar();
	}
	/*Contenedor seleccion categorias newsletter*/
	document.getElementById("mc4wp-form-1").innerHTML+='<div class="seleccion-categorias-newsletter-parent display-none" id="seleccion-categorias-newsletter-parent-id"><div class="seleccion-categorias-newsletter popup" id="seleccion-categorias-newsletter-id"><button class="btn-newsletter-cerrar" id="seleccion-newsletter-cerrar"><i class="bi bi-x-circle"></i></button></div></div>';
	var categorias_newsletter = document.getElementById("categorias-newsletter-id").cloneNode(true);
	document.getElementById("seleccion-categorias-newsletter-id").appendChild(categorias_newsletter);
	document.getElementById("seleccion-categorias-newsletter-id").innerHTML+='<button class="btn-newsletter-aceptar" id="seleccion-newsletter-aceptar"><i class="bi bi-check-circle"></i></button>';
	var elegir_preferencias = document.getElementById("elegir-preferencias");
	elegir_preferencias.addEventListener("click",function(){
		document.getElementById("seleccion-categorias-newsletter-parent-id").classList="seleccion-categorias-newsletter-parent display-flex";
		document.getElementById("seleccion-categorias-newsletter-id").style.left="auto";
	});
	document.getElementById("seleccion-newsletter-cerrar").addEventListener("click",function(){
		document.getElementById("seleccion-categorias-newsletter-parent-id").classList="seleccion-categorias-newsletter-parent display-none";
	});
	document.getElementById("seleccion-newsletter-aceptar").addEventListener("click",function(){
		document.getElementById("seleccion-categorias-newsletter-parent-id").classList="seleccion-categorias-newsletter-parent display-none";
	})
}() );
