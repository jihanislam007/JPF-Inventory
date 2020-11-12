<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jihan poultry feed</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/sidenavbar.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <style>

        body {
          margin-top: 00;
          font-family: "Lato", sans-serif;
        }


    </style> -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <!-- data table CDN  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    

  </head>
    <!-- navbar header start -->
    <?php
    include 'header.php';
    ?>
  <!-- navbar header End --> 

  <body >
  
    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-2 flag_color" >
          <!-- Fixed sidebar start -->
          <div id="container-fluid sidbartable">

            <div class="vertical-center">
                <div class=" text-wrap">
                  <h1 class="text-color-white">আজকের</h1>
                </div>
            </div>
              <!-- ******************* -->
            <div >
                <div class=" text-wrap vertical-center">
                  <h4 class="text-color-white">সর্বমোট বিক্রি</h4>
                </div>

                <div class=" text-wrap vertical-center-number" >
                  <h1 class="text-color-white">1029478</h2>
                </div>
            </div>
              <!-- ***************** -->
            <div >
                <div class=" text-wrap vertical-center">
                  <h3 class="text-color-white">বাকী</h3>
                </div>

                <div class=" text-wrap vertical-center-number" >
                  <h1 class="text-color-white">801000</h2>
                </div>
            </div>
              <!-- ***************** -->
            <div >
                <div class=" text-wrap vertical-center">
                  <h4 class="text-color-white">অতিরিক্ত খরচ</h4>
                </div>

                <div class=" text-wrap vertical-center-number" >
                  <h1 class="text-color-white">1029478</h2>
                </div>
            </div>
              <!-- ***************** -->
            <div >
                <div class=" text-wrap vertical-center">
                  <h4 class="text-color-white">সর্বমোট ক্যাশ</h4>
                </div>

                <div class=" text-wrap vertical-center-number" >
                  <h1 class="text-color-white">1029478</h2>
                </div>
            </div>
              <!-- ***************** -->
            <div >
                <div class=" text-wrap vertical-center">
                  <h4 class="text-color-white">Balance/ব্যালেন্স</h4>
                </div>

                <div class=" text-wrap vertical-center-number" >
                  <h1 class="text-color-white counter">1029478</h2>
                </div>
            </div>

          </div>

          <!-- Fixed sidebar End -->
        </div>

        <div class="col-lg-10">
          <!-- Right hand body start **************-->
          <div class="container-fluid pull-center">       
            <div class="row">        

              <div class="col-lg-2 inline" >
                <!-- <form class="example" action="/action_page.php" style="margin:auto;max-width:auto">
                  <input type="text" placeholder="Phone . . ." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form> -->
              </div>

              <div class="col-lg-6 align-self-center" >
                <h1 class="row justify-content-center align-self-center flag_color_text inline">Jihan Poultry Feed</h1>        
                <span class="row justify-content-center align-self-center">Thana Road,Sherpur Sadar , Sherpur</span>
              </div>

              <div class="col-lg-2 inline" >
              </div>

              <div class="col-lg-2 align-self-center" >
                <button type="button" class="btn btn-lg btn-block text-white flag_color" data-toggle="modal" data-target="#newCustomerModal">New Customer</button>
              </div>        
        
          </div>

      <!-- Table start -->
        <div class="contain pull-center pb-5">

          <table id="datatableid" class="table table.Responsive table-bordered">
            <thead class="flag_color">
              <tr >
                <th class="text-color-white text-center"><Strong>SL</Strong></th>
                <th width="25%" class="text-color-white text-center"><Strong>Customer Name</Strong></th>
                <th width="20%" class="text-color-white text-center"><Strong>Phone</Strong></th>
                <th  class="text-color-white text-center"><Strong>Total Product</Strong></th>
                <th scope="col" class="text-color-white text-center" style="text-align: center;"><Strong>Total Transaction</Strong></th>
                <th scope="col" class="text-color-white text-center"><Strong>Total due</Strong></th>
                <th scope="col" class="text-color-white text-center"><Strong>Action</Strong></th>
              </tr>
            </thead>
            <tbody >

              <?php
                include 'database_connect.php';

                $sql = "SELECT * FROM Dashboard ORDER BY `id` DESC";
                $result = $conn-> query($sql);

                if($result-> num_rows >0){
                  while($row = $result-> fetch_assoc()){
                    
                    $id = $row["id"];
                    $customer_name = $row["customer_name"];
                    $phone = $row["phone"];
                    $product = $row["product"];
                    $due = $row["due"];
                    $time = $row['time'];
                    //$time = date("Y-m-d h:i", strtotime($row['time']));
                    
                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$customer_name."</td>";
                    echo "<td>".$phone."</td>";
                    echo "<td>".$product."</td>";
                    echo "<td>".$due."</td>";
                    echo "<td>".$time."</td>";
                    
                  ?>
                    <td class="text-center"> 
                  
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" type="button">Memo</button>
                      <button class="dropdown-item" type="button">Dtails</button>
                    </div>
                  </div>
                  
                </td>
                    
                  <?php
                  
                      }
                      
                    }
                    else{
                      echo "0 result";
                    }
                    $conn-> close();
                  ?>

            </tbody>
          </table>

        </div>
      <!-- Table start -->
    </div>
    <!-- Right hand body End -->
        </div>
      </div>
    </div>

    <!-- new customer popup start -->
      <div class="modal fade" id="newCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
            <form id="myForm" action="new_customer_insert.php" method="POST">
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label >Customer Name:</label>
                        <input type="text" name="customer_name" class="form-control" placeholder="Customer Name" >
                    </div>

                    <div class="form-group">
                        <label >Phone:</label>
                        <input type="text" name="phone" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label >Product:</label>
                        <input type="number" name="product" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label >Due:</label>
                        <input type="number" name="due" class="form-control" >
                    </div>                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn flag_color  text-white">Save Data</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      <!-- new customer popup End -->

  </body>  

  <!-- Footer start -->
  <?php
    include 'footer.php';
    ?>
  <!-- Footer End --> 
      
      <!-- jquery counter up start -->

      <!-- <script src="js/jquery.min.js"></script> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- <script src="js/jquary.waypoint.min.js"></script> -->
      <!-- <script src="js/jquery.counterup.min.js"></script> -->
      <!--** <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> -->
      <!--** <script src="js/jquery.counterup.min.js"></script> -->

      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="js/"></script>
      <script src="js/jquery.counterup.min.js"></script>

      <script>
        $('.counter').counterUp({
          delay: 10,
          time: 1000
        });
      </script>
      <!-- jquery counter up end -->


      <!-- data table js start -->
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

      <script>        
        $(document).ready(function() {
        $('#datatableid').DataTable({
          
          "pagingType": "full_numbers",
          "lengthMenu": [
            [10,25,50,-1],
            [10,25, 50, "All"]
          ],
          responsive:true,
          
          language:{
            search:"_INPUT_",
            searchPlaceholder: "Serch hear...",
            
          }
          
        });
        } );
      </script>

      

</html>

