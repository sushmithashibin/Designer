<html>
  <head>
    <link type="text/css" rel="stylesheet" href="templates/face/ust.css" />
    <link rel="apple-touch-icon" href="/templates/dgrid/images/image2.jpg'">
    <link rel="shortcut icon" href="<?php base_url()?>/templates/dgrid/images/logo1.png" type="image/gif "sizes="16x16" >
<link rel="icon" href="<?=base_url()?>templates/dgrid/images/logo1.png" type="image/gif">

      <style>
        #fr{
                text-align: center;
            }
        #f{
                margin-top: 100px;
          }
        h3{
              text-align: center;
          }
        body{
              background: #d5d5d5;
            }
        #r{
                    margin-top: 132px;
          }
        img{
              opacity: 1;
              display: block;
              width: 100%;
              height: auto;
              transition: .5s ease;
              backface-visibility: hidden;
            }
        .middle{
              transition: .5s ease;
              opacity: 0;
              position: absolute;
              top: 60%;
              left: 40%;
              transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              text-align: center;
            }
        .p:hover .img-responsive {
                                    opacity: 0.3;
                                  }
        .p:hover .middle {
                            opacity: 1;
                          }
        .t {
            background-color: #2f83c7;;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
            }
        .parallax {
                    /* The image used */
                    background-image: url('<?php echo base_url();?>/templates/dgrid/images/image2.jpg');
                    /* Full height */
                    height: 100%;
                    /* Create the parallax scrolling effect */
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                  }
                      /* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
        @media only screen and (max-device-width: 1366px) {
        .parallax {
                    background-attachment: scroll;
                  }
                  }
      </style>
        <?php $cnt=$this->session->flashdata('send');
          if($cnt){ 
        ?>
      <script type="text/javascript">
                   alert('<?php echo $cnt;?>');
      </script>
        <?php } ?>
    </head>
      <!--<body style="background-image: url('<?php echo base_url();?>/templates/dgrid/images/body1.jpg');background-repeat: no-repeat;">-->

    <body>
      <div style="padding: 90px 0px;margin-top:0px;background-image: url('<?php echo base_url();?>/templates/dgrid/images/new6.jpg');">
        <h1 id="f" style="text-align: center;color: #ec0c55;"><b>Customer Posts</b></h1>
      </div>
          <!-- <div class="parallax"></div>-->
      <div class="container" >
        <div class="row">
            <?php foreach ($file as $value) {
                       $id=$value->login_id;
                       $ids=$value->post_id;
            ?>
        <div class="col-sm-6" style="margin: 30px 0px;padding-top:20px;">
          <div style="background-color: black;width: 80%;">
            <div class="row" style="padding: 10px;">
              <div class="col-sm-6" style="color: Yellow;">
                  <?php echo $value->cname;?>
              </div>
              <div class="col-sm-6" style="color: white;">
                                Posted on: <?php echo $value->postdate;?>
              </div>
              <div class="col-sm-6" style="color: grey; font-size:12px;">
                                Material: <?php echo $value->material;?><br>
                                Price: <?php echo $value->price;?>
              </div>
              <div class="col-sm-12">
                        <p style="color: white;margin-top: 40px;"><?php echo $value->post;?></p>
                          <a href="#"data-toggle="modal" data-target="#myModal-<?=$id?><?=$ids?>" type="button"  class="fa fa-reply" style="position: absolute;right: 120px;bottom:2px;" title="Reply"></a>
                          <a href="<?php echo base_url('index.php/designerctrl/despost_delete/'.$ids);?>" type="button"  class="glyphicon glyphicon-trash" style="position: absolute;right: 20px;bottom:2px;margin-top: 50px"title="Delete" onclick="return confirm
                                            ('Are you sure  to Delete ?')"></a>
                                            <!-- Modal -->
                <div id="myModal-<?=$id?><?=$ids?>" class="modal fade" role="dialog" aria-hidden="true" >
                  <div class="modal-dialog">
                            <!-- Modal content-->
                    <div class="modal-content">
                      <form method="post" id="post" action="<?php echo base_url('index.php/designerctrl/despost_reply/'.$ids.'/'.$id);?>">
                        <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body col-md-offset-1">
                          <div class="controls">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                            <label for="cats" id="cats">To:</label>
                                              <?php echo $value->cname;?>
                                </div>
                                <div class="form-group">
                                              <label for="cats" id="cats">Subject:</label>
                                                <input type="text" class="form-control" name="subject" id="subject" required="" />
                                </div>
                                <div class="form-group">
                                                <label for="cats" id="cats">Message:</label>
                                                  <textarea class="form-control" name="msg" id="msg" required=""></textarea>
                                </div>
                                <div class="form-group">
                                                  <label for="cats" id="cats">Price:</label>
                                                    <input type="text" class="form-control" name="price" id="price" required="" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <div class="btn-pst text-center">
                                      <input type="submit" name="insert" class="btn btn-primary btn-md" id="insert"  value="Send" />
                          </div>
                                      <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>

                   </div>
                 </div>
                </div>
              </div>
              <div class="p">
                                  <a href="<?php echo base_url('index.php/designerctrl/cuspost_more/'.$ids);?>"><img class=" img-responsive " style="width: 100%;height: 400px;" id="p" src="<?php echo base_url();?>/uploads/<?php echo $value->pimage;?> " alt ="<?php echo $value->pimage;?>" ></a>
                <div class="middle">
                  <div class="t">  <a style="color:white" href="<?php echo base_url('index.php/designerctrl/cuspost_more/'.$ids);?>">Click Here to View Reply..!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                            <?php
                              }
                              ?>
        </div>
      </div>
      <!--<br>
      <?php foreach ($file as $value) {
        ?>
        <div class="container" style="border:1px solid #ddd;background-color: white;">
        <table class="table">
        <tr>
        <td>
        <!--<td> <img src="../uploads/<?php //echo $getf['pimage'];?> " style="width: 50px; height: 50px;" class="img-circle img-responsive " alt ="<?php //echo $getf['fimage'];?>">--
        <?php echo $value->cname;?></td><td>Posted on:<?php echo $value->postdate;?></td></tr>
          <tr><td>

            <p> <?php echo $value->post;?></p>
            <hr>
           <p>

             <img class=" img-responsive " id="p" src="<?php echo base_url();?>/uploads/<?php echo $value->pimage;?> " alt ="<?php echo $value->pimage;?>" >    </p>
          <!--
          <a href="like.php?like=<?php// echo $getf['id'];?>"><span class="glyphicon glyphicon-thumbs-up"></span></a>
         <?php// echo $getf['like'];?> </td></tr>
          </table>
          </div>
        </div>
        <br>-
             <?php
          }?>-->
      <div class="footer-cpy" style="background-color: black">
        
            <center>
                    <p style="text-align:center;background-color: black;">© 2018 All rights reserved </p>
            </center>
          <div class="clearfix"></div>
      
      </div>
        <!-- //banner -->
    </body>
</html>
