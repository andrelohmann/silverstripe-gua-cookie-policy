<% if not $CookiesConfirmed %>
<div class="alert alert-warning alert-dismissible text-center" role="alert">
  <%t GoogleAnalytics.COOKIESWARNING "GoogleAnalytics.COOKIESWARNING" %>
  <div class="row">
      <div class="col-sm-6 text-center">
          <a href="$GoogleAnalyticsPrivacyUrl" class="btn btn-default"><%t GoogleAnalytics.COOKIESMOREINFO "GoogleAnalytics.COOKIESMOREINFO" %></a>
      </div>
      <div class="sm-col-6 text-center">
          <button type="button" class="btn btn-default" data-dismiss="alert"><%t GoogleAnalytics.COOKIESCONFIRM "GoogleAnalytics.COOKIESCONFIRM" %></button>
      </div>
  </div>
</div>
<% end_if %>
