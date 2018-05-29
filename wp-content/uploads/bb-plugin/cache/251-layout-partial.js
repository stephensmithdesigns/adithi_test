
jQuery(function($){$(function(){$('.fl-node-5b09a25848fc9 .fl-photo-img').on('mouseenter',function(e){$(this).data('title',$(this).attr('title')).removeAttr('title');}).on('mouseleave',function(e){$(this).attr('title',$(this).data('title')).data('title',null);});});});(function($){var $window=$(window),$stick=$(".stickysidebar");function resize(){if($window.width()>768){return $stick.addClass('stick');}
$stick.removeClass('stick');}
$window.resize(resize).trigger('resize');})(jQuery);