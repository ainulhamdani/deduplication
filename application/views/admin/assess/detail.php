<?php
$this->load->view("header");
$this->load->view("admin/nav");
?>
	<div class="page-header">
        <h1><?=$assessment->name?></h1>
    </div>
    <div class="col-md-12">
    	
    </div>
<?php
var_dump($assessment);
$this->load->view("footer");