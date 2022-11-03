<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
   
    <?php include'header.php';?> 
</head>

<body>
    
    <div class="slider-bg">
        <!-- slider start-->
        <div id="slider" class="owl-carousel owl-theme slider">
            <div class="item"><img src="<?php echo base_url();?>Public/Static/images/hero-image3.jpg" alt="Wedding couple just married"></div>
            <div class="item"><img src="<?php echo base_url();?>Public/Static/images/hero-image2.jpg" alt="Wedding couple just married"></div>
            <div class="item"><img src="<?php echo base_url();?>Public/Static/images/hero-image.jpg" alt="Wedding couple just married"></div>
        </div>
        <div class="find-section">
            <!-- Find search section-->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 finder-block">
                        <div class="finder-caption">
                            <h1>Find your perfect Wedding Vendor</h1>
                            <p>Over <strong>1200+ Wedding Vendor </strong>for you special date &amp; Find the perfect venue &amp; save you date.</p>
                        </div>
                        <div class="finderform">
                            <form method="post" action="<?php echo base_url().'Welcome/Find'?>" enctype="multipart/form-data">


                                <div class="row">
                                    
                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="category">
                                            <?php  
                                            foreach ($data as $row)  
                                            {

                                            ?>
                                           <option value="<?php echo $row->id;?>"><?php echo $row->title;?></option> 
                                       
                                       <?php } ?> </select>

                                    </div> 


                                    <div class="form-group col-md-4">
                                        <select class="form-control" name="location">
                                                <option>Mumbai</option>
                                                <option>Delhi</option>
                                                <option>Bangalore</option>
                                                <option>Hyderabad</option>
                                                <option>Ahmedabad</option>
                                                <option>Kolkata</option>
                                                <option>Surat</option>
                                                <option>Pune</option>
                                                <option>Jaipur</option>
                                                <option>Lucknow</option>
                                                <option>Kanpur</option>
                                                <option>Nagpur</option>
                                                <option>Indore</option>
                                                <option>Thane</option>
                                                <option>Bhopal</option>
                                                <option>Visakhapatnam</option>
                                                <option>Patna</option>
                                                <option>Vadodara</option>
                                                <option>Ghaziabad </option>
                                       
                                      </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Find Vendors</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Find search section-->
    </div>
    <!-- slider end-->
    <div class="section-space80">
        <!-- Feature Blog Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Your Wedding Planing Start Here</h1>
                        <p>Various versions have evolved over the years sometimes by accident sometimes on purpose.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- feature center -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><img src="<?php echo base_url();?>Public/Static/images/vendor.svg" alt=""></div>
                        <h2>Find local vendor</h2>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><img src="<?php echo base_url();?>Public/Static/images/mail.svg" alt=""></div>
                        <h2>Contact vendor</h2>
                        <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><img src="<?php echo base_url();?>Public/Static/images/couple.svg" alt=""></div>
                        <h2>Save Your Date</h2>
                        <p>The generated Lorem Ipsum is therefore always free from repetition injected humour or non-characteristic words etc.</p>
                    </div>
                </div>
                <!-- /.feature block -->
            </div>
            <!-- /.feature center -->
        </div>
    </div>
    <!-- Feature Blog End -->
    <div class="section-space80 bg-light">
        <div class="container">
            <div class="row">

               
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Featured Wedding Packages</h1>
                        <!-- <p>Many desktop publishing packages and web page editors now use orem psum as their default model text.</p> -->
                    </div>
                </div>
            </div>
            <div class="row ">

                 <?php  
         foreach ($pack as $row)  
         {
       
          ?> 
                <div class="col-md-4">
                    <!-- vendor box start-->
                    <div class="vendor-box">
                        <div class="vendor-image">
                            <!-- vendor pic -->
                            <a href="<?php echo $row->image;?>"><img src="<?php echo $row->image;?>" alt="wedding vendor" height="180px" width="342px"  ></a>
                            <div class=""></div>
                            <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                        </div>
                        <!-- /.vendor pic -->
                        <div class="vendor-detail">
                            <!-- vendor details -->
                            <div class="caption">
                                <!-- caption -->
                                <a href="<?php echo base_url();?>Welcome/Package_Details?id=<?php echo $row->id;?>">
                                <h2><a href="<?php echo base_url();?>Welcome/Package_Details?id=<?php echo $row->id;?>" class="title"><?php echo $row->title;?></a></h2>
                                <p class="location"><i class="fa fa-map-marker"></i> <?php echo $row->des;?></p>
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count"></span> </a></div>
                            </div>
                            <!-- /.caption -->
                            <div class="vendor-price">
                                <div class="price"><a href="<?php echo base_url();?>Welcome/Package_Details?id=<?php echo $row->id;?>" class="btn btn-default">View Details</a></div>
                            </div>
                        </div>
                        <!-- vendor details -->
                    </div>
                </div>


                 <?php } ?>
                <!-- /.vendor box start-->
                
            </div>
        </div>
    </div>
    <div class="section-space80">
        <!-- top location -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Top Wedding Locations</h1>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php  
         foreach ($product as $row)  
         {
       
          ?> 
                <div class="col-md-4 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="<?php echo base_url();?>Welcome/Service_Details?id=<?php echo $row->id;?>">"><img src="<?php echo $row->image;?>" alt=""  height="350px" width="300px"></a> <a href="#" class="venue-lable"><span class="label label-default"><?php echo $row->address;?></span></a> </div>
                </div>

                 <?php } ?>
                <!-- /.location block -->
                
                <!-- /.location block -->
            </div>
        </div>
    </div>


    <div class="section-space80">
        <!-- Real Weddings -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Recent Gallery</h1>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php  
         foreach ($gallerys as $row)  
         {
       
          ?> 

                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <div class="real-wedding-img">
                            <a href="<?php echo $row->image;?>"><img src="<?php echo $row->image;?>" alt="" width="360px" height="350px"></a>
                        </div>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="<?php echo $row->image;?>" class="title"><?php echo $row->title;?></a></h2>
                            
                        </div>
                    </div>
                    <!-- /.real wedding block -->
                </div>

<?php } ?>

                
                    <!-- /.real wedding block -->
                </div>


                
            </div>

            <div class="row">
                <div class="col-md-12 text-center"><a href="<?php echo base_url();?>Welcome/Gallery2" class="btn btn-default btn-lg">View More Photos</a></div>
            </div>
        </div>
    </div>


    <div class="section-space80">
        <!-- Real Weddings -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Recent Video Gallery</h1>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php  
         foreach ($video_gallerys as $row)  
         {
       
          ?> 

                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <div class="real-wedding-vdo">
                           <iframe width="360" height="315" src="https://www.youtube.com/embed/<?php echo $row->url;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="<?php echo $row->url;?>" class="title"><?php echo $row->title;?></a></h2>
                            
                        </div>
                    </div>
                    <!-- /.real wedding block -->
                </div>

<?php } ?>

                
                    <!-- /.real wedding block -->
                </div>


                
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center"><a href="<?php echo base_url();?>Welcome/Videos2" class="btn btn-default btn-lg">View More Video's</a></div>
            </div>
        </div>
    </div>
    <!-- /.top location -->
    
    <!-- /. Testimonial Section -->
    <?php include'footer.php';?>

</body>


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:06:44 GMT -->
</html>
