jQuery(function($) {
	/**
	 * Inserts the body of a function into the beginning of another method
	 * defined in another scope/object
	 */
	function insert_code_in_another_methods_scope(scope, method_name, callback)
	{
		var scope_code = eval(scope).toString();
		var callback_code = callback.toString().replace(/[^\{]*{/, '').replace(/\}$/, '');
		var regex = new RegExp('(function '+method_name+'\\([^\\)]*\\)){');
		scope_code = scope_code.replace(regex, function(str, match){
			return str+callback_code;
		}).replace(/\$([\s\.\(=])/g, function(str, match){
			return 'jQuery'+match;
		});
		window.eval(scope+" = "+scope_code);
		return eval(scope);
	};

	// Adjusts the _resize_container_image_box() function to take into
	// consideration the size of the window and aspect ratio of the image
	insert_code_in_another_methods_scope('jQuery.fn.lightBox', '_resize_container_image_box', function(intImageWidth, intImageHeight){
		var $overlay		= jQuery('#jquery-overlay');
		var aspect_ratio	= intImageWidth / intImageHeight;
		var padding			= settings.containerBorderSize * 4;
		if (intImageWidth >= $overlay.width()) {
			var oldWidth	= intImageWidth;
			var oldHeight	= intImageHeight;
			intImageWidth	= $overlay.width()-padding;
			intImageHeight	= intImageHeight / aspect_ratio;
			var width_diff	= oldWidth - intImageWidth;
			var height_diff = oldHeight - intImageHeight;
			var $lightbox = jQuery('#jquery-lightbox');
			$lightbox.css({
				top:  $lightbox.css('top')-height_diff,
				left: $lightbox.css('left')-width_diff
			});
		}
		jQuery('#lightbox-image').css({
			width: intImageWidth,
			height: intImageHeight
		});
	});

	$('.ngg_lightbox').lightBox({
        imageLoading:  nextgen_lightbox_loading_img_url,
        imageBtnClose: nextgen_lightbox_close_btn_url,
        imageBtnPrev:  nextgen_lightbox_btn_prev_url,
        imageBtnNext:  nextgen_lightbox_btn_next_url,
        imageBlank:    nextgen_lightbox_blank_img_url
    });
});
