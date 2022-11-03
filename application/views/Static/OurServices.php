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
                        <h1>Our Service</h1>
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
                        <li class="active"> Our Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
<?php  
         foreach ($product as $row)  
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
