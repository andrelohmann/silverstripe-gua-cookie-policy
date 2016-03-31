var gaProperty = '$GoogleAnalyticsId';
var disableStr = 'ga-disable-' + gaProperty;

if (document.cookie.indexOf(disableStr + '=true') > -1) {
  window[disableStr] = true;
}

function gaOptout() {
  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
  window[disableStr] = true;
}

var _gaq = _gaq || [];
_gaq.push(['_setAccount', gaProperty]);
_gaq.push(['_gat._anonymizeIp']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(){
	if(!Cookies.get('_gua_cwc')){
		Cookies.set('_gua_cwc', true, { expires: (365*10) });
		$('#GoogleCookieNotification').show();
	};
})();