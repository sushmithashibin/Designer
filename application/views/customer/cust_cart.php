<body style="background-color:#FFF0F5">
   <div class="container">
    <h1 style="font-size:50px;text-align:center">Cart Details</h1>

<?php if(empty($cart)){
                                      ?>
                                      <p style="text-align: center;font-size: 3.5em;">No Data </p><?php
                                     }
                                     else{
                                      ?>
<table class="table table-bordered">
    <tr>
       <!-- <td> Id   : </td><td>  <?php //$fid=$get['sid']; echo $fid;?></td></tr>-->

        
<th> Product  </th>
<th> Quantity  </th>
<th> Product Name  </th>
<th> Price  </th>
<th> Total  </th>
<th> Remove  </th></tr>
<?php
$g_total=0;
     foreach ($cart as $value) {
      $id=$value->login_id;
      $product=$value->image;
      $quantity=$value->quantity;
      $name=$value->dressname;
      $price=$value->amount;
      $total=$quantity * $price;
      $g_total+=$total;
      $idd=$value->cart_id;
      //$sl=1;
      //$city=$value->city;
      //$state=$value->state;
      //$pin=$value->pincode;
      //$phone=$value->phone;
      //$email=$value->email;
     // $pass=$value->pass;
    
          ?> 
        <tr>

          <td style="width:300px"> <center><img src="<?php echo base_url();?>/uploads/<?php echo $product;?> " alt ="<?php echo $product;?>" width='150' height='150'></center></td>
<td style="width:5px"><center><?php echo $quantity;?></center></td>
<td style="width:10px"><center><?php echo $name;?></center></td>
<td style="width:10px"><center><?php echo $price;?></center></td>
<td style="width:10px"><center><?php echo $total;?></center></td>
<td style="width:10px"><center><a href="<?php echo base_url('index.php/designerctrl/cust_cartdelete/'.$idd);?>" ><button type="button" class="close" data-dismiss="modal">&times;</button></a></center></td>
        </tr>
       
    
<?php
  }
  ?>
   <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
          <td>
            <?php
            
            echo $g_total;
            ?>
          </td>
          <td>
<div class="col-md-6">
            <a href="<?php echo base_url('index.php/designerctrl/cart_purchase/'.$id);?>" type="button" class="fa fa-rupee" onclick="return confirm ('Are you sure  to purchase ?,Once confirmed You cannot cancel this purchase.')" title="Cash on delivery" style="font-size:20px"></a></div><div class="col-md-6">
<a href="#"  class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#myModal-<?=$id?>" title="Online Purchase" style="font-size:20px;"> </a></div>
<div id="myModal-<?=$id?>" class="modal fade" role="dialog" aria-hidden="true" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
         <form method="post" id="post" action="<?php echo base_url('index.php/designerctrl/cart_purchase/'.$id);?>">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enter Your Card details</h4>
      </div>

      <div class="modal-body col-md-offset-1">

        <div class="controls">
      <div class="row">
        <div class="col-md-6">
<!--<center><h5><u>Enter Your Dress details</u></h5></center><br>
<div class="form-group">
      <label for="cats" id="cats">Size</label>
      <!--<select name="size" id="size" required="" class="form-control">
        <?//php 

            //foreach($groups as $row)
            //{
    //echo '<option value="'.$row->size.'">'.$row->size.'</option>';
    //}
            ?>
</select>-->
 <!--<select name="size" id="size" required="" class="form-control">
    <option value="" >--Select Size--</option>
    <option value="Regular"> Regular</option>
    <option value="XS(Extra small)"> Extra small</option>
    <option value="S(Small)"> Small</option>
    <option value="M(Medium)"> Medium</option>
    <option value="L(Large)"> Large</option>
    <option value="XL(Extra Large)"> Extra Large</option>
</select>
</div>
<div class="form-group">
      <label for="cats" id="cats">Quantity</label>
      <input type="number" class="form-control" name="number" id="number" value="1" min="1" max="10" required="" />
</div><br>
<center><h5><u>Enter Your Card details</u></h5></center><br>-->
      <div class="form-group">
      <label for="cats" id="cats">Card Number</label>
      <input type="text" class="form-control" name="cnumber" id="cnumber" pattern="[0-9]{16}" required="" />
</div>
   <div class="form-group">
      <label for="cats" id="cats">CVC</label>
      <input type="text" class="form-control" name="cvc" id="cvc" required="" pattern="[0-9]{3}" />
</div>
   <div class="form-group">
      <label for="cats" id="cats">Expiration Date</label>
      <input type="text" class="form-control" pattern="([0-9]{2}[/]?){2}" name="exp" id="exp" required="" />
</div>
   <div class="form-group">
      <label for="cats" id="cats">E-Mail</label>
      <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" id="email" required="" />
</div>
</div></div></div>
      </div>
      <div class="modal-footer">
<div class="btn-pst text-center">
<input type="submit" name="insert" class="btn btn-primary btn-md" id="insert"  value="Pay" />
 </div>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
       </div>
 </form>
       </div>
  </div>
</div>
          </td>
        </tr>

  </table>
<?php 
}
?>
</div>
    </body>



</html>
