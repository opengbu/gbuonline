<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">

        <div class="well well-sm">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation"><a href="<?= site_url('alumni'); ?>">Home</a></li>
                <li role="presentation"><a href="<?= site_url('alumni/distinguished'); ?>">Distinguished Alumni</a></li>
                <li role="presentation"><a href="<?= site_url('alumni/alumniList'); ?>">Alumni List</a></li>
                <li role="presentation"><a href="<?= site_url('alumni/events'); ?>">Events</a></li>
                <li role="presentation"><a href="<?= site_url('alumni/gallery'); ?>">Gallery</a></li>
                <li role="presentation" class="active"><a href="<?= site_url('alumni'); ?>">Manage Profile</a></li>
            </ul>
        </div>
        <br> 

        <?php
        echo form_open(current_url() . "?" . $_SERVER['QUERY_STRING']);
        ?>

        <p>
            <label for="company_name">Company Name <span class="required">*</span></label>
            <?php echo form_error('company_name'); ?>
            <br /><input class="form-control"  id="company_name" type="text" name="company_name" maxlength="50" value="<?php echo set_value('company_name',@$company_name); ?>"  />
        </p>

        <p>
            <label for="location">Location</label>
            <?php echo form_error('location'); ?>
            <br /><input class="form-control" id="location" type="text" name="location" maxlength="100" value="<?php echo set_value('location',@$location); ?>"  />
        </p>

        <p>
            <label for="start_year">Start Year <span class="required">*</span></label>
            <?php echo form_error('start_year'); ?>
            <br /><input class="form-control" id="start_year" type="text" name="start_year" maxlength="15" value="<?php echo set_value('start_year',@$start_year); ?>"  />
        </p>

        <p>
            <label for="end_year">End Year (Enter CURRENT in case of ongoing) <span class="required">*</span></label>
            <?php echo form_error('end_year'); ?>
            <br /><input class="form-control" id="end_year" type="text" name="end_year" maxlength="15" value="<?php echo set_value('end_year',@$end_year); ?>"  />
        </p>


        <p>
            <label for="designation">Designation <span class="required">*</span></label>
            <?php echo form_error('designation'); ?>
            <br /><input class="form-control" id="designation" type="text" name="designation" maxlength="100" value="<?php echo set_value('designation',@$designation); ?>"  />
        </p>


        <p>
            <?php echo form_submit('submit', 'Submit'); ?>
        </p>

        <?php echo form_close(); ?>


    </div>

    <script type="text/javascript">
        function refresh_credits()
        {
            var credits_div = document.getElementById('total_credits');
            credits_div.innerHTML = total_credits;
        }
        if (document.getElementById("total_credits") !== null)
            refresh_credits();

        var frm = $('#insert_record');
        frm.submit(function (ev) {
            $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: frm.serialize(),
                success: function (msg) {
                    if (document.getElementById("record_list") === null)
                        window.location.reload();
                    var obj = JSON.parse(msg);
                    var error_list = document.getElementById('insert_errors');
                    if (obj.result === "error")
                    {
                        error_list.innerHTML = obj.errors;
                    }
                    if (obj.result === "success")
                    {
                        var record_list = document.getElementById('record_list');
                        var data = '<li class = "list-group-item" > \
                                        <div class = "row" > \
                                        <div class = "col-sm-2" > \
                                        ' + obj.sub_code + ' \
                                        </div> \
                                        <div class = "col-sm-1" > \
                                        ' + obj.nature_code + ' \
                                        </div> \
                                        <div class = "col-sm-7" > \
                                        ' + obj.name + ' \
                                        </div> \
                                        <div class = "col-sm-1" > \
                                        ' + obj.credit + ' \
                                        </div> \
                                        <div class = "col-sm-1" > \
                                        <a onclick = \
    "del_ask(\x27' + obj.record_id + '\x27, \x27' + obj.sub_code + '\x27, \x27' + obj.program + '\x27, \x27' + obj.semester + '\x27 )"\
     class="pull-right btn btn-xs btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete </a>\
                                        </div> \
                                        </div> \
                                        </li>';
                        record_list.innerHTML = record_list.innerHTML + data;
                        error_list.innerHTML = ""; //Remove old errors
                        total_credits = total_credits + parseInt(obj.credit); // add new credits;
                        refresh_credits();
                    }
                }
            });


            ev.preventDefault();
        });
    </script>

    <br>
</div>
</div>