<?php $this->load->view('admin/header'); ?>

<div class="container" style="border-top: 1px solid #D14B54; background: #f5f5f5f5">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
 <?php $this->load->view('admin/sidebar'); ?>
                </div>


                <div class="row">
                  <div class=" col-lg-4 col-xs-6">
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3><?php echo $jml_member; ?></h3>

                        <p>Total of Customer</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-ios-contact"></i>
                      </div>
                      <a href="<?php echo base_url('admin/memberlist') ?>" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>


                  </div>
                    <div class="col-lg-4 col-xs-6">
                      <div class="small-box bg-green">
                        <div class="inner">
                          <h3><?php echo $jml_plan; ?></h3>

                          <p>Total of Plan</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-ios-briefcase-outline"></i>
                        </div>
                        <a href="<?php echo base_url('Posisi') ?>" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>




                <div class="row">
                <div class="col-md-6 col-md-offset-1">
                <div class="center box box-info">
                <div class="box-header with-border">


                  <?php
                  if($role == "ADMIN")
                  {
                    ?>
                    <h2 class="text-center text-uppercase">Logged As, Administrator</h2>
                    <?php
                  }elseif($role == "STAFF") {

                  ?>
                  <h2 class="text-center text-uppercase">Logged As, Staff <?php $username = $this->session->userdata('username');
                $session_data = $this->session->all_userdata();  echo '<br/>';
  print_r($username); ?> </h2>


                <?php
              }else {
                ?>
                <h2 class="text-center text-uppercase">Logged As, Customer <?php $username = $this->session->userdata('username');
              $session_data = $this->session->all_userdata();  echo '<br/>';
print_r($username); ?></h2>
                <?php
              } ?>




              <h1 class="text-center text-uppercase">Welcome to my gym portal.</h1>





                    <div class="row">
                    <div class="text-center">
                    <img src="<?php echo base_url() ?>asset/images/gymdepan.jpg" alt="GYM" style="height: 300px; width: 500px" />
</div>
</div>








                </div>

            </div>
        </div>
<script>
    console.log(window.login);
</script>





<?php
$this->load->view('admin/footer');
