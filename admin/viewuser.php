<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("config.php");




?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View user</h1>

    </div><!-- End Page Title -->
    <br><br>

    <!-- <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <br><br>
              <h3 class="card-title">User data</h3>
              <br><br>
             

           
              <table class="table">
                <thead>
                  <tr>
                  <th>Id</th>
                    <th><b>first</b>Name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Update</th>
                    <th>Delete</th>


                    
                  </tr>
                </thead>
                <tbody id="utab">
            
                   
                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </section> -->

     <!-- table -->
     <div class="table-responsive">
                  <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                    <thead class="bg-light">
                      <tr>
                      
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Update</th>
                        <th>Delete</th>
                 
                      </tr>
                    </thead>
                    <tbody id="utab">
                   
              
          




                    </tbody>
                  </table>

                </div>




  </main><!-- End #main -->
  <?php 

include("include/footer.php");


?>