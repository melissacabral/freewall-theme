/**
 * Custom scripts for Freewall theme
 */

//Don't forget noconflict wrapper
jQuery(document).ready(function($) {
	/**
	 * Activate freewall 
	 */

	 $(function() {
	 	var wall = new freewall("#container");
	 	wall.reset({
	 		selector: '.item',
	 		animate:true,
	 		cellW: 100,  //smallest grid unit
			cellH: 100,  //or 'auto'
			onResize: function() {
						wall.fitWidth(); 
					}
	 		});
	 	wall.fitWidth();
	 });
});
