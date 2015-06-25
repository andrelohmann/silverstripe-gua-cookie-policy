<% if not $CookiesConfirmed %>
<div class="alert alert-warning alert-dismissible text-center" role="alert">
		<%t GoogleAnalytics.COOKIESWARNING "GoogleAnalytics.COOKIESWARNING" %>
		<div class="row">
				<div class="col-sm-6 text-center">
						<p><button type="button" onclick="window.location.href='$GoogleAnalyticsPrivacyUrl'" class="btn btn-default"><%t GoogleAnalytics.COOKIESMOREINFO "GoogleAnalytics.COOKIESMOREINFO" %></button></p>
				</div>
				<div class="sm-col-6 text-center">
						<p><button type="button" class="btn btn-default" data-dismiss="alert"><%t GoogleAnalytics.COOKIESCONFIRM "GoogleAnalytics.COOKIESCONFIRM" %></button></p>
				</div>
		</div>
</div>  
<% end_if %>
