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
	document.getElementById("menu-item-22").firstChild.textContent="";
	document.getElementById("menu-item-22").firstChild.innerHTML="<i class='bi-house-door-fill' style='font-size:1rem'></i>";
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
	function modalNewsletter(){
		setTimeout(function(){
			document.getElementById("mc4wp-form-1").innerHTML+='<div class="seleccion-categorias-newsletter-parent modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Selección de Categorías</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="cerrar"></button></div><div class="seleccion-categorias-newsletter modal-body" id="seleccion-categorias-newsletter-id"></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button><button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button></div></div></div></div>';
			var categorias_newsletter = document.getElementById("categorias-newsletter-id").cloneNode(true);
			document.getElementById("seleccion-categorias-newsletter-id").appendChild(categorias_newsletter);
		})
	}
	modalNewsletter();

	function cambiarUrlTiempo() {
		setTimeout(function(){ document.getElementById("tiempo-widget-enlace").firstChild.href="http://www.aemet.es/es/eltiempo/prediccion/municipios/molina-de-segura-id30027"; }, 5000);
	}
	cambiarUrlTiempo();
}() );
