
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 >Designers Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                 
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
                   
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                     
                   
   

       

  <table class="table table-striped"><thead>
    <tr><div class="col-md-4">
      <th width="2%">Dessigner Name</th></div>
<div class="col-md-4">
      <th width="2%">Status</th></div>
    </tr></thead><tbody>
      <?php foreach ($designer as  $value) {
        $id=$value->did;

        $ids=$value->login_id;
     ?><tr>

      <td><a style="color: #16B7B7; text-decoration: underline;" href="<?php echo base_url('index.php/'.ADMIN_PATH.'designerctrl/designerdetails/'.$id);?>" ><?php echo $value->dname;?></a></td>
       
      
     <td> 
    <?php if($value->status=="0"){
      ?>
        <a name="enable" id="enable"  href="<?php echo base_url('index.php/'.ADMIN_PATH.'designerctrl/enabledesigner/'.$ids);?>">Approve</a> <?php } 
        else if($value->status=="1"){?>
<a name="enable" id="enable"   href="">approved</a><?php }
else if($value->status=="2"){?>
<a name="enable" id="enable"   href="">Rejected</a><?php }?>
     </td>
       <div class="col-md-4">
      <td> 
    <?php if($value->status=="0"){
      ?>
        <a name="disable" id="disable"  href="<?php echo base_url('index.php/'.ADMIN_PATH.'designerctrl/disabledesigner/'.$ids);?>">Reject</a> <?php } 
        else if($value->status=="1"){?>
<a name="disable" id="disable"   href="">approved</a>
<?php }
else if($value->status=="2"){?>
<a name="disable" id="disable"   href="">Rejected</a><?php }?>
     
     
  
     </td></div>
    </tr>
    <?php }?>
    </tbody>
   
    
  </table>
                 </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
     