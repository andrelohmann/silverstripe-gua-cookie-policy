# silverstripe-gua-cookie-policy

## Maintainers

 * Andre Lohmann (Nickname: andrelohmann)
  <lohmann dot andre at googlemail dot com>

## Introduction

Silverstripe Implementation of google analytics with cooky notification to be compliant with EU cookie law

## Usage

Add the following to your _ss_environment.php

```
define('GOOGLE_ANALYTICS_ID', 'UA-xxx-xxx-xxx');
define('GOOGLE_ANALYTICS_PRIVACY_URL', 'PATH_TO_PRIVACY_POLICIES');
```

inside your privacy policies you need to include the google privacy notes
```
<%t GoogleAnalytics.PRIVACYINFO "GoogleAnalytics.PRIVACYINFO" %>
```
inside your template(s) place the notification alert window and the analytics javascript code

```
# in body
<% include CookiesWarning %>

# in bottom
<% include GoogleAnalytics %>
```

## Further information

You need to sign a contract with google

information can be found here (german)

https://www.datenschutzbeauftragter-info.de/fachbeitraege/google-analytics-datenschutzkonform-einsetzen/

https://developers.google.com/analytics/devguides/collection/gajs/?hl=de#disable

### Notice
 * After each Update, set the new Tag
```
git tag -a v1.2.3.4 -m 'Version 1.2.3.4'
git push -u origin v1.2.3.4
```
 * Also update the requirements in andrelohmann/silverstripe-apptemplate
