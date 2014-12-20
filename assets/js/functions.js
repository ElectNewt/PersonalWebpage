function cambiarIdioma(idioma){
         document.cookie = "idioma="+idioma;
		location.reload();
}

function setMenu() {
	$("#sidebar .opcion").removeClass("selected");
	var e = $("#sidebar").find("." + pages[pactual][0]);
	if (e.length) {
		e.addClass("selected");
	}
}

function init() {
	$("#sidebar .opcion").click(function() {
		var e = $(this).data("goto");
		var t = $("#" + e);
		if (t.length) {
			var n = t.offset().top - 46;
			$("html,body").animate({
				scrollTop : n
			}, 500, "easeOutQuart");
			$("#menu").removeClass("active");
		}
	});
	$("#sidebar .menuBtn").click(function() {
		if ($("#menu").hasClass("active")) {
			$("#menu").removeClass("active");
		} else {
			$("#menu").addClass("active");
		}
	});
}

function getRandomInt(e, t) {
	return (Math.floor(Math.random() * (t - e + 1)) + e) * 1e3;
}
$.ajaxSetup({
	cache : false
});
var onPhone = false;
var scrollTop = 0;
var pages = [];
var pactual = 0;
onResize = function() {
	wW = $(window).width();
	if (wW <= 640) {
		onPhone = true;
	} else {
		onPhone = false;
	}
	$(".livetile").livetile("adjust");
	$(".page").each(function(e, t) {
		pages[e] = [$(t).attr("id"), $(t).offset().top - 80];
	});
	setMenu();
};
$(window).scroll(function() {
	scrollTop = $(window).scrollTop();
	for (var e = 0; e < pages.length; e++) {
		if (scrollTop > pages[e][1]) {
			pactual = e;
		}
	}
	setMenu();
});
! function(e) {"use strict";
	var t = null;
	var n = function(e, t) {
		this.init("livetile", e, t);
	};
	n.prototype = {
		constructor : n,
		init : function(n, r, i) {
			this.type = n;
			this.$element = e(r);
			t = e(r);
			if (e(t).data("tipo")) {
				i["tipo"] = e(t).data("tipo");
			}
			this.options = this.getOptions(i);
			this.tile = this.$element.find(".tile");
			this.tileHeight = this.$element.find(".lt-h");
			this.animating = false;
			this.timer;
			this.adjust();
			e(t).hover(function() {
				e(this).livetile("open");
			}, function() {
				e(this).livetile("close");
			});
			this.initTimer();
		},
		getOptions : function(t) {
			t = e.extend({}, e.fn[this.type].defaults, t, this.$element.data());
			return t;
		},
		initTimer : function() {
			this.options.time = getRandomInt(6, 22);
			this.timer = setTimeout(e.proxy(this.openTitle, this), this.options.time);
		},
		adjust : function() {
			var t = this.options, n = this.$element, r = this.tile, i = this.tileHeight, s, o;
			s = e(n).width();
			o = s / t.w;
			t.moveY = Math.round(t.h * o);
			if (t.tipo == "large") {
				t.moveY = t.moveY * 2 + 40;
			}
			e(i).css({
				height : t.moveY + "px"
			});
			e(n).css({
				height : t.moveY + "px"
			});
			t.moveYTitle = e(".fbig", r).height() + 30;
		},
		openTitle : function() {
			var t = this.options, n = this.tile;
			e(n).stop().animate({
				top : -t.moveYTitle
			}, 500, "easeOutQuart");
			clearTimeout(this.timer);
			this.timer = setTimeout(e.proxy(this.close, this), 5e3);
		},
		open : function() {
			var t = this.options, n = this.tile;
			clearTimeout(this.timer);
			e(n).stop().animate({
				top : -t.moveY
			}, 500, "easeOutQuart");
		},
		close : function() {
			var t = this.options, n = this.$element, r = this.tile;
			clearTimeout(this.timer);
			e(r).stop().animate({
				top : 0
			}, 500, "easeOutQuart");
			this.initTimer();
		}
	};
	e.fn.livetile = function(t) {
		return this.each(function() {
			var r = e(this), i = r.data("livetile"), s = typeof t == "object" && t;
			if (!i) {
				r.data("livetile", i = new n(this, s));
			}
			if ( typeof t == "string") {
				i[t]();
			} else if (s.opt) {
				i[s.opt](s.to);
			}
		});
	};
	e.fn.livetile.Constructor = n;
	e.fn.livetile.defaults = {
		w : 450,
		h : 330,
		moveY : 330,
		tipo : "default",
		time : 5e3,
		moveYTitle : 0
	};
}(window.jQuery);
$(document).ready(function(e) {
	$(".livetile").livetile();
	onResize();
	init();
});
$(window).bind("resize", onResize);

//Cuando se utiliza el tooltip
$(function() {
	$('.btnTol').tooltip();

});