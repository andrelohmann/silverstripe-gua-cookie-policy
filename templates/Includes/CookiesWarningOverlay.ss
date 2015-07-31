<% if not $CookiesConfirmed %>
<div id="GoogleCookieNotification" style="position:fixed;top:0px;left:0px;width:100%;padding:10px;background:rgba(0,0,0,0.85);z-index:1060;">
    <p style="color:white;font-size:14px;margin:0px;padding:0px;font-weight:bold;"><%t GoogleAnalytics.COOKIESWARNING "GoogleAnalytics.COOKIESWARNING" %> <a href="$GoogleAnalyticsPrivacyUrl" style="color:white;text-decoration:underline;font-weight:bold;"><%t GoogleAnalytics.COOKIESMOREINFO "GoogleAnalytics.COOKIESMOREINFO" %></a>. <a href="#" onclick="(function(){document.getElementById('GoogleCookieNotification').style.display='none';return false;})();" style="color:white;text-decoration:underline;font-weight:bold;"><%t GoogleAnalytics.COOKIESCONFIRM "GoogleAnalytics.COOKIESCONFIRM" %></a>.</p>
</div>  
<% end_if %>