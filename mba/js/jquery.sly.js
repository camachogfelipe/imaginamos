/*!
 * jQuery Sly v0.9.7
 * https://github.com/Darsain/sly
 *
 * Development state, license not yet determined.
 */
/*jshint
	bitwise:false, camelcase:false, curly:true, eqeqeq:false, forin:false, immed:true, latedef:true, newcap:true,
	noarg:true, noempty:true, nonew:false, plusplus:false, quotmark:false, regexp:false, undef:true, unused:true,
	strict:true, trailing:true,

	asi:false, boss:false, debug:false, eqnull:true, es5:false, esnext:false, evil:false, expr:false, funcscope:false,
	iterator:false, lastsemic:false, laxbreak:false, laxcomma:true, loopfunc:false, multistr:false, onecase:true,
	proto:false, regexdash:false, scripturl:false, smarttabs:true, shadow:false, sub:false, supernew:false,

	browser:true
*/
/*global jQuery:false */
;(function ($, undefined) {
	'use strict';

	// Plugin names
	var pluginName = 'sly',
		namespace = pluginName;

	/**
	 * Plugin class
	 *
	 * @class
	 *
	 * @param {Element} frame DOM element of sly container
	 * @param {Object}  o     Object with plugin options
	 */
	function Plugin(frame, o) {

		// Alias for this
		var self = this,

			// Frame variables
			$frame     = $(frame),
			$slidee    = $frame.children().eq(0),
			frameSize  = 0,
			slideeSize = 0,
			pos        = {
				cur: 0,
				max: 0,
				min: 0
			},

			// Scrollbar variables
			$sb        = $(o.scrollBar).eq(0),
			$handle    = $sb.length ? $sb.children().eq(0) : 0,
			sbSize     = 0,
			handleSize = 0,
			hPos       = {
				cur: 0,
				max: 0,
				min: 0
			},

			// Pagesbar variables
			$pb    = $(o.pagesBar),
			$pages = 0,
			pages  = [],

			// Navigation type booleans
			basicNav    = o.itemNav === 'basic',
			smartNav    = o.itemNav === 'smart',
			forceCenteredNav = o.itemNav === 'forceCentered',
			centeredNav = o.itemNav === 'centered' || forceCenteredNav,
			itemNav     = basicNav || smartNav || centeredNav || forceCenteredNav,

			// Other variables
			$items = 0,
			items  = [],
			rel    = {
				firstItem: 0,
				lastItem: 1,
				centerItem: 1,
				activeItem: -1,
				activePage: 0,
				items: 0,
				pages: 0
			},
			$scrollSource   = o.scrollSource ? $(o.scrollSource) : $frame,
			$dragSource     = o.dragSource ? $(o.dragSource) : $frame,
			$prevButton     = $(o.prev),
			$nextButton     = $(o.next),
			$prevPageButton = $(o.prevPage),
			$nextPageButton = $(o.nextPage),
			cycleIndex      = 0,
			cycleIsPaused   = 0,
			isDragging      = 0;

		/**
		 * (Re)Loading function.
		 *
		 * Populate arrays, set sizes, bind events, ...
		 *
		 * @public
		 *
		 * @return {Void}
		 */
		var load = this.reload = function () {
			// Local variables
			var ignoredMargin = 0,
				oldPos        = $.extend({}, pos);

			// Clear cycling timeout
			clearTimeout(cycleIndex);

			// Reset global variables
			frameSize  = o.horizontal ? $frame.width() : $frame.height();
			sbSize     = o.horizontal ? $sb.width() : $sb.height();
			slideeSize = o.horizontal ? $slidee.outerWidth() : $slidee.outerHeight();
			$items     = $slidee.children();
			items      = [];
			pages      = [];

			// Set position limits & relatives
			pos.min = 0;
			pos.max = Math.max(slideeSize - frameSize, 0);
			rel.items = $items.length;

			// Sizes & offsets for item based navigations
			if (itemNav) {
				var marginStart  = getPx($items, o.horizontal ? 'marginLeft' : 'marginTop'),
					marginEnd    = getPx($items.slice(-1), o.horizontal ? 'marginRight' : 'marginBottom'),
					centerOffset = 0,
					paddingStart = getPx($slidee, o.horizontal ? 'paddingLeft' : 'paddingTop'),
					paddingEnd   = getPx($slidee, o.horizontal ? 'paddingRight' : 'paddingBottom'),
					areFloated   = $items.css('float') !== 'none';

				// Update ignored margin
				ignoredMargin = marginStart ? 0 : marginEnd;

				// Reset slideeSize
				slideeSize = 0;

				// Iterate through items
				$items.each(function (i, item) {
					// Item
					var $item        = $(item),
						itemSize     = o.horizontal ? $item.outerWidth(true) : $item.outerHeight(true),
						marginTop    = getPx($item, 'marginTop'),
						marginBottom = getPx($item, 'marginBottom'),
						marginLeft