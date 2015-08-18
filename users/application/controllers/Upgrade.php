<?php

/*
 *  Created on :Aug 18, 2015, 6:45:17 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */

class update {

    public $version;
    public $updates = array();

}

class Upgrade extends CI_Controller {

    function index() {
        $update_list = array();

        $u = new update;
        $u->version = 1.1;
        array_push($u->updates, "ALTER TABLE `blog` CHANGE `title` `title` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;");
        array_push($u->updates, "ALTER TABLE `h_complaint` DROP `user_id`");
        array_push($u->updates, "ALTER TABLE `h_complaint` ADD `roll_number` VARCHAR(65) NOT NULL AFTER `complaint`");
        array_push($update_list, $u);
        unset($u);

        $u = new update;
        $u->version = 1.2;
        array_push($u->updates, "CREATE TABLE `gbuonline`.`analysis` ( `hit_number` INT(128) NOT NULL AUTO_INCREMENT , `date` DATE NOT NULL , `time` TIME NOT NULL , PRIMARY KEY (`hit_number`))");
        array_push($update_list, $u);
        unset($u);
        
        $u = new update;
        $u->version = 1.3;
        array_push($u->updates, "update blog set title='5 Things That Computer Science Students Should Be Focussing On.' where id = '20'");
        array_push($update_list, $u);
        unset($u);

        $this->run_upgrades($update_list);
        redirect("login" . "?" . $_SERVER['QUERY_STRING'] );
    }

    function run_upgrades($update_list) {
        if (!$this->db->table_exists('update_info')) {
            $this->db->query("create table update_info (version FLOAT)");
            $this->db->query("insert into update_info (version) values ('1.0') ");
        }

        foreach ($update_list as $value) {
            $version_q = $this->db->query(" select * from update_info");
            $version_r = $version_q->row(0);
            $version = $version_r->version;
            if ($value->version > $version) {
                foreach ($value->updates as $row) {
                    $this->db->query($row);
                }
                $this->db->query("update update_info set version = '$value->version' ");
            }
        }
    }

}
