<script>
var gaProperty = '$GoogleAnalyticsId';
var disableStr = 'ga-disable-' + gaProperty;
if (document.cookie.indexOf(disableStr + '=true') > -1) {
	window[disableStr] = true;
}
function gaOptout() {
	document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
	window[disableStr] = true;
}
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=$GoogleAnalyticsId"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '$GoogleAnalyticsId');
</script>