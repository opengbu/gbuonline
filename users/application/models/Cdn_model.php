<?php

/*
 *  Created on :Sep 29, 2015, 3:18:06 PM
 *  Author     :Varun Garg <varun.10@live.com>
 
	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 

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
