      		<div class="service_box float_l">
                 <div class="service_image">
                 	<img src="images/bar_graph.png" alt="image" />
                 </div>
                 <div class="service_text">
                     <h2>Currency Rates</h2>
                     <p>Egypt Banks Directory Rates Table Provides Currency Values.<br>
Dear User, the currency values are updated daily Except  
<Br>week End days(Friday & Saturday).</p>
                 </div>
            </div>
            <div class="service_box float_r">
            	<div class="service_image">
                 	<img src="images/todo.png" alt="image" />
                 </div>
                 <div class="service_text">
                     <h2>Currency Converter</h2>
                     <p>Dear User , Here You can convert between currency values to get information about amount of currency you want .</p>
                 </div>
            </div>
        </div> <!-- main_service_section -->
        <div class="content_section">
        	<div class="section_410 float_l">
                <h2>Rates Table</h2>
                <p>This Currency Table Information Is From The central Bank Of Egypt.</p>
              <div class="cleaner_h20"></div>
              <?php
              include("currencyrates.php");
              ?>
                 <div class="cleaner_h20"></div>
            </div>
            <div class="section_410 float_r">
            	<h2>Converter</h2>
                <div class="news_box">
                   <?php
                   include("converter.php");
                   ?>
                </div>
              <div class="cleaner_h20"></div>
            </div>
        </div>
        <div class="cleaner_h20"></div>
    </div> <!-- end of templatemo_content_wrapper -->