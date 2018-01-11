
<?php
include('include/connect.php');
include('header.php');


?>








<div class='container'>
<div class='row'>  

      
    <!-------- Slides  --------------->
    
   

     <div class='col-md-12'>
    <div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-3 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="">
                    </div>
                    <div class="col-md-9 text-left">
                        >             
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="">
                    </div>
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                       
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="">
                    </div>     
                </div></div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="">
                    </div>  
                </div></div>
            </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
      <!--  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a> ---->
    </div>
</div>
 </div>    
    
    
    
      <!-------- End Slides  --------------->

    
    
    
    
<!---------------  Posts --------------->
    
    
  
    
   
    
    
           <?php   
       
   $sql = 'select * from content ';
   $content_sql = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($content_sql)){
      
      $content_title = $row["content_title"];
      $content_image = $row["content_image"];
      $content_body  = $row["content_body"];
       
    
    
    
      ?>    
    
    
    
   
   <div class="col-sm-4 col-md-4">
       
                    
    
           
       
       
       
      <div class="post">
                
                
                <div class="post-img-content">
                    
                    
                    
        
                    
                    
                    
                    <img src="image/<?php echo $content_image ?>" class="img-responsive" />
                    <span class="post-title"><b>  <?php echo $content_title    ?> </b><br />
                        <b>Support Child</b></span>
                </div>
                <div class="content">
                    <div class="author">
                  <!----      By <b>Bhaumik</b> |
                        <time datetime="2014-01-20">January 20th, 2014</time>  -->
                    </div>
                    <div>
                        <?php echo $content_body    ?>
                    </div>
                    <div>
                        <a href="http://www.jquery2dotnet.com/2014/01/jquery-highlight-table-row-and-column.html" class="btn btn-success btn-sm">Read more</a>
                    </div>
                    
                 
                    
                </div>
                
                  
                
            </div>
       
      
   
       
        </div>
    
        
          <?php }?> 
        
    
    
    
        
    
    
<!-----  End Post     ---->

    
    
    
    
    
    
    
    
    
    
    
    
   
  </div>   
</div>
    






<?php

include('footer.php');


?>



?>


      
      
      
