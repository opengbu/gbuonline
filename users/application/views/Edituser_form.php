<?php
/* 
 *  Created on :Jul 10, 2015, 12:18:54 PM
 *  Author     :Varun Garg <varun.10@live.com>
 */
?>

<div class="col-sm-5">
    <?php
    $userid = $this->session->userdata('edit_userid');
    $query = $this->db->query("select * from users where user_id = '$userid'");
    foreach ($query->result() as $row) {
        $uname = $row->username;
        $umail = $row->email;
        $type = $row->type;
        $ufull_name = $row->full_name;
    }
    ?>
    <?php echo form_open("edit_user/index/$userid"); ?>

    <label>Username</label>
    <input type="text" class="form-control" name="username" value="<?= $uname ?>"/>
    <input type="hidden" class="form-control" name="user_id" value="<?= $userid ?>"/>

    <label>Full Name</label>
    <input type="text" class="form-control" name="full_name" value="<?= $ufull_name ?>" />

    <label>Email Address</label>
    <input type="text" class="form-control" name="email" value="<?= $umail ?>"/>

    <?php
    if ($this->session->userdata('type') == 'admin') {
        ?>
        <label>Type</label>
        <select name="type" class="selectpicker" data-width="100%">
            <option value="admin" <?php if ($type == 'admin') echo 'selected="selected" '; ?> >Administrator</option>
            <option value="user"  <?php if ($type == 'user') echo 'selected="selected" '; ?>>General User</option>
            <option value="student" <?php if ($type == 'student') echo 'selected="selected" '; ?> >Student</option>
        </select>
    <?php
}
else {
    ?>
        <input type="hidden" class="form-control" value="user" />
        <?php
    }
    ?>
    <label>Password (Leave empty if you do not wish to change it)</label>
    <input type="password" name="password" class="form-control">


    <label>Confirm Password</label>
    <input type="password" name="passconf" class="form-control">

    <br>
<?php
echo '<label><font color="red">' . validation_errors() . '</font></label>';
?>
    <div><input type="submit" value="Save" class="btn btn-default"/></div>
</form>
</div>