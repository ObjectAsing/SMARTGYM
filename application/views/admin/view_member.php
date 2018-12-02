<?php $this->load->view('admin/header'); ?>

<div class="container" style="border-top: 1px solid #D14B54; background: #f5f5f5f5">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <?php $this->load->view('admin/sidebar'); ?>
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="ajaxResponse"><input type="hidden" name="ajaxResponse"></div>
            <div class="row" style="padding: 0px 5px;">
              <!--  <div id="dvContents" class="col-md-10 col-md-offset-1 familycol bg-primary"></div> -->
              <div id="dvContents" >
                    <h4 class="text-center">My Gym Member Information</h4>

                    <div class="col-md-10 col-md-offset-1 bg-info">
                    <hr/>
                    <div class="row">
                        <div class="col-md-4"><label>Member ID</label></div>
                        <div class="col-md-8"><label><?php echo 'A'. strtoupper($row->member_id)?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Name:</label></div>
                        <div class="col-md-8"><label><?php echo strtoupper($row->fname).' '.strtoupper($row->mname).' '.strtoupper($row->lname)?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Gender:</label></div>
                        <div class="col-md-8"><label><?php echo strtoupper ($row->gender =='M')?'MALE':'FEMALE'?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Address:</label></div>
                        <div class="col-md-8"><label><?php echo strtoupper($row->address)?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Residential area:</label></div>
                        <div class="col-md-8"><label><?php echo strtoupper($row->area)?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Mobile:</label></div>
                        <div class="col-md-8"><label><?php echo strtoupper($row->telephone)?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Mobile 2:</label></div>
                        <div class="col-md-8"><label><?php echo strtoupper($row->telephone2)?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Gym Plan:</label></div>
                        <div class="col-md-8"><label id="gp"></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Plan Package:</label></div>
                        <div class="col-md-8"><label id="pp"></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Date of joining:</label></div>
                        <div class="col-md-8"><label><?php echo  date('F jS Y', strtotime($row->start_date) ) ; ?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Expire date:</label></div>
                        <div class="col-md-8"><label><?php echo (date('F jS Y', strtotime($row->expire_date))=='January 1st 1970' )? 'None':date('F jS Y', strtotime($row->expire_date))?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Paid amount:</label></div>
                        <div class="col-md-8"><label><?php echo strtoupper($row->paid)?>/-</label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Unpaid amount:</label></div>
                        <div class="col-md-8"><label><?php echo strtoupper($row->unpaid)?>/-</label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label>Next installment date:</label></div>
                        <div class="col-md-8"><label><?php echo  (date('F jS Y', strtotime($row->next_installment))=='January 1st 1970' )? 'None':date('F jS Y', strtotime($row->next_installment))?></label></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><label>Plan Description:</label></div>
                        <div class="col-md-8"><label><?php echo strtoupper($row->desc)?></label></div>
<br>
                        <div class="row">
                          <div class="col-md-4"><center><a href="#" class="btn btn-info center" id="btnPrint" onclick="javascript:printlayer('div-id=name')">Print Info</a></div>

                    </div>


                </div>



            </div>
        </div>
    </div>

      <p>


</div>
<script>
    $(document).ready(function (){
        $.ajax({
            url:'<?php echo base_url()?>'+'admin/viewPlan',
            type:'GET',
            data:'id='+<?php echo $row->package_type ;?>
        }).done(function (html){
            $('#gp').html(html);

        });

        $.ajax({
            url:'<?php echo base_url()?>'+'admin/viewPeriod',
            type:'GET',
            data:'id='+<?php echo $row->package_period ;?>
        }).done(function (html){
            $('#pp').html(html);

        });

    });
</script>

<script type="text/javascript">
      $(function () {
          $("#btnPrint").click(function () {
              var contents = $("#dvContents").html();
              var frame1 = $('<iframe />');
              frame1[0].name = "frame1";
              frame1.css({ "position": "absolute", "top": "-1000000px" });
              $("body").append(frame1);
              var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
              frameDoc.document.open();
              //Create a new HTML document.
              frameDoc.document.write('<html><head><title>REPORT CONTENT</title>');
              frameDoc.document.write('</head><body>');
              //Append the external CSS file.
              frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" />');
              //Append the DIV contents.
              frameDoc.document.write(contents);
              frameDoc.document.write('</body></html>');
              frameDoc.document.close();
              setTimeout(function () {
                  window.frames["frame1"].focus();
                  window.frames["frame1"].print();
                  frame1.remove();
              }, 500);
          });
      });
  </script>

<?php
$this->load->view('admin/footer');
