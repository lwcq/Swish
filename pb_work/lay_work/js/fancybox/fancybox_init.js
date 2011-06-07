$(document).ready(function() {

	/* This is basic - uses default settings */
	
	/*$("a#login").fancybox();*/
	
	/* Using custom settings */
	
/*	$("a#inline").fancybox({
		'hideOnContentClick': true
	});
*/
	/* Apply fancybox to multiple items */
	
	$("a.login").fancybox({
        'padding' : 20,
	});
    
   	$("a.register").fancybox({
        'padding' : 20,
	});
    
    
	
});