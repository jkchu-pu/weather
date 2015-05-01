<?php


class PrincetonWeatherModule extends KGOModule {

    /*
     *  The initializeForPageConfigObjects_ methods below don't need to do much, they simply check if a feed has been configured
     *  The $objects configured in the page objdefs will take control from here
     */

    protected function initializeForPageConfigObjects_index(KGOUIPage $page, $objects) {
        //if (!($feed = $this->getFeed())) {
            //$this->setPageError($page, "Unable to load weather");
            //return;
        //}
    }
}
