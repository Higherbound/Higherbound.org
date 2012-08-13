//Latest Tweets
$(document).ready(function() {
  
    // set your twitter id
    var user = 'higherboundinc';
      
    // using jquery built in get json method with twitter api, return only one result
    $.getJSON('http://twitter.com/statuses/user_timeline.json?screen_name=' + user + '&count=5&callback=?', function(data)      {
          
        // result returned
        var tweet = data[0].text;
      
        // process links and reply
        tweet = tweet.replace(/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig, function(url) {
            return '<a href="%27+url+%27" target="_blank">'+url+'</a>';
        }).replace(/B@([_a-z0-9]+)/ig, function(reply) {
            return  reply.charAt(0)+'<a href="http://twitter.com/%27+reply.substring%281%29+%27" target="_blank">'+reply.substring(1)+'</a>';
        });
      
        // output the result
        $(".twitter-feed").html(tweet);
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
FreshWidget.init("", {"queryString": "", "buttonText": "Need Help?", "buttonColor": "#ffffff", "buttonBg": "#000e17", "alignment": "3", "offset": "1000px", "url": "http://support.higherbound.org", "assetUrl": "http://assets.freshdesk.com/widget"} );
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29551556-1']);
  _gaq.push(['_setDomainName', 'higherbound.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();