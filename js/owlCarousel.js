/*
 *	jQuery OwlCarousel v1.19
 *  
 *	Copyright (c) 2013 Bartosz Wojciechowski
 *	http://www.owlgraphic.com/owlcarousel
 *
 *	Licensed under MIT
 *
 */

if (typeof Object.create !== "function") {
	Object.create = function (e) {
		function t() {}
		t.prototype = e;
		return new t
	}
} (function (e, t, n, r) {
	var i = {
		init: function (t, n) {
			var r = this;
			r.options = e.extend({},
			e.fn.owlCarousel.options, t);
			var i = n;
			var s = e(n);
			r.$elem = s;
			r.logIn()
		},
		logIn: function () {
			var e = this;
			e.baseClass();
			e.$elem.css({
				opacity: 0
			});
			e.checkTouch();
			e.support3d();
			e.wrapperWidth = 0;
			e.currentSlide = 0;
			e.userItems = e.$elem.children();
			e.itemsAmount = e.userItems.length;
			e.wrapItems();
			e.owlItems = e.$elem.find(".owl-item");
			e.owlWrapper = e.$elem.find(".owl-wrapper");
			e.orignalItems = e.options.items;
			e.playDirection = "next";
			e.checkVisible;
			e.onStartup();
			e.customEvents()
		},
		onStartup: function () {
			var e = this;
			e.updateItems();
			e.calculateAll();
			e.buildControlls();
			e.updateControlls();
			e.response();
			e.moveEvents();
			e.stopOnHover();
			if (e.options.autoPlay === true) {
				e.options.autoPlay = 5e3
			}
			e.play();
			e.$elem.find(".owl-wrapper").css("display", "block");
			if (!e.$elem.is(":visible")) {
				e.watchVisibility()
			} else {
				setTimeout(function () {
					e.$elem.animate({
						opacity: 1
					},
					200)
				},
				10)
			}
			e.onstartup = false
		},
		updateVars: function () {
			var e = this;
			e.watchVisibility();
			e.updateItems();
			e.calculateAll();
			e.updatePosition();
			e.updateControlls()
		},
		reload: function (e) {
			var t = this;
			setTimeout(function () {
				t.updateVars()
			},
			0)
		},
		watchVisibility: function () {
			var e = this;
			clearInterval(e.checkVisible);
			if (!e.$elem.is(":visible")) {
				e.$elem.css({
					opacity: 0
				});
				clearInterval(e.autplaySpeed)
			} else {
				return false
			}
			e.checkVisible = setInterval(function () {
				if (e.$elem.is(":visible")) {
					e.reload();
					e.$elem.animate({
						opacity: 1
					},
					200);
					clearInterval(e.checkVisible)
				}
			},
			500)
		},
		wrapItems: function () {
			var e = this;
			e.userItems.wrapAll('<div class="owl-wrapper">').wrap('<div class="owl-item"></div>');
			e.$elem.find(".owl-wrapper").wrap('<div class="owl-wrapper-outer">');
			e.$elem.css("display", "block")
		},
		baseClass: function () {
			var e = this;
			var t = e.$elem.hasClass(e.options.baseClass);
			var n = e.$elem.hasClass(e.options.theme);
			if (!t) {
				e.$elem.addClass(e.options.baseClass)
			}
			if (!n) {
				e.$elem.addClass(e.options.theme)
			}
		},
		updateItems: function () {
			var n = this;
			if (n.options.responsive === false) {
				return false
			}
			if (typeof n.options.beforeUpdate === "function") {
				n.options.beforeUpdate.apply(this)
			}
			var r = e(t).width();
			if (r > (n.options.itemsDesktop[0] || n.orignalItems)) {
				n.options.items = n.orignalItems
			}
			if (r <= n.options.itemsDesktop[0] && n.options.itemsDesktop !== false) {
				n.options.items = n.options.itemsDesktop[1]
			}
			if (r <= n.options.itemsDesktopSmall[0] && n.options.itemsDesktopSmall !== false) {
				n.options.items = n.options.itemsDesktopSmall[1]
			}
			if (r <= n.options.itemsTablet[0] && n.options.itemsTablet !== false) {
				n.options.items = n.options.itemsTablet[1]
			}
			if (r <= n.options.itemsMobile[0] && n.options.itemsMobile !== false) {
				n.options.items = n.options.itemsMobile[1]
			}
			if (r <= n.options.itemsMobileSmall[0] && n.options.itemsMobileSmall !== false) {
				n.options.items = n.options.itemsMobileSmall[1]
			}
			if (n.options.items > n.itemsAmount) {
				n.options.items = n.itemsAmount
			}
			if (typeof n.options.afterUpdate === "function") {
				n.options.afterUpdate.apply(this)
			}
		},
		response: function () {
			var n = this,
			r;
			if (n.options.responsive !== true) {
				return false
			}
			e(t).resize(function () {
				if (n.options.autoPlay !== false) {
					clearInterval(n.autplaySpeed)
				}
				clearTimeout(r);
				r = setTimeout(function () {
					n.updateVars()
				},
				200)
			})
		},
		updatePosition: function () {
			var e = this;
			if (e.support3d === true) {
				if (e.positionsInArray[e.currentSlide] > e.maximumPixels) {
					e.transition3d(e.positionsInArray[e.currentSlide])
				} else {
					e.transition3d(0);
					e.currentSlide = 0
				}
			} else {
				if (e.positionsInArray[e.currentSlide] > e.maximumPixels) {
					e.css2slide(e.positionsInArray[e.currentSlide])
				} else {
					e.css2slide(0);
					e.currentSlide = 0
				}
			}
			if (e.options.autoPlay !== false) {
				e.checkAp()
			}
		},
		appendItemsSizes: function () {
			var t = this;
			var n = 0;
			var r = t.itemsAmount - t.options.items;
			t.owlItems.each(function (i) {
				e(this).css({
					width: t.itemWidth
				}).data("owl-item", Number(i));
				if (i % t.options.items === 0 || i === r) {
					if (! (i > r)) {
						n += 1
					}
				}
				e(this).data("owl-roundPages", n)
			})
		},
		appendWrapperSizes: function () {
			var e = this;
			var t = 0;
			var t = e.owlItems.length * e.itemWidth;
			e.owlWrapper.css({
				width: t * 2,
				left: 0
			});
			e.appendItemsSizes()
		},
		calculateAll: function () {
			var e = this;
			e.calculateWidth();
			e.appendWrapperSizes();
			e.loops();
			e.max()
		},
		calculateWidth: function () {
			var e = this;
			e.itemWidth = Math.round(e.$elem.width() / e.options.items)
		},
		max: function () {
			var e = this;
			e.maximumSlide = e.itemsAmount - e.options.items;
			var t = e.itemsAmount * e.itemWidth - e.options.items * e.itemWidth;
			t = t * -1;
			e.maximumPixels = t;
			return t
		},
		min: function () {
			return 0
		},
		loops: function () {
			var e = this;
			e.positionsInArray = [0];
			var t = 0;
			for (var n = 0; n < e.itemsAmount; n++) {
				t += e.itemWidth;
				e.positionsInArray.push( - t)
			}
		},
		buildControlls: function () {
			var t = this;
			if (t.options.navigation === true || t.options.pagination === true) {
				t.owlControlls = e('<div class="owl-controlls"/>').toggleClass("clickable", !t.isTouch).appendTo(t.$elem)
			}
			if (t.options.pagination === true) {
				t.buildPagination()
			}
			if (t.options.navigation === true) {
				t.buildButtons()
			}
		},
		buildButtons: function () {
			var t = this;
			var n = e('<div class="owl-buttons"/>');
			t.owlControlls.append(n);
			t.buttonPrev = e("<div/>", {
				"class": "owl-prev",
				text: t.options.navigationText[0] || ""
			});
			t.buttonNext = e("<div/>", {
				"class": "owl-next",
				text: t.options.navigationText[1] || ""
			});
			n.append(t.buttonPrev).append(t.buttonNext);
			n.on(t.getEvent(), 'div[class^="owl"]', function (n) {
				n.preventDefault();
				if (e(this).hasClass("owl-next")) {
					t.next()
				} else {
					t.prev()
				}
			})
		},
		getEvent: function () {
			var e = this;
			if (e.isTouch === true) {
				return "touchend.owlControlls"
			} else {
				return "click.owlControlls"
			}
		},
		buildPagination: function () {
			var t = this;
			t.paginationWrapper = e('<div class="owl-pagination"/>');
			t.owlControlls.append(t.paginationWrapper);
			t.paginationWrapper.on(t.getEvent(), ".owl-page", function (n) {
				n.preventDefault();
				if (Number(e(this).data("owl-page")) !== t.currentSlide) {
					t.goTo(Number(e(this).data("owl-page")), true)
				}
			})
		},
		updatePagination: function () {
			var t = this;
			if (t.options.pagination === false) {
				return false
			}
			t.paginationWrapper.html("");
			var n = 0;
			var r = t.itemsAmount - t.itemsAmount % t.options.items;
			for (var i = 0; i < t.itemsAmount; i++) {
				if (i % t.options.items === 0) {
					n += 1;
					if (r === i) {
						var s = t.itemsAmount - t.options.items
					}
					var o = e("<div/>", {
						"class": "owl-page"
					});
					var u = e("<span></span>", {
						text: t.options.paginationNumbers === true ? n: "",
						"class": t.options.paginationNumbers === true ? "owl-numbers": ""
					});
					o.append(u);
					o.data("owl-page", r === i ? s: i);
					o.data("owl-roundPages", n);
					t.paginationWrapper.append(o)
				}
			}
			t.checkPagination()
		},
		checkPagination: function () {
			var t = this;
			t.paginationWrapper.find(".owl-page").each(function (n, r) {
				if (e(this).data("owl-roundPages") === e(t.owlItems[t.currentSlide]).data("owl-roundPages")) {
					t.paginationWrapper.find(".owl-page").removeClass("active");
					e(this).addClass("active")
				}
			})
		},
		checkNavigation: function () {
			var e = this;
			if (e.options.navigation === false) {
				return false
			}
			if (e.currentSlide === 0 && e.maximumSlide === 0) {
				e.buttonPrev.addClass("disabled");
				e.buttonNext.addClass("disabled")
			} else if (e.currentSlide === 0 && e.maximumSlide !== 0) {
				e.buttonPrev.addClass("disabled");
				e.buttonNext.removeClass("disabled")
			} else if (e.currentSlide === e.maximumSlide) {
				e.buttonPrev.removeClass("disabled");
				e.buttonNext.addClass("disabled")
			} else if (e.currentSlide !== 0 && e.currentSlide !== e.maximumSlide) {
				e.buttonPrev.removeClass("disabled");
				e.buttonNext.removeClass("disabled")
			}
		},
		updateControlls: function () {
			var e = this;
			e.updatePagination();
			e.checkNavigation();
			if (e.options.items === e.itemsAmount) {
				e.owlControlls.hide()
			} else {
				e.owlControlls.show()
			}
		},
		destroyControlls: function () {
			var e = this;
			if (e.owlControlls) {
				e.owlControlls.remove()
			}
		},
		next: function (e) {
			var t = this;
			t.currentSlide += 1;
			if (t.currentSlide > t.maximumSlide) {
				t.currentSlide = t.maximumSlide;
				return false
			}
			t.goTo(t.currentSlide, e)
		},
		prev: function (e) {
			var t = this;
			t.currentSlide -= 1;
			if (t.currentSlide < 0) {
				t.currentSlide = 0;
				return false
			}
			t.goTo(t.currentSlide, e)
		},
		goTo: function (e, t) {
			var n = this;
			if (typeof n.options.beforeMove === "function") {
				n.options.beforeMove.apply(this)
			}
			if (e >= n.maximumSlide) {
				e = n.maximumSlide
			} else if (e <= 0) {
				e = 0
			}
			n.currentSlide = e;
			var r = n.positionsInArray[e];
			if (n.support3d === true) {
				n.isCss3Finish = false;
				if (t === true) {
					n.swapTransitionSpeed("paginationSpeed");
					setTimeout(function () {
						n.isCss3Finish = true
					},
					n.options.paginationSpeed)
				} else if (t === "goToFirst") {
					n.swapTransitionSpeed(n.options.goToFirstSpeed);
					setTimeout(function () {
						n.isCss3Finish = true
					},
					n.options.goToFirstSpeed)
				} else {
					n.swapTransitionSpeed("slideSpeed");
					setTimeout(function () {
						n.isCss3Finish = true
					},
					n.options.slideSpeed)
				}
				n.transition3d(r)
			} else {
				if (t === true) {
					n.css2slide(r, n.options.paginationSpeed)
				} else if (t === "goToFirst") {
					n.css2slide(r, n.options.goToFirstSpeed)
				} else {
					n.css2slide(r, n.options.slideSpeed)
				}
			}
			if (n.options.pagination === true) {
				n.checkPagination()
			}
			if (n.options.navigation === true) {
				n.checkNavigation()
			}
			if (n.options.autoPlay !== false) {
				n.checkAp()
			}
			if (typeof n.options.afterMove === "function") {
				n.options.afterMove.apply(this)
			}
		},
		stop: function () {
			var e = this;
			e.apStatus = "stop";
			clearInterval(e.autplaySpeed)
		},
		checkAp: function () {
			var e = this;
			if (e.apStatus !== "stop") {
				e.play()
			}
		},
		play: function () {
			var e = this;
			e.apStatus = "play";
			if (e.options.autoPlay === false) {
				return false
			}
			clearInterval(e.autplaySpeed);
			e.autplaySpeed = setInterval(function () {
				if (e.currentSlide < e.maximumSlide && e.playDirection === "next") {
					e.next(true)
				} else if (e.currentSlide === e.maximumSlide) {
					if (e.options.goToFirst === true) {
						e.goTo(0, "goToFirst")
					} else {
						e.playDirection = "prev";
						e.prev(true)
					}
				} else if (e.playDirection === "prev" && e.currentSlide > 0) {
					e.prev(true)
				} else if (e.playDirection === "prev" && e.currentSlide === 0) {
					e.playDirection = "next";
					e.next(true)
				}
			},
			e.options.autoPlay)
		},
		swapTransitionSpeed: function (e) {
			var t = this;
			if (e === "slideSpeed") {
				t.owlWrapper.css(t.addTransition(t.options.slideSpeed))
			} else if (e === "paginationSpeed") {
				t.owlWrapper.css(t.addTransition(t.options.paginationSpeed))
			} else if (typeof e !== "string") {
				t.owlWrapper.css(t.addTransition(e))
			}
		},
		addTransition: function (e) {
			var t = this;
			return {
				"-webkit-transition": "all " + e + "ms ease",
				"-moz-transition": "all " + e + "ms ease",
				"-o-transition": "all " + e + "ms ease",
				transition: "all " + e + "ms ease"
			}
		},
		removeTransition: function () {
			return {
				"-webkit-transition": "",
				"-moz-transition": "",
				"-o-transition": "",
				transition: ""
			}
		},
		doTranslate: function (e) {
			return {
				"-webkit-transform": "translate3d(" + e + "px, 0px, 0px)",
				"-moz-transform": "translate3d(" + e + "px, 0px, 0px)",
				"-o-transform": "translate3d(" + e + "px, 0px, 0px)",
				"-ms-transform": "translate3d(" + e + "px, 0px, 0px)",
				transform: "translate3d(" + e + "px, 0px,0px)"
			}
		},
		transition3d: function (e) {
			var t = this;
			t.owlWrapper.css(t.doTranslate(e))
		},
		css2move: function (e) {
			var t = this;
			t.owlWrapper.css({
				left: e
			})
		},
		css2slide: function (e, t) {
			var n = this;
			n.isCssFinish = false;
			n.owlWrapper.stop(true, true).animate({
				left: e
			},
			{
				duration: t || n.options.slideSpeed,
				complete: function () {
					n.isCssFinish = true
				}
			})
		},
		support3d: function () {
			var e = this;
			var t = "translate3d(0px, 0px, 0px)";
			var r = n.createElement("div");
			r.style.cssText = "  -moz-transform:" + t + "; -ms-transform:" + t + "; -o-transform:" + t + "; -webkit-transform:" + t + "; transform:" + t;
			var i = /translate3d\(0px, 0px, 0px\)/g;
			var s = r.style.cssText.match(i);
			var o = s !== null && s.length === 1;
			e.support3d = o;
			return o
		},
		checkTouch: function () {
			var e = this;
			e.isTouch = "ontouchstart" in n.documentElement
		},
		moveEvents: function () {
			var e = this;
			e.eventTypes();
			e.gestures();
			e.disabledEvents()
		},
		eventTypes: function () {
			var e = this;
			var t;
			e.ev_types = {};
			if (e.isTouch) {
				t = ["touchstart.owl", "touchmove.owl", "touchend.owl"]
			} else {
				t = ["mousedown.owl", "mousemove.owl", "mouseup.owl"]
			}
			e.ev_types["start"] = t[0];
			e.ev_types["move"] = t[1];
			e.ev_types["end"] = t[2]
		},
		disabledEvents: function () {
			var e = this;
			if (e.isTouch !== true) {
				e.$elem.on("dragstart.owl", "img", function (e) {
					e.preventDefault()
				});
				e.$elem.bind("mousedown.disableTextSelect", function () {
					return false
				})
			}
		},
		gestures: function () {
			function s(e) {
				if (t.isTouch === true) {
					return {
						x: e.touches[0].pageX,
						y: e.touches[0].pageY
					}
				} else {
					if (e.pageX !== r) {
						return {
							x: e.pageX,
							y: e.pageY
						}
					} else {
						return {
							x: e.clientX,
							y: e.clientY
						}
					}
				}
			}
			function o(r) {
				if (r === "on") {
					e(n).on(t.ev_types["move"], f);
					e(n).on(t.ev_types["end"], l)
				} else if (r === "off") {
					e(n).off(t.ev_types["move"]);
					e(n).off(t.ev_types["end"])
				}
			}
			function u(e) {
				e.preventDefault ? e.preventDefault() : e.returnValue = false;
				t.owlWrapper.off("click.owl")
			}
			function a(n) {
				var n = n.originalEvent || n;
				if (t.isCssFinish === false) {
					return false
				}
				if (t.isCss3Finish === false) {
					return false
				}
				if (t.options.autoPlay !== false) {
					clearInterval(t.autplaySpeed)
				}
				if (t.isTouch !== true && !t.owlWrapper.hasClass("grabbing")) {
					t.owlWrapper.addClass("grabbing")
				}
				t.newPosX = 0;
				t.newRelativeX = 0;
				e(this).css(t.removeTransition());
				var r = e(this).position();
				i.relativePos = r.left;
				i.offsetX = s(n).x - r.left;
				i.offsetY = s(n).y - r.top;
				o("on");
				i.sliding = false
			}
			function f(r) {
				var r = r.originalEvent || r;
				t.newPosX = s(r).x - i.offsetX;
				t.newPosY = s(r).y - i.offsetY;
				t.newRelativeX = t.newPosX - i.relativePos;
				if (t.newRelativeX > 8 || t.newRelativeX < -8 && t.isTouch === true) {
					r.preventDefault ? r.preventDefault() : r.returnValue = false;
					i.sliding = true
				}
				if ((t.newPosY > 10 || t.newPosY < -10) && i.sliding === false) {
					e(n).off("touchmove.owl")
				}
				var o = function () {
					return t.newRelativeX / 5
				};
				var u = function () {
					return t.maximumPixels + t.newRelativeX / 5
				};
				t.newPosX = Math.max(Math.min(t.newPosX, o()), u());
				if (t.support3d === true) {
					t.transition3d(t.newPosX)
				} else {
					t.css2move(t.newPosX)
				}
			}
			var t = this;
			var i = {
				offsetX: 0,
				offsetY: 0,
				baseElWidth: 0,
				relativePos: 0,
				position: null,
				minSwipe: null,
				maxSwipe: null,
				sliding: null
			};
			t.isCssFinish = true;
			var l = function () {
				if (t.isTouch !== true) {
					t.owlWrapper.removeClass("grabbing")
				}
				o("off");
				if (t.newPosX !== 0) {
					var e = t.getNewPosition();
					t.goTo(e);
					t.owlWrapper.on("click.owl", "a", u)
				} else if (t.isTouch === true) {
					t.owlWrapper.off("click.owl")
				}
			};
			t.$elem.on(t.ev_types["start"], ".owl-wrapper", a)
		},
		clearEvents: function () {
			var t = this;
			t.$elem.off(".owl");
			e(n).off(".owl")
		},
		getNewPosition: function () {
			var e = this,
			t;
			var t = e.improveClosest();
			if (t > e.maximumSlide) {
				e.currentSlide = e.maximumSlide;
				t = e.maximumSlide
			} else if (e.newPosX >= 0) {
				t = 0;
				e.currentSlide = 0
			}
			return t
		},
		improveClosest: function () {
			var t = this;
			var n = t.positionsInArray;
			var r = t.newPosX;
			var i = null;
			e.each(n, function (e, s) {
				if (r - t.itemWidth / 20 > n[e + 1] && r - t.itemWidth / 20 < s && t.moveDirection() === "left") {
					i = s;
					t.currentSlide = e
				} else if (r + t.itemWidth / 20 < s && r + t.itemWidth / 20 > n[e + 1] && t.moveDirection() === "right") {
					i = n[e + 1];
					t.currentSlide = e + 1
				}
			});
			return t.currentSlide
		},
		moveDirection: function () {
			var e = this,
			t;
			if (e.newRelativeX < 0) {
				t = "right";
				e.playDirection = "next"
			} else {
				t = "left";
				e.playDirection = "prev"
			}
			return t
		},
		customEvents: function () {
			var e = this;
			e.$elem.on("owl.next", function () {
				e.next()
			});
			e.$elem.on("owl.prev", function () {
				e.prev()
			});
			e.$elem.on("owl.play", function () {
				e.play();
				e.hoverStatus = "play"
			});
			e.$elem.on("owl.stop", function () {
				e.stop();
				e.hoverStatus = "stop"
			})
		},
		stopOnHover: function () {
			var e = this;
			if (e.options.stopOnHover === true && e.isTouch === false && e.options.autoPlay !== false) {
				e.$elem.on("mouseover", function () {
					e.stop()
				});
				e.$elem.on("mouseout", function () {
					if (e.hoverStatus !== "stop") {
						e.play()
					}
				})
			}
		}
	};
	e.fn.owlCarousel = function (t) {
		return this.each(function () {
			var n = Object.create(i);
			n.init(t, this);
			e.data(this, "owlCarousel", n)
		})
	};
	e.fn.owlCarousel.options = {
		slideSpeed: 200,
		paginationSpeed: 800,
		autoPlay: true,
		goToFirst: true,
		goToFirstSpeed: 1e3,
		stopOnHover: false,
		navigation: false,
		navigationText: ["prev", "next"],
		pagination: true,
		paginationNumbers: false,
		responsive: true,
		items: 5,
		itemsDesktop: [1199, 4],
		itemsDesktopSmall: [979, 3],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
		itemsMobileSmall: [359, 1],
		baseClass: "owl-carousel",
		theme: "owl-theme",
		beforeUpdate: false,
		afterUpdate: false,
		beforeMove: false,
		afterMove: false
	}
})(jQuery, window, document)
