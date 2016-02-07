<?php
/*
 * Created on : Feb 7, 2016, 6:07:34 AM
 * Author        :Varun Garg <varun.10@live.com>
 */


$users_q = $this->db->query('select user_id, username, full_name, email,phone_number, roll_number from users');
$flag_current_user_id_verified = 0;
$user_id = $this->session->user_id;
$users[''] = 'None (BLANK)';
foreach ($users_q->result() as $row) {
    if (strlen($row->roll_number) < 1)
        continue;


    if (strlen($row->phone_number) < 1)
        continue;

    $users["$row->user_id"] = "$row->username ($row->full_name $row->roll_number)";

    if ($user_id == $row->user_id)
        $flag_current_user_id_verified = 1;
}

$check_q = $this->db->query("select *  from event_form_data where event_id = '$event_id' and registered_by_user_id = '$user_id'");
?>

<link type="text/css" rel="stylesheet" href="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.css' ?>">
<script type="text/javascript" src="<?= base_url() . 'application/views/common/' . 'input/jquery-te-1.4.0.min.js' ?>" charset="utf-8"></script>
<div class="col-sm-8" >
    <?php echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
    ?>

    <h2>Register for <?= $title ?></h2>
    <br /><br />
    <?php
    if ($check_q->num_rows() > 0)
        echo '<b><font color = "red">You have already registered for this event. '
        . 'If you submit again your previous entry will be dedeleted </font></b><br /><br />';

    if ($flag_current_user_id_verified == 0) {
        echo '<b><font color = "red">Error</font></b>: We don\'t have your phone number or roll number, please add it in your profile '
        . 'by clicking at your name at top right of screen';
        return;
        ;
    }

    if ($max_participants == 1) {
        if (strlen($extra_info_title) == 0) {
            echo 'Looks like everything is fine, just click register to register!';
        }
    } else {
        for ($i = 1; $i <= $max_participants; $i++) {
            ?>
            <label>Participant <?= $i ?></label>
            <?php
            echo form_dropdown('user_id_' . $i, $users, set_value('user_id_' . $i, @$event_id), 'class="selectpicker" data-live-search = "true" ');
            echo '<br /><br />';
        }
        ?>
        <b><font color="red">Note: </font>Users that have not added Roll Number or Phone Number are not available in above lists.
        </b><br />
        <b>
            They can fix this by clicking their name at top right of screen and completing their profile profile.
        </b><br /><br />
        <?php
    }
    if (strlen($extra_info_title) > 0) {
        ?>
        <label><?= $extra_info_title ?></label><br />
        <textarea  name="extra_info" class="jqte-test"><?php echo set_value('extra_info', @$extra_info); ?></textarea>

        <?php
    }
    echo '<br /><br /><label><font color="red">' . validation_errors() . '</font></label>';
    ?>
    <input type="hidden" name="submitted" value="submitted" />
    <div><input type="submit" value="Register" class="btn btn-success"/></div>
        <?php
        echo form_close();
        ?>

</div>


<script>
    $('.jqte-test').jqte();

// settings of status
    var jqteStatus = true;
    $(".status").click(function ()
    {
        jqteStatus = jqteStatus ? false : true;
        $('.jqte-test').jqte({"status": jqteStatus})
    });
</script>
