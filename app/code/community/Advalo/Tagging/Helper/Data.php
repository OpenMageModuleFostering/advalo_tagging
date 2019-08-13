<?php

class Advalo_Tagging_Helper_Data extends Mage_Core_Helper_Abstract {

	public function getNewsletterSubscribed() {
        return Mage::getStoreConfig('advalo_tagging/advalo_events/newsletter_subscribed');
    }
    
}

?>