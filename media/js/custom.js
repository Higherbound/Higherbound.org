//Latest Tweets
jQuery(function($){
        $(".twitter-feed").tweet({
            username: "higherboundinc",
            join_text: "auto",
            avatar_size: 32,
            count: 3,
            auto_join_text_default: "we said,",
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
        });
    });

// png fix for IE users
$(document).ready(function(){ 
        $(document).pngFix(); 
});

		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

// Front Page Slider
$(document).ready(function(){	
	$("#slider").easySlider({
		/*controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',*/
		auto: true, 
		continuous: true
	});	
});

//Front Page Tabs
$(document).ready(function() {
	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});
});

// Cufon Fonts
Cufon.replace('h3','h2','h1');

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29551556-1']);
  _gaq.push(['_setDomainName', 'higherbound.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();