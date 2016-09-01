// poster frame click event
$(document).on('click','.js-videoPoster',function(ev) {
  ev.preventDefault();
  var $poster = $(this);
  var $wrapper = $poster.closest('.js-videoWrapper');
  videoPlay($wrapper);
});

// play the targeted video (and hide the poster frame)
function videoPlay($wrapper) {
  var $iframe = $wrapper.find('.js-videoIframe');
  var src = $iframe.data('src');
  // hide poster
  $wrapper.addClass('videoWrapperActive');
  // add iframe src in, starting the video
  $iframe.attr('src',src);
}

// stop the targeted/all videos (and re-instate the poster frames)
function videoStop($wrapper) {
  // if we're stopping all videos on page
  if (!$wrapper) {
    var $wrapper = $('.js-videoWrapper');
    var $iframe = $('.js-videoIframe');
  // if we're stopping a particular video
  } else {
    var $iframe = $wrapper.find('.js-videoIframe');
  }
  // reveal poster
  $wrapper.removeClass('videoWrapperActive');
  // remove youtube link, stopping the video from playing in the background
  $iframe.attr('src','');
}

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
  
  
  if (window.location.hash) {
	  var hash = window.location.hash;
	  var modalId = hash.replace(/[^0-9]+/g, '');
	  $('#' + modalId).modal('show');
  }
  
  
  
  
  
});


$('body').scrollspy();

$('.collection_object-overlay-btn').on('click', function (event) {
	$(this).parent().addClass('hidden');
});











$('li.dropdown a').on('click', function (event) {
    $(this).parent().toggleClass('open');
    if ($('.dropdown-menu').hasClass('fadeOut')) {
	    $('.dropdown-menu').removeClass('fadeOut').addClass('fadeInDown');
	} else if (!$('.dropdown-menu').hasClass('fadeInDown')) {
		$('.dropdown-menu').addClass('fadeInDown');
	} else {
		//$('.dropdown-menu').removeClass('fadeInDown').addClass('fadeOut');
	}
	 
});





$('body').on('click', function (e) {
	    if (!$('li.dropdown').is(e.target) 
        && $('li.dropdown').has(e.target).length === 0 
        && $('.open').has(e.target).length === 0
    ) {
        $('li.dropdown').removeClass('open');
        $('.dropdown-menu').removeClass('fadeInDown').addClass('fadeOut');
    }
});


var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');

$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().parent().parent().addClass('active');


$(document).ready(function(){


	$('span.moderator-wrapper').find('.speaker-block').addClass('moderator');
	
		
  $('.about-video-slider-wrapper').slick({
    dots: true,
    arrows: false,
    variablewidth: true
  });
  
  
});
		