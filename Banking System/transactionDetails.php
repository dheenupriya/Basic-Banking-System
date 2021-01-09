<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Summary</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
    .logo-text{
	  font-size:20px;
      color: white;
      padding-top: 15px;

	  
    }
	 .nav-link1{
      color: white;
     	  
    }
    .list-customer{
      padding-left: 1100px;
    }

    .nav-link1:hover{
      color: yellow;
      text-decoration: none;
    }
    h2{
      text-align: center;
      margin-top: 20px;
      font-family: sans-serif;
      color: #03045e;
      font-weight: bold;
    }
    td{
        font-family: Comic Sans MS;
    }

    </style>
</head>
<body style="background-color: #dbe9b2">
<header>
  <?php
  include 'navbar.php';
  ?>
</header>
        <div class="container divStyle" >
        <h2>Transaction History</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table roundedCorners table table-striped tabletext table-hover table-striped table-condensed " >
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th> Transferred Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'conf.php';
			

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
        ?>
            <tr>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['credits']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>