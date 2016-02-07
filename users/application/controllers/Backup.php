<?php

/*
 * Created on : Feb 7, 2016, 10:39:42 AM
 * Author     :Varun Garg <varun.10@live.com>
 */

class Backup extends CI_Controller {

    function secure_hard() {
        if ($this->permissions->get_level() < 4) {
            echo $this->load->view('common/header', '', TRUE);
            $message['errors'] = "Insufficient Privelleges. Please Contact an Admin";
            echo $this->load->view('Error_message', $message, TRUE);
            echo $this->load->view('common/footer', '', TRUE);
            die();
        }
        return 1;
    }

    function index() {
        $this->secure_hard();
        $this->load->view('common/header');
        $this->load->view('Backup');
        $this->load->view('common/footer');
    }

    function do_backup() {
        $this->secure_hard();

        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->logger->insert('generated backup');

        $backup = & $this->dbutil->backup();
        write_file('/backups/gbuonline.gz', $backup);
        force_download('mybackup.gz', $backup);
        redirect(base_url('Backup'));
    }

}
