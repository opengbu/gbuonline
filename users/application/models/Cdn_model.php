<?php

/*
 *  Created on :Sep 29, 2015, 3:18:06 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
define('CDN_MODE', 'ONLINE');

class Cdn_model extends CI_Model {

    var $res_url;
    var $base_url;

    function __construct() {
        parent::__construct();
        if (CDN_MODE == 'ONLINE') {
            $this->res_url = 'http://cdn.gbuonline.in/users/';
            $this->base_url = 'http://cdn.gbuonline.in/';
        } else {
            $this->res_url = base_url();
            $this->base_url = dirname(base_url());
        }
    }

    function users($url = NULL) {
        return $this->res_url . $url;
    }

    function base($url = NULL) {
        return $this->base_url . $url;
    }

}
