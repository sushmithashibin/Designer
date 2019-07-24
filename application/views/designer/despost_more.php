<p class="error">
<?php
$err_msg=$this->session->flashdata('custerr');
if($err_msg){
echo$err_msg;
}?></p>
<br>
<div class="container">
  <table class="table table-striped">          
<?php 
foreach ($name as  $value) {
  $idd=$value->ap_id;
  ?>
                  
                  <tr>
                      <td>


                        <?php echo $value->cname;?></td>
                  
                      <td><?php echo $value->material;?></td>
                          <td><?php echo  $value->colour;?></td>
                          <td><?php echo  $value->occation;?></td>
                          
                          <td><?php $a= $value->mdate;$b=date("d-m-Y",strtotime($a));echo $b;?></td>
                          <td><?php echo  $value->price;?></td>

                          <td><a type="button" href="<?php echo base_url('index.php/designerctrl/cus_redelete/'.$idd);?>" class="btn btn-primary" style="float: right;padding: 6px;margin-right: 50px;">Delete</a></td>
                        </tr>
                          
<?php

}

?>
</table>
</div>


