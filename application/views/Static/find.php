 <!DOCTYPE html>
<html lang="en">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"  media="screen">
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

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
                        <h1>Find Your Results...</h1>
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
                        <li class="active"> Find Your Results...</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">

  <div data-role="main" class="ui-content">
    <form action="<?php echo base_url().'Welcome/Find2'?>" method="post">
      <div data-role="rangeslider">
        <label for="price-min">Price:</label>
        <input type="range" name="price_min" id="price-min" value="1000" min="1000" max="10000000">
        <label for="price-max">Price:</label>
        <input type="range" name="price_max" id="price-max" value="10000" min="5000" max="10000000">
      </div>
         <input type="hidden" name="service" value="<?php echo $service; ?>">
        <input type="hidden" name="location" value="<?php echo $location; ?>">
        
        <input type="submit" data-inline="true" value="Submit">

        <p>The range slider can be useful for allowing users to select a specific price range when browsing services.</p>
      </form>
  </div>
</div>

<?php  
         foreach ($category as $row)  
         {
       
          ?> 


                <div class="col-md-6">
                    <div class="vendor-list-block mb30">
                        <!-- vendor list block -->
                        <div class="vendor-img">
                            <a href="#"><img src="<?php echo $row->image;?>" alt="wedding venue" width="100%" height="250px"></a>
                            <!-- <div class="category-badge"><a href="#" class="category-link">category-badge</a></div> -->
                            <!-- <div class="price-lable"><?php echo $row->bamount;?></div> -->
                            <!-- <div class="favorite-action"> <a href="#" class="fav-icon"><i class="fa fa-heart"></i></a> </div> -->
                        </div>
                        <div class="vendor-detail">
                            <!-- vendor details -->
                            <div class="caption">
                                <h2><a href="<?php echo base_url();?>Welcome/Service_details?id=<?php echo $row->id;?>"> <?php echo $row->title;?></a></h2>
                                <div class="vendor-meta"> <span class="location"> <i class="fa fa-map-marker map-icon"></i> <h3><?php echo $row->address;?></h3></span><br> <span class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count"><a href="<?php echo base_url();?>Welcome/Service_details?id=<?php echo $row->id;?>" class="btn btn-default">View Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.vendor details -->
                    </div>
                    <!-- /.vendor list block -->
                </div>

<?php } ?>



                
            </div>
            <!--  -->
        </div>
    </div>
        <?php include'footer.php';?>

</body>


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/videography-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:12:47 GMT -->
</html>
