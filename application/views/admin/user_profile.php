<?php $this->load->view('admin/header'); ?>

<div class="container" id='main-layout' style="border-top: 1px solid #D14B54; background: #f5f5f5f5">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <?php $this->load->view('admin/sidebar'); ?>
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="ajaxResponse"><input type="hidden" name="ajaxResponse"></div>
            <div class="row" style="padding: 0px 5px;">
                <?php $id = $this->uri->segment(2); if(!empty($id)): ?>
                <div class="col-md-6">
                    <div class="thumbnail  familycol">
                        <form id="frm_update_member" action="<?php echo base_url()?>admin/memberUpdate" method="post" class="form">   <legend>Personal Information</legend>
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">First name</label>
                                    <input readonly type="text" name="firstname" value="<?php echo $row->fname?>" class="form-control input-sm" placeholder="First Name"  />
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Middle name</label>
                                    <input readonly type="text" name="middlename" value="<?php echo $row->mname?>" class="form-control input-sm" placeholder="Middle Name"  />
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <label class="required">Last name</label>
                                    <input readonly type="text" name="lastname" value="<?php echo $row->lname?>" class="form-control input-sm" placeholder="Last Name"  />
                                </div>

                            </div>
                            <label>Gender : </label>
                            <label class="radio-inline">
                                <input readonly type="radio" name="gender" checked="checked" value="<?php echo $row->gender ;?>" id=male />
                                <?php echo $cg =  ($row->gender == 'M')? 'Male' :'Female' ;?>
                            </label>
                            <label class="radio-inline">
                                <input readonly type="radio" name="gender" value="<?php  echo  ($cg == 'Male') ? 'F':'M';?>" id=female />
                                <?php echo $g =  ($row->gender == 'M')? 'Female' :'Male' ;?>
                            </label>
                            <br>
                            <label>Address</label>
                            <textarea readonly class="form-control input-sm" name="address" rows="3" placeholder="Address"><?php echo $row->address ;?> </textarea>
                            <label class="required">Area/Town/City</label>
                            <input type="text" name="area" value="<?php echo $row->area ;?>" class="form-control input-sm" readonly/>
                            <label class="required">Telephone</label>
                            <input type="text" name="telephone" value="<?php echo $row->telephone ;?>" class="form-control input-sm" readonly/>
                            <label>Telephone 2</label>
                            <input type="text" name="telephone2" value="<?php echo $row->telephone2 ?>" class="form-control input-sm" readonly/>
                            <br/>



                    </div>
                </div>

                <div class="col-md-6">
                    <div class="thumbnail  familycol">
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Your package type</label>
                                    <select readonly name="plan" id="plan" class = "form-control input-sm">
                                    </select>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">The Period</label>
                                    <select readonly name="tariff" id="tariff" class = "form-control input-sm">
                                    </select>
                                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="button" style="margin-top: 5px;" onclick="javascript: window.history.back()">
                                          Back</button>

                                </div>
                            </div>


                            </div>
                            <input type="hidden" name="id" value="<?php echo $id?>"/>
                            <!-- Button Update tak perlu -->
                          <!--  <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" style="margin-top: 5px;">
                                Update my plan</button>
                              -->

                         </form>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
$('#plan').prop('disabled', true);
$('#tariff').prop('disabled', true);
$(':radio:not(:checked)').attr('disabled', true);
    $('#frm_update_member').submit(function (e) {
        e.preventDefault();
        var self = $(this);
        var type = self.attr('method');
        var url = self.attr('action');
        var data = self.serialize();
        $.ajax({
            url: url,
            type: type,
            data: data
        }).done(function (html) {
            $('.ajaxResponse').html(html);
        });
    });


    $(document).ready(function (){
        $("#main-layout").on('change', '#tariff', function(e){
                $.ajax({
                        url:'<?php echo base_url()?>'+'ajax_admin/loadnotes',
                        type:'GET',
                        data:'id='+$(this).val()
                }).done(function (html){
                        $('#ajaxnotes').html(html);
                        $('#desc').val($("#ajaxnotes").text());
                });
            });

        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
        $.ajax({
            url:'<?php echo base_url()?>'+'admin/selectPlan',
            type:'GET'
        }).done(function (html){
            $('#plan').html(html);
            $('#plan').val(<?php echo $row->package_type ?>);
        });

        $.ajax({
            url:'<?php echo base_url()?>'+'ajax_admin/loadPeriod',
            type:'GET',
            data:'id='+<?php echo $row->package_type ;?>
        }).done(function (html){
            $('#tariff').html(html);
            $('#tariff').val(<?php echo $row->package_period; ?>);
        });

        $('#ajaxnotes').html('<p class="alert alert-info">'+'<?php echo $row->desc ?>'+'</p>');
        $('#desc').val($("#ajaxnotes").text());

        $("#plan").on('change', function (e){
            e.preventDefault();
            $.ajax({
            url:'<?php echo base_url()?>'+'ajax_admin/autoloadPeriod',
            type:'GET',
            data:'id='+$(this).val()
        }).done(function (html){
            $('#tariff').html(html);
        });
    });

    $('#setstatus').on('click', function (e){
    e.preventDefault();
    if($(this).hasClass('btn-danger')){
        $(this).removeClass('btn-danger');
        $(this).addClass('btn-success');
        $(this).text('ON');
        $(this).attr('data-status',0);

    }
    else{
        $(this).addClass('btn-danger');
        $(this).text('OFF');
        $(this).attr('data-status',1);
    }
    var val = $(this).attr('data-status');
    console.log($(".expired"));
    $(".expired").val(val);
    });
    });

</script>
<?php
$this->load->view('admin/footer');
