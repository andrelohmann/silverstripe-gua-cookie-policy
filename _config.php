<?php

if(defined('GOOGLE_ANALYTICS_ID') && defined('GOOGLE_ANALYTICS_PRIVACY_URL')){

    Config::inst()->update('GoogleAnalyticsControllerExtension', 'google_analytics_privacy_url', GOOGLE_ANALYTICS_PRIVACY_URL);
    Config::inst()->update('GoogleAnalyticsControllerExtension', 'google_analytics_id', GOOGLE_ANALYTICS_ID);

}else if(!defined('GOOGLE_ANALYTICS_SS_MANAGED')){
	die('Missing Google Analytics configs on GoogleAnalyticsControllerExtension');
}
