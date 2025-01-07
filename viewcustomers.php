<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

 

    <!-- Link to external CSS  -->

    <link rel="stylesheet" type="text/css" href="css/viewcustomers.css">

 

    <title>Olivia Bank</title>

  </head>

  <body class="bg-light one">

        <nav class="navbar sticky-top navbar-light navbar-expand-md bg-dark">

                <div class="container">

                    <a class="navbar-brand text-light fs-4" href="index.html">Olivia Bank</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="collapse navbar-collapse fs-5" id="navbarSupportedContent">

                                <ul class="navbar-nav ms-auto mb-lg-0">

                                   <li class="nav-item">

                                      <a class="nav-link active text-light right" aria-current="page" href="index.html">Home</a>

                                   </li>

                                    <li class="nav-item">

                                       <a class="nav-link text-light right" href="#">CustomerInfo</a>

                                    </li>

                                    <li class="nav-item">

                                       <a class="nav-link text-light right" href="transfer.php">Transaction</a>

                                    </li>

                                </ul>

                             </div>

                </div>

        </nav>

        <div class="container-fluid">

             <h2 class="header">Customer Details</h2>

                <table class="table table-striped table-hover table-bordered" style="width:70%;margin-left:15%; margin-right: 15%;">

                    <thead class="text-center">

                     <tr>

                           <th>CustomerId</th>

                           <th>Name</th>

                           <th>Email</th>

                           <th>Amount</th>

                    </tr>

                    </thead>

        </div>

             <?php

            

               $host = "localhost:3307";

               $username = "user1";

               $password = "";

               $database="customers";

              

 

               // Create connection

              $conn = mysqli_connect($host, $username, $password , $database);

               // Check connection

               if (!$conn) {

                 die("Connection failed: " . mysqli_connect_error());

                }

 

              $sql = "SELECT * FROM details";

              $result = mysqli_query($conn,$sql);

            

                // output data of each row

               

                while($row = mysqli_fetch_array($result)){

                ?>

               

               <tr class="text-center">

               <td><?php echo $row['CustomerId']; ?></td>

               <td><?php echo $row['Name']; ?></td>

               <td><?php echo $row['Email']; ?></td>

               <td><?php echo $row['Amount']; ?></td>

               </tr>

               <?php

    }

 

 

 

$conn->close();

?>

 

 

 

 

 

    <!-- Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 

  

  </body>

</html>