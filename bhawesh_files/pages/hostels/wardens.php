
<div class="page-header" style = "background-color: darkred; padding-top: 10px; padding-left: 50px; margin-top: 15px;">
    <font color="white"  face="Monotype Corsiva">

            <h1>List Of Wardens</br><!--<small>Keep Calm and Write.....</small></h1>-->
	</font>      
 </div> 
  
<div class="jumbotron" style="padding-left:30px;">
           <!-- <h2><font face="Impact">List Of Respective Wardens</font></h2><br/>-->
            <div class="row"><font face="Georgia Bold">
                    <div class="col-md-4"><b>Hostel name</b></div>
                    <div class="col-md-4"><b>Warden Name</b></div>
                    <div class="col-md-4"><b>Warden's Office</b></div></font>
            </div><hr />
                <div class="row">
                    <div class="col-md-4"><?php
                    $this->db->where('id','1');
                    $q=$this->db->get('warden');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->hostel_name;
                        
                    }
                    ?></div>
                    <div class="col-md-4"><?php
                    $this->db->where('id','1');
                    $q=$this->db->get('warden');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->warden_name;
                        
                    }
                    ?></div>
                    <div class="col-md-4"><?php
                    $this->db->where('id','1');
                    $q=$this->db->get('warden');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->warden_office;
                        
                    }
                    ?></div>
                </div><hr />
                <div class="row">
                    <div class="col-md-4"><?php
                    $this->db->where('id','2');
                    $q=$this->db->get('warden');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->hostel_name;
                        
                    }
                    ?></div>
                    <div class="col-md-4"><?php
                    $this->db->where('id','2');
                    $q=$this->db->get('warden');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->warden_name;
                        
                    }
                    ?></div>
                    <div class="col-md-4"><?php
                    $this->db->where('id','2');
                    $q=$this->db->get('warden');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->warden_office;
                        
                    }
                    ?></div>
                </div><hr />
                <div class="row">
                    <div class="col-md-4"><?php
                    $this->db->where('id','4');
                    $q=$this->db->get('warden');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->hostel_name;
                        
                    }
                    ?></div>
                    <div class="col-md-4"><?php
                    $this->db->where('id','4');
                    $q=$this->db->get('warden');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->warden_name;
                        
                    }
                    ?></div>
                    <div class="col-md-4"><?php
                    $this->db->where('id','4');
                    $q=$this->db->get('warden');
                    $results=$q->result();
                    foreach ($results as $row)
                    {
                        echo $row->warden_office;
                        
                    }
                    ?></div>
                </div><hr />
        </div>
        <br><br/>
        