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

		$u->version = 1.4;
        array_push($u->$update,"UPDATE `stu_chapters` SET Title='IEEE-GBU Student Branch',Description='After filing the petition for formation of the IEEE- GBU Student Branch on February 8, 2012 with the approval of at least 12 eligible student members and 2 IEEE Members above student grade, with the Student Branch Counselor Dr. Shabana Urooj and the Student Branch Chair Chirag Ahuja, got the approval for the Branch on April 6, 2012 from the headquarters with the Student Branch Code is 10301 and the School Code is 60048501. The Student Branch is located in Region 10 and the activities will be of interest to the volunteers of IEEE Delhi Section.' WHERE Title = 'IEEE-GBU Student Branch';");
array_push($u->$update,"INSERT INTO `gbuonline`.`stu_chapters` (`Title`, `Description`) VALUES ('Codechef-GBU Campus Chapter ', 'A community to enhance coding among the students of GBU. For more info: https://www.codechef.com/campus_chapter/CodeChef-GBU');");
array_push($u->$update,"INSERT INTO `gbuonline`.`stu_chapters` (`Title`, `Description`) VALUES ('HackerEarth - "CODE IN GBU"', 'Various coding competitions are organised on HackerEarth platform under the series "Code-In-GBU". Link:https://www.hackerearth.com/code-in-gbu/');");
array_push($u->$update,"UPDATE `stu_chapters` SET Title= 'HackerEarth "CODE IN GBU"', Description = 'Various coding competitions are organised on HackerEarth platform under the series "Code-In-GBU". <a href = "https://www.hackerearth.com/code-in-gbu/">For more info click here</a>' WHERE Title = 'HackerEarth - "CODE IN GBU"';");
array_push($u->$update,"UPDATE `stu_chapters` SET Title='Codechef-GBU Campus Chapter',Description='A community to enhance coding among the students of GBU.<a href ="https://www.codechef.com/campus_chapter/CodeChef-GBU"> Codechef-GBU</a>' WHERE Title = 'Codechef-GBU Campus Chapter';");
array_push($u->$update,"UPDATE `placements` SET Title = 'Placement 2015',Link='resources/placements/p2015.PDF' WHERE Title = 'Placement 2015';");
array_push($u->$update,"INSERT INTO `gbuonline`.`placements` (`Title`, `Link`) VALUES ('Placement 2014 ','resources/placements/p2014.PDF');");
array_push($u->$update,"INSERT INTO `gbuonline`.`placements` (`Title`, `Link`) VALUES ('Placement 2013', 'resources/placements/p2013.PDF');");
array_push($u->$update,"INSERT INTO `gbuonline`.`placements` (`Title`, `Link`) VALUES ('Placement 2012', 'resources/placements/p2012.PDF');");
array_push($u->$update,"INSERT INTO `gbuonline`.`placements` (`Title`, `Link`) VALUES ('Placement 2011', 'resources/placements/p2011.PDF');");
array_push($u->$update,"INSERT INTO `gbuonline`.`placements` (`Title`, `Link`) VALUES ('Placement 2010', 'resources/placements/p2010.PDF');");
array_push($u->$update,"ALTER TABLE `placements` ADD `ID` INT NOT NULL AUTO_INCREMENT AFTER `Title`, ADD PRIMARY KEY (`ID`);");
array_push($u->$update,"DELETE FROM `downloads` WHERE Title = 'C Cleaner';");
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
