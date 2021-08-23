<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cultura
 */

get_header();
?>

	<main id="primary" class="site-main max-width-content">
	 <!-- Error Page -->
		 <div class="row error">
                <div class="container-floud">
                    <div class="col-xs-12 ground-color text-center">
                        <div class="container-error-404">
                            <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                            <div class="msg">OH!<span class="triangle"></span></div>
                        </div>
                        <h2 class="h1">¡Lo Sentimos! Página no Encontrada</h2>
						<h2 class="h1"><a href="/bibliotecas/" class="btn-404">Ir a Inicio</a></h2>
                    </div>
                </div>
            </div>
        <!-- Error Page -->
		<script>
			function randomNum()
	{
		"use strict";
		return Math.floor(Math.random() * 9)+1;
	}
		var loop1,loop2,loop3,time=60, i=0, number, selector3 = document.querySelector('.thirdDigit'), selector2 = document.querySelector('.secondDigit'),
			selector1 = document.querySelector('.firstDigit');
		loop3 = setInterval(function()
		{
		  "use strict";
			if(i > 40)
			{
				clearInterval(loop3);
				selector3.textContent = 4;
			}else
			{
				selector3.textContent = randomNum();
				i++;
			}
		}, time);
		loop2 = setInterval(function()
		{
		  "use strict";
			if(i > 80)
			{
				clearInterval(loop2);
				selector2.textContent = 0;
			}else
			{
				selector2.textContent = randomNum();
				i++;
			}
		}, time);
		loop1 = setInterval(function()
		{
		  "use strict";
			if(i > 100)
			{
				clearInterval(loop1);
				selector1.textContent = 4;
			}else
			{
				selector1.textContent = randomNum();
				i++;
			}
		}, time);
		</script>

	</main><!-- #main -->

<?php
get_footer();
