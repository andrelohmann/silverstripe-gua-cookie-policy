<?php

class GoogleAnalyticsControllerExtension extends Extension {

        // return the google analytics id
        public function GoogleAnalyticsPrivacyUrl(){
            return Config::inst()->get('GoogleAnalyticsControllerExtension', 'google_analytics_privacy_url');
        }

        public function CookiesConfirmed(){
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

        public function GoogleAnalyticsId(){
            return Config::inst()->get('GoogleAnalyticsControllerExtension', 'google_analytics_id');
        }

}
