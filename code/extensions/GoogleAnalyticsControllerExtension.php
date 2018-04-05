<?php

class GoogleAnalyticsControllerExtension extends Extension {

        // return the google analytics id
        public function GoogleAnalyticsPrivacyUrl(){
            return Config::inst()->get('GoogleAnalyticsControllerExtension', 'google_analytics_privacy_url');
        }

        public function CookiesConfirmed(){
            // Always hide on Google Bot
            //if($this->owner->IsGooglebot()) return true;

            if(Session::get('_gua_cwc') || Cookie::get('_gua_cwc')){
                if(!Session::get('_gua_cwc')) Session::set('_gua_cwc', true);
                return true;
            }else{
                $expiry = 365*10; // 10 years
                Cookie::set('_gua_cwc', true, $expiry, '/');
                Session::set('_gua_cwc', true);
                return false;
            }
        }

        public function onAfterInit(){
            if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false){
                Requirements::javascript('gua-cookie-policy/javascript/js.cookie.min.js');
                Requirements::javascriptTemplate('gua-cookie-policy/javascript/google-analytics.js', array(
                        'GoogleAnalyticsId' => Config::inst()->get('GoogleAnalyticsControllerExtension', 'google_analytics_id')
                ));
            }
        }

}
