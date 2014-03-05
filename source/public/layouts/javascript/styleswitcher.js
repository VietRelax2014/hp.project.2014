window.console = window.console
		|| function() {
			var e = {};
			e.log = e.warn = e.debug = e.info = e.error = e.time = e.dir = e.profile = e.clear = e.exception = e.trace = e.assert = function() {
			};
			return e
		}();
$(document)
		.ready(
				function() {
					var e = '<h2>Style Selector<a href="#"><i class="icon-settings"></i></a></h2><div class="selector-box"><h3>Choose Your Layout Style</h3><div class="layout-switcher"><a id="wide" class="layout current">Wide</a><a id="boxed" class="layout">Boxed</a></div><div class="clear"></div><h3>Color Style</h3><div class="color-box"><a id="red" class="styleswitch color current"></a><a id="orange" class="styleswitch color"></a><a id="turquoise" class="styleswitch color"></a><a id="green" class="styleswitch color"></a><a id="blue" class="styleswitch color"></a></div><div class="clear"></div><div class="pattern-box hidden"><h3>Patterns for Boxed layout</h3><a id="wood" class="pattern current"></a><a id="crossed" class="pattern"></a><a id="fabric" class="pattern"></a><a id="linen" class="pattern"></a><a id="diagmonds" class="pattern"></a></div><div class="clear"></div><br><a id="reset" class="reset">Reset</a></div>';
					$(".switcher-container").prepend(e)
				});
$(document).ready(
		function() {
			function e(e) {
				$.cookie(t, e);
				$("head link[name=layout]").attr("href",
						"/layouts/css/layout/" + e + ".css")
			}
			var t = "wide";
			if ($.cookie(t)) {
				e($.cookie(t))
			}
			$("#wide").click(function() {
				$;
				e("wide");
				$("#boxed").removeClass("current");
				$(this).addClass("current")
			});
			$("#boxed").click(function() {
				$;
				e("boxed");
				$("#wide").removeClass("current");
				$(this).addClass("current")
			});
			$("#reset").click(function() {
				$;
				e("wide");
				$("#boxed").removeClass("current");
				$("#wide").addClass("current")
			})
		});
$(document).ready(function() {
	var e = $.cookie("mycookie");
	$("body").addClass("wood");
	$("#crossed").click(function() {
		$("body").removeClass();
		$("body").addClass("crossed");
		$.cookie("mycookie", "crossed");
		$(".pattern").removeClass("current");
		$(this).addClass("current")
	});
	$("#fabric").click(function() {
		$("body").removeClass();
		$("body").addClass("fabric");
		$.cookie("mycookie", "fabric");
		$(".pattern").removeClass("current");
		$(this).addClass("current")
	});
	$("#linen").click(function() {
		$("body").removeClass();
		$("body").addClass("linen");
		$.cookie("mycookie", "linen");
		$(".pattern").removeClass("current");
		$(this).addClass("current")
	});
	$("#wood").click(function() {
		$("body").removeClass();
		$("body").addClass("wood");
		$.cookie("mycookie", "wood");
		$(".pattern").removeClass("current");
		$(this).addClass("current")
	});
	$("#diagmonds").click(function() {
		$("body").removeClass();
		$("body").addClass("diagmonds");
		$.cookie("mycookie", "diagmonds");
		$(".pattern").removeClass("current");
		$(this).addClass("current")
	});
	$("#reset").click(function() {
		$("body").removeClass();
		$("body").addClass("wood");
		$.cookie("mycookie", "wood");
		$(".pattern").removeClass("current");
		$("#wood").addClass("current")
	});
	if ($.cookie("mycookie")) {
		$("body").addClass($.cookie("mycookie"))
	}
});
$(document).ready(
		function() {
			function e(e) {
				$.cookie(t, e);
				$("head link[name=colors]").attr("href",
						"/layouts/css/colors/" + e + ".css")
			}
			var t = "red";
			if ($.cookie(t)) {
				e($.cookie(t))
			}
			$("#red").click(function() {
				$;
				e("red");
				$(".styleswitch").removeClass("current");
				$(this).addClass("current")
			});
			$("#orange").click(function() {
				$;
				e("orange");
				$(".styleswitch").removeClass("current");
				$(this).addClass("current")
			});
			$("#green").click(function() {
				$;
				e("green");
				$(".styleswitch").removeClass("current");
				$(this).addClass("current")
			});
			$("#blue").click(function() {
				$;
				e("blue");
				$(".styleswitch").removeClass("current");
				$(this).addClass("current")
			});
			$("#turquoise").click(function() {
				$;
				e("turquoise");
				$(".styleswitch").removeClass("current");
				$(this).addClass("current")
			});
			$("#reset").click(function() {
				$;
				e("red");
				$(".styleswitch").removeClass("current");
				$("#red").addClass("current")
			})
		});
$(document).ready(function() {
	$(".switcher-container").animate({
		left : "-200px"
	});
	$(".switcher-container h2 a").click(function(e) {
		e.preventDefault();
		var t = $(".switcher-container");
		if (t.css("left") === "-200px") {
			$(".switcher-container").animate({
				left : "0px"
			})
		} else {
			$(".switcher-container").animate({
				left : "-200px"
			})
		}
	})
})