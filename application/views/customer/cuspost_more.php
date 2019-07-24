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
                       foreach ($reply as  $value) {
                      $name=$value->dname;
                      $idd=$value->re_id;
                      $id=$value->from_id;
                      $p=$value->price;
                      $pid=$value->post_id;
                      ?>

                      <tr>
                      <td><?php echo $name;?></td>
                          <td><?php echo $value->subject;?></td>
                          <td><?php echo  $value->message;?></td>
                        <td><?php echo  $value->re_date;?></td>
                        <td><?php echo  $value->price;?></td>
                          <td><a type="button" href="#" data-toggle="modal" data-target="#myModal-<?=$id?><?=$pid?><?=$p?>" class="btn btn-primary" style="float: right;padding: 6px;margin-right: 10px;">Approve</a></td>
                          <td><a type="button" href="<?php echo base_url('index.php/designerctrl/cust_dereject/'.$idd);?>" class="btn btn-primary" style="float: right;padding: 6px;margin-right: 50px;">Reject</a></td>

                        </tr>

                       <!-- Modal -->
<div id="myModal-<?=$id?><?=$pid?><?=$p?>" class="modal fade" role="dialog" aria-hidden="true" >
 <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
        <form method="post" id="post" action="<?php echo base_url('index.php/designerctrl/cust_deapprove/'.$id.'/'.$pid.'/'.$p);?>">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>

     <div class="modal-body col-md-offset-1">

       <div class="controls">
     <div class="row">
       <div class="col-md-12">
     <div class="form-group">
     <label for="cats" id="cats">Material: </label>
     <input type="text" class="form-control" name="mat" id="mat" required="" />
</div>
<div class="form-group">
<label for="cats" id="cats">Colour: </label>
<input type="text" class="form-control" required="" id="colour"  name="colour" >
</div>
 <div class="form-group">
<label for="cats" id="cats">Occassion: </label>
<select name="occ" id="occ" required="" class="form-control">
 <option value="" >--Select Occassion--</option>
 <option value="Party"> Party</option>
               <option value="Casual"> Casual</option>
               <option value="Traditional">Traditional</option>
</select>
</div>
<div class="form-group">
<label for="cats" id="cats">Measurement date: </label>
<input type="date" class="form-control" required="" id="mdate"  name="mdate" >
</div>
     <div class="modal-footer">
<div class="btn-pst text-center">
<input type="submit" name="insert" class="btn btn-primary btn-md" id="insert"  value="Send" />
</div>
       <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="float:right">Close</button>
      </div>
</form>
      </div>

 </div>
</div>
<?php

}

?>
                        </table>

   

</div>
