<head>
  <script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },10000);
</script>
    <style>
                .navbar-default .navbar-nav>.approve>a,
.navbar-default .navbar-nav>.approve>a:hover,
.navbar-default .navbar-nav>.approve>a:focus {
    color: #00cfff;
    background-color: transparent;
}

.wthree-btn.btn-6.home {
    background-color: #f91f6f;
}
#f{
    padding-top: 130px;
}

            button, html input[type="button"], input[type="reset"], input[type="submit"] {

    background: #FFC107;
    border: #FFC107;
            }
            .glyphicon {

    color: #FFC107;
            }
            table{
        width:80%;
        }
caption{
            color:  #009688;
            font-size: 25px;
                padding-bottom: 28px;
                    padding-top:129px;
                    text-align: center;
        }
        td,th{
              height: 62px;
    text-align: center;
    width: 71px;
        }
        img{
            height:100px;
            width: 100px;
        }

    </style>
</head>



<body style="background-color:#FFF0F5">

	<!-- banner -->


	<div class="banner_top">

    <div class="md-col-12">
   <table  align="center" border="5" style="color:#ec5812fa; font-size: 20px;">

         <caption style="color: #f10ca9fa;"><b style="font-size: 38px;">Customers Who Place Orders</b></caption>
    <tr>
      <th>Date </th>
          <th>Customer Name</th>

           <th>Email</th>
               <th>Contact Number</th>
          <th>Dress Name</th>
          <th>Status</th>
       <!--    <th>Image</th>-->



    </tr>

<?php

foreach ($wish as $value) {
$ids=$value->cart_id;
//echo $ids;
//exit();
   ?>
    <tr><td><?php echo $value->c_time;?></td>

          <td><?php echo $value->cname;?></td>
    <td><?php echo $value->email;?></td>
    <td><?php echo $value->phone;?></td>




<td><?php echo $value->dressname;?> </td>

<td>
   <a href="<?php echo base_url('index.php/designerctrl/de_cartdeliver/'.$ids);?>" type="button" class="btn btn-primary btn-primary" style="background-color: #b75133;">Delivered</a></td>

    </tr>

<?php
}
foreach ($wishes as $value) {
$ids=$value->cart_id;
?>
<tr><td><?php echo $value->c_time;?></td>

          <td><?php echo $value->cname;?></td>
    <td><?php echo $value->email;?></td>
    <td><?php echo $value->phone;?></td>




<td><?php echo $value->dressname;?> </td>

<td>
   <a href="<?php echo base_url('index.php/designerctrl/de_cartdeliver/'.$ids);?>" type="button" class="btn btn-primary btn-primary" style="background-color: #b75133;">Delivered</a></td>

    </tr>
<?php
}
?>
   </table>
    </div>



</body>
</html>
