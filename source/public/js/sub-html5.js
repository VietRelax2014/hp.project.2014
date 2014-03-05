/*
 * Load sub for Html5 video
 */

var subPlay ={};
$(document).ready(function() {
	subPlay = {
		toSeconds : function(t) {
	        var s = 0.0;
	        if (t) {
	            var p = t.split(':');
	            for (var i = 0; i < p.length; i++)
	                s = s * 60 + parseFloat(p[i].replace(',', '.'));
	        }
	        return s;
	    },
	    strip : function(s) {
	        return s.replace(/^\s+|\s+$/g, "");
	    },
	    playSubtitles : function(subtitleElement) {
	        var videoId = subtitleElement.attr('data-video');
	        var srt = subtitleElement.text();
	        subtitleElement.text('');
	        srt = srt.replace(/\r\n|\r|\n/g, '\n');
	        
	        var subtitles = {};
	        srt = subPlay.strip(srt);
	        var srt_ = srt.split('\n\n');
	        for (s in srt_) {
	            st = srt_[s].split('\n');
	            if (st.length >= 2) {
	                n = st[0];
	                i = subPlay.strip(st[1].split(' --> ')[0]);
	                o = subPlay.strip(st[1].split(' --> ')[1]);
	                t = '<p>' + st[2] + '</p>';
	                if (st.length > 2) {
	                    for (var j = 3; j < st.length; j++)
	                        t += '<p>' + st[j] + '</p>';
	                }
	                is = subPlay.toSeconds(i);
	                os = subPlay.toSeconds(o);
	                subtitles[is] = {
	                    i: i,
	                    o: o,
	                    t: t
	                };
	            }
	        }
	        var currentSubtitle = -1;
		        setInterval(function() {
		        	if(!document.getElementById(videoId)){
		        		return;
		        	}
		            var currentTime = document.getElementById(videoId).currentTime;
		            var subtitle = -1;
		            for (s in subtitles) {
		                if (s > currentTime)
		                    break;
		                subtitle = s;
		            }
		            if (subtitle > 0) {
		                if (subtitle != currentSubtitle) {
		                    subtitleElement.html(subtitles[subtitle].t);
		                    currentSubtitle = subtitle;
		                } else if (subtitles[subtitle].o < currentTime) {
		                    subtitleElement.html('');
		                }
		            }
		        }, 100);
	    },
		init : function(){
			$('.srt').each(function() {
			var subtitleElement = $(this);
			var videoId = subtitleElement.attr('data-video');
			if (!videoId) return;
			var srtUrl = subtitleElement.attr('data-srt');
				if (srtUrl) {
					$(this).load(srtUrl, function(responseText, textStatus, req) {
						subPlay.playSubtitles(subtitleElement);
					});
				} else {
					subPlay.playSubtitles(subtitleElement);
				}
			});
		}
	};

	subPlay.init();
});