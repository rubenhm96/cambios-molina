jQuery(window).on('load',function()
{
    
    jQuery('.qc-grid').packery({
      itemSelector: '.qc-grid-item',
      gutter: 10
    });
    setTimeout(function(){
		jQuery(window).trigger('resize');    
    },200);

});

jQuery(window).resize(function()
{
    
    jQuery('.qc-grid').packery({
      itemSelector: '.qc-grid-item',
      gutter: 10
    });

});


jQuery(document).ready(function($)
{
	$("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $("#opd-list-holder ul li").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
    });

});
