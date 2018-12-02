<!-- PRICE ITEM -->
<?php $role =  $this->session->userdata('role');  if($role == 'CUSTOMER'): ?>
<a href="<?php echo base_url()?>admin" class="btn btn-default hover">
    <div class="panel-body text-center">
        <p class="lead" style="font-size:40px"><strong><i class="glyphicon glyphicon-tasks"></i></strong></p>
    </div>
    <span class=""><i class="icon-ok text-danger"></i> Home</span>
</a>
<?php endif; ?>

<!-- Before -->


<!-- PRICE ITEM -->
<!--/*
<?php $role =  $this->session->userdata('role');  if($role == 'CUSTOMER'): ?>
<a href="<?php echo base_url("userCtrl/ProfileUser"); ?>" class="btn btn-default hover">
    <div class="panel-body text-center">
        <p class="lead" style="font-size:40px"><strong><i class="glyphicon glyphicon-tasks"></i></strong></p>
    </div>
    <span class=""><i class="icon-ok text-danger"></i> Profile</span>
</a>
<?php endif; ?>
*/-->


<!-- Before -->

<?php $role =  $this->session->userdata('role');  if($role == 'CUSTOMER'): ?>
<a href="<?php $id = $this->session->userdata('id');  echo base_url("admin/profileEdit/$id"); ?>" class="btn btn-default hover">
    <div class="panel-body text-center">
        <p class="lead" style="font-size:40px"><strong><i class="glyphicon glyphicon-tasks"></i></strong></p>
    </div>
    <span class=""><i class="icon-ok text-danger"></i> Profile</span>
</a>
<?php endif; ?>


<!-- PRICE ITEM -->
<?php $role =  $this->session->userdata('role');  if($role == 'ADMIN' || $role == 'STAFF'): ?>
<a href="<?php echo base_url()?>memberList" class="btn btn-default hover">
    <div class="panel-body text-center">
        <p class="lead" style="font-size:40px"><strong><i class="glyphicon glyphicon-tasks"></i></strong></p>
    </div>
    <span class=""><i class="icon-ok text-danger"></i> List All Member</span>
</a>
<?php endif; ?>
<!-- /PRICE ITEM -->

<!-- Register Member -->
<?php $role =  $this->session->userdata('role');  if($role == 'ADMIN' || $role == 'STAFF'): ?>
<a href="<?php echo base_url() ?>register" class="btn btn-default hover">
    <div class="panel-body text-center">
        <p class="lead" style="font-size:40px"><strong><i class="glyphicon glyphicon-plus-sign"></i></strong></p>
    </div>
    <span class=""><i class="icon-ok text-danger"></i>Register new member</span>
</a>
<?php endif; ?>
<!-- /PRICE ITEM -->

<!-- Member Alert -->
<?php $role =  $this->session->userdata('role');  if($role == 'ADMIN' || $role == 'STAFF'): ?>
<a class="btn btn-default hover" href="<?php echo base_url()?>alert">
    <div class="panel-body text-center">
        <p class="lead" style="font-size:40px"><strong><i class="glyphicon glyphicon-warning-sign"></i></strong></p>
    </div>
    <span class=""><i class="icon-ok text-danger"></i> Member Alert</span>
</a>
<?php endif; ?>
<!-- Member Alert -->

<!-- Report Dashboard -->
<?php $role =  $this->session->userdata('role');  if($role == 'ADMIN'): ?>
<a class="btn btn-default hover" href="<?php echo base_url()?>dashboard">
    <div class="panel-body text-center">
        <p class="lead" style="font-size:40px"><strong><i class="glyphicon glyphicon-briefcase"></i></strong></p>
    </div>
    <span class=""><i class="icon-ok text-danger"></i> Report Dashboard</span>
</a>
<?php endif; ?>
<!-- Report Dashboard -->

<!-- Report Statistic -->
<?php $role =  $this->session->userdata('role');  if($role == 'ADMIN'): ?>
<a class="btn btn-default hover" href="<?php echo base_url()?>admin/report">
    <div class="panel-body text-center">
        <p class="lead" style="font-size:40px"><strong><i class="glyphicon glyphicon-stats"></i></strong></p>
    </div>
    <span class=""><i class="icon-ok text-danger"></i> Report Statistic</span>
</a>
<?php endif; ?>
<!-- Report Statistic -->

<!-- Admin Setting -->
<?php $role =  $this->session->userdata('role');  if($role == 'ADMIN'): ?>
<a href="<?php echo base_url()?>schema" class="btn btn-default hover">
    <div class="panel-body text-center">
        <p class="lead" style="font-size:40px"><strong><i class="glyphicon glyphicon-wrench"></i></strong></p>
    </div>
    <span class=""><i class="icon-ok text-danger"></i>Admin Setting</span>
</a>
<?php endif; ?>
<!-- Admin Setting -->
