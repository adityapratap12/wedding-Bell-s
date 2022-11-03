<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
        <?php include'header.php';?> 

</head>

<body>
    
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-vintage-cinema-camera-looking-left icon-white"></i>
                        </div>
                        <h1>Our Service Details</h1>
                        <p>Find the perfect wedding Service for your wedding. Search wedding reception Service reviews and vendors in your area.</p>
                        <span class="label label-default"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active"> Our Services Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">

               
                <div class="col-md-8 content-left">
                    <!-- content left -->
                    <div class="row">
                         <?php  
         foreach ($product1 as $row)  
         {
       
          ?> 
                        <div class="col-md-12 post-holder">
                            <div class="well-box">
                                <div class="sticky-sign"><i class="fa fa-bookmark"></i></div>
                                <!-- blog holder -->
                                <div class="post-image">
                                    <<a href="<?php echo $row->image;?>"><img src="<?php echo $row->image;?>" width="100%" height="300px"  alt=""></a> 
                                </div>
                                <h1 class="post-title"><?php echo $row->title;?></h1>
                                <div class="post-meta">  </div>
                              <!-- Amount &nbsp;Rs.&nbsp;<?php echo $row->bamount;?>/-&nbsp;INR -->
                                <div class="post-meta">  </div>
                                <p><?php echo $row->des;?></p> 

                              </div>

                        </div>

                  <?php } ?>
                        <!-- /.blog holder -->
                        
                        <!-- /.blog holder -->
                        
                    </div>
                </div>
                <!-- /.content left -->
                <div class="col-md-4 right-sidebar">
                    <!-- right sidebar -->
                    
                        <!-- /.widget -->
                        <div class="col-md-12 widget widget-category">
                            <!-- widget -->
                            <div class="well-box">
                                 <?php  
         foreach ($veneu as $row)  
         {
                    $vid=$row->title;
        }

          foreach ($photographer as $row)  
         {
         $pid=$row->title;  
        }

          foreach ($decoration as $row)  
         {
           $did=$row->title;
        }

          foreach ($catering as $row)  
         {
           $cid=$row->title;
        }

         foreach ($product as $row)  
         {
                    $sum=$row->sum;
        }
          ?> 
                                <h2 class="widget-title">Detials</h2>
                                <ul class="listnone angle-double-right">
                                    <li><a href="#">  <b>Venue</b> &nbsp;&nbsp;<?php echo $vid;?> <span></span></li>
                                    <li><a href="#"> <b>Catering</b> &nbsp;&nbsp; <?php echo $cid;?></a> <span></span></li>
                                    <li><a href="#"> <b>Decorations</b>&nbsp;&nbsp;<?php echo $did;?></a> <span></span></li>
                                    <li><a href="#"> <b>Photographer </b>&nbsp;&nbsp;<?php echo $pid;?></a> <span></span></li>
                                   
                                    <li><a href="#"><b>Package Amount</b> &nbsp;Rs.&nbsp;<?php echo $sum;?>/-&nbsp;INR</a></a> <span></span></li>
      
                                </ul>
                                   <a href="https://rzp.io/l/3X1FIXpM7s" class="btn btn-success btn-lg btn-block" target="_blank">Pay Now</a>
                            </div>
                        </div>
                        <!-- /.widget -->
                        
                        
                    </div>
                </div>
                <!-- /.right sidebar -->
            </div>
        </div>
    </div>
        

</body>


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/videography-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:12:47 GMT -->
</html>
