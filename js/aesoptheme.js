///////////////
///////////////
/// CALL METHODS
////////////////
////////////////


// actiave swipebox
jQuery(".swipebox, .wp-caption a").swipebox();

jQuery(document).ready(function() {

	// setup some js variables to use across the board
	var coverHeight = jQuery('.aesop-article-cover').height();
	var	windowHeight  = jQuery(window).height();
	var storylength = jQuery('.aesop-entry-content').height();


	// page fader
	jQuery('body').css('display', 'none');

	jQuery('body').fadeIn(500);

	jQuery('.aesop-fader, .aesop-story-chapters a').click(function(event) {
		event.preventDefault();
		newLocation = this.href;
		jQuery('body').fadeOut(400, newpage);
	});

	function newpage() {
		window.location = newLocation;
	}


	// In View Animations
	jQuery('.aesop-image-component, .aesop-audio-component').addClass('aesop-component-invisible');
	jQuery('.aesop-component-invisible').waypoint(function(direction) {
	   jQuery(this).toggleClass('aesop-component-visible');
	}, { offset: '80%' });

	// stacked gallery stuffs
	gallery = jQuery('.aesop-stacked-gallery-wrap');

	jQuery('.aesop-stacked-img').css({'height':(jQuery(window).height())+'px', 'width':(jQuery(window).width())+'px'});


	///////////////////
	//////////////////
	// article cover
	/////////////////
	/////////////////

	// set the cover to the size of the window
    jQuery('.aesop-article-cover, .aesop-article-chapter').css({'height':(jQuery(window).height())+'px'});
    // push content as far down as the cover is high due to it being fixed position
    jQuery('.aesop-entry-content').css({'margin-top':(jQuery(window).height())+'px'});

    // repeat the cover and content above on resize
    jQuery(window).resize(function(){
        jQuery('.aesop-article-cover, .aesop-chapter-cover').css({'height':(jQuery(window).height())+'px', 'width':(jQuery(window).width())+'px'});
    	jQuery('.aesop-entry-content').css({'margin-top':(jQuery(window).height())+'px'});
    });

	// get height of cover title
	var titleHeight = jQuery('.aesop-cover-title').height();
	// set the margin top of the title, to half of the height of the window minus half the height of the title
	var titleMarginTop = (windowHeight / 2) - (titleHeight / 2);
	jQuery('.aesop-cover-title').css({'margin-top':titleMarginTop});

    // when the top of the article breaches the bottom of the view port at 98% then fade out the cover title
	jQuery('.aesop-entry-content').waypoint(function(direction) {
	   jQuery('.aesop-article-cover-wrap .aesop-cover-title').fadeToggle();
	}, { offset: '98%' });

	// when the top of the article hits 35% from teh top of the screen fade out story cover meta
	jQuery('.aesop-entry-content').waypoint(function(direction) {
	   jQuery('.aesop-cover-meta,.aesop-share-count').fadeToggle();
	}, { offset: '35%' });

	// when the top of the article hits the top of the screen fade in story header 
	// if the story length is shorter than the height of the window then trigger the fixed header early
	if (storylength > windowHeight) {
		jQuery('.aesop-entry-content').waypoint(function(direction) {
		   jQuery('.aesop-story-header').toggleClass('fixed');
		});
	} else {
		jQuery('.aesop-entry-content').waypoint(function(direction) {
		   jQuery('.aesop-story-header').toggleClass('fixed');
		}, { offset: '100%' });
	}

	///////////////////
	//////////////////
	// end article cover
	/////////////////
	/////////////////

	// set height of home article to half the height of the window and account for admin bar and load more posts btn
	var adminbar = jQuery('#wpadminbar').outerHeight();
	var homearticle  = jQuery('.aesop-collection-grid .aesop-collection-item');
	var morePostsBtn = jQuery('.aesop-load-more-posts').outerHeight();
	var totalOffsets = adminbar + morePostsBtn;
	jQuery(homearticle).css({'height':(windowHeight - totalOffsets) / 2});

});

jQuery(window).load(function() {
   	jQuery("#aesop-loading").fadeOut(function() {
        jQuery(this).hide(); // Optional if it's going to only be used once.
   	});
});