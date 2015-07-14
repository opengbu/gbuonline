
<div class="page-header" style = "background-color: darkred; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
    <font color="white"  face="Monotype Corsiva">

            <h1>Virtual Notice Board</br><!--<small>Keep Calm and Write.....</small></h1>-->
	</font>      
 </div>
<div class="jumbotron" style="padding-left:30px;">
           <!-- <h2><font face="Impact">Hostel Notice Board</font></h2><br/>-->
            <div class="row"><font face="Georgia Bold">
                    <div class="col-md-1"><b>#</b></div>
                    <div class="col-md-2"><b>Posted On</b></div>
                    <div class="col-md-3"><b>Title</b></div>
                    <div class="col-md-3"><b>Issuing Authority</b></div>
                    <div class="col-md-2"><b>Concerned Hostels</b></div></font>
            </div><hr/>
                <div class="row">
                    <div class="col-md-1">1</div>
                    <div class="col-md-2"><?php
                    $this->db->where('id','1');
                    $q=$this->db->get('h_notice');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->date;
                        
                    }
                    ?></div>
                    <div class="col-md-3"><?php
                    $this->db->where('id','1');
                    $q=$this->db->get('h_notice');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->title;
                        
                    }
                    ?></div>
                    <div class="col-md-3"><?php
                    $this->db->where('id','1');
                    $q=$this->db->get('h_notice');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->issuing_authority;
                        
                    }
                    ?></div>
                    <div class="col-md-2"><?php
                    $this->db->where('id','1');
                    $q=$this->db->get('h_notice');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->concerned_hostel;
                        
                    }
                    ?></div>
                </div><hr/>
                <div class="row">
                    <div class="col-md-1">2</div>
                    <div class="col-md-2">30-03-2015</div>
                    <div class="col-md-3">Academic Calendar</div>
                    <div class="col-md-3">Admin</div>
                    <div class="col-md-2">Tulsidas</div>
                </div><hr/>
                <div class="row">
                    <div class="col-md-1">3</div>
                    <div class="col-md-2">1-04-2015</div>
                    <div class="col-md-3">Shauryotsav Participation</div>
                    <div class="col-md-3">Chief Warden Office</div>
                    <div class="col-md-2">All</div>
                </div><hr/>
        </div>
 