<?php

/*
 *  Created on :Sep 28, 2015, 6:08:05 PM
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

class New_user_uploads extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_files_only($dir) {
        // function adopted from  mmda dot nl at gmail dot com
        $result = array();

        $cdir = scandir($dir);
        foreach ($cdir as $key => $value) {
            if (!in_array($value, array(".", ".."))) {
                if (!is_dir($dir . '/' . $value)) {
                    $result[] = $value;
                }
            }
        }

        return $result;
    }

    function patch() {
        $this->load->helper('file');


        $directory = "../resources/user_uploads";
        $files = $this->get_files_only($directory);
        $d2 = "../user_uploads/events";
        if (!file_exists($d2)) {
            mkdir($d2, 0777, true);
        }
        foreach ($files as $file) {
            rename($directory . '/' . $file, $d2 . '/' . $file);
        }


        $directory = "../resources/user_uploads/profile_images";
        $files = $this->get_files_only($directory);
        $d2 = "../user_uploads/profile_images";
        if (!file_exists($d2)) {
            mkdir($d2, 0777, true);
        }
        foreach ($files as $file) {
            rename($directory . '/' . $file, $d2 . '/' . $file);
        }


        $directory = "../resources/exams";
        $files = $this->get_files_only($directory);
        $d2 = "../user_uploads/exams";
        if (!file_exists($d2)) {
            mkdir($d2, 0777, true);
        }
        foreach ($files as $file) {
            rename($directory . '/' . $file, $d2 . '/' . $file);
        }


        $directory = "../resources/notices";
        $files = $this->get_files_only($directory);
        $d2 = "../user_uploads/notices";
        if (!file_exists($d2)) {
            mkdir($d2, 0777, true);
        }
        foreach ($files as $file) {
            rename($directory . '/' . $file, $d2 . '/' . $file);
        }

        $query = "UPDATE vnb "
                . " SET link = REPLACE (link, 'resources', 'user_uploads')";
        $this->db->query($query);

        $query = "UPDATE events "
                . " SET image_path = REPLACE (image_path, 'resources/user_uploads', 'user_uploads/events')";
        $this->db->query($query);

        $query = "UPDATE exams "
                . " SET image_path = REPLACE (image_path, 'resources', 'user_uploads')";
        $this->db->query($query);

        $query = "UPDATE users "
                . " SET profile_picture = REPLACE (profile_picture, 'resources/user_uploads/profile_images', 'user_uploads/profile_images')";
        $this->db->query($query);
    }

}
