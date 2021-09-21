<?php include 'header.php';?>
   <div class="content-area">
	    	<div class="row">
            	<!-- Welcome Message -->
		
                    	<div class="row welcome-message">
            <div class="medium-8 small-12 columns">
    	    	<h2>Welcome To FrootBee Pvt Ltd!</h2>
                <?php 
                                   $result = ORM::for_table("site_about")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?>
                
                
                <p> <?php echo $res['full_about'];?></p>
                     
                                             <?php endforeach; ?>
                
        	</div>
            
        </div>	
                    <div class="clearfix"></div>
			   </div>	
    			<!-- Welcom Message Ends -->
                        <hr>
               <div class="home-module">	
            <div class="row">
                <div class="medium-4 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>Product Distribution</strong><br>
                                We deliver a diverse range of high-quality products and value added opportunities, from seed to shelf.
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->
               
               <div class="medium-4 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-industry" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>Product Development</strong><br>
             We have an ongoing investment in innovation and product development, and are committed to understanding markets and finding new and better ways for our customers to succeed.
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->
               
               <div class="medium-4 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>Social Responsibility</strong><br>
Leaders in Social Responsibility, we are rooted in the communities where we work and dedicated to the reciprocal success of everyone we touch.
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->
               
            </div>
       </div><!-- icons-wrap -->           
	        </div><!-- Row ends -->
		</div>
<?php include 'footer.php'; ?>