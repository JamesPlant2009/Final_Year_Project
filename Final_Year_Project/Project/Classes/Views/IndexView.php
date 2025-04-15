<?php

namespace Views;
use WebPageTemplateView;

/**
 * IndexView.php
 *
 * @author Harry Savill - P2724513@dmu.ac.uk
 * @package cryptoshow
 */
class IndexView extends WebPageTemplateView
{

    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
    }

    public function createPage()
    {
        $this->setPageTitle();
        $this->createWebPage();
        $this->createWebPageFooter();

    }

    public function getHtmlOutput()
    {
        return $this->html_page_output;
    }

    private function setPageTitle()
    {
        $this->page_title = 'CryptoShow Admin Home';
    }
}
