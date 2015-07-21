<?php

class GoogleAnalyticsControllerExtension extends Extension {
        
        // return the google analytics id
        public function GoogleAnalyticsPrivacyUrl(){
            return GOOGLE_ANALYTICS_PRIVACY_URL;
        }
        
        public function CookiesConfirmed(){
            // Always hide on Google Bot
            if($this->owner->IsGooglebot()) return false;
            
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
			Requirements::javascriptTemplate('gua-cookie-policy/javascript/google-analytics.js', array(
				'GoogleAnalyticsId' => GOOGLE_ANALYTICS_ID
			));
		}
        
}
