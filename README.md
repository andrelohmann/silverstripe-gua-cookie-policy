# silverstripe-gua-cookie-policy

## Maintainers

 * Andre Lohmann (Nickname: andrelohmann)
  <lohmann dot andre at googlemail dot com>

## Requirements

Silverstripe 3.2.x

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
place right behind the opening body tag
<% include CookiesWarningOverlay %>
to show a small semi transparent overlay on the top of the page

or

place somewhere in between your body tag
<% include CookiesWarning %>
to have an alert box shown

```

## Further information

You need to sign a contract with google

information can be found here (german)

https://www.datenschutzbeauftragter-info.de/fachbeitraege/google-analytics-datenschutzkonform-einsetzen/

https://developers.google.com/analytics/devguides/collection/gajs/?hl=de#disable

### Notice
This repository uses the git flow paradigm.
After each release cycle, do not forget to push tags, master and develop to the remote origin
```
git push --tags
git push origin develop
git push origin master
```