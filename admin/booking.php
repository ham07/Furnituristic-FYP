<?php
session_start();
if($_SESSION["admin"]=="")
{
  ?>
  <script type="text/javascript">
  alert("You Cannot open this page without login Thank you")
   window.location="admin_login.php";
 </script>
  <?php

}
//page will refresh automatically after 5 sec
header("refresh: 5");
include "header.php";

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"fyp_2");
 ?>

         <div class=""style="padding-top:35px;">
             <div class="box round first">
                 <h2> Carpenter Booking</h2>
                 <div class="block">
                   <a class="btn btn-info" href="book_a_carpenter_comOrders.php">Completed Bookings</a>


  <?php
   $res=mysqli_query($link,"select * from book_a_carpenter where status='incomplete' order by id desc");
    ?>
    <table class="table" style="margin-top:20px;">
      <thead class="thead-dark">
        <tr>
          <th scope="col">first name</th>
          <th scope="col">Last name</th>
          <th scope="col">Contact No</th>
          <th scope="col">Problem</th>
          <th scope="col">Address</th>
          <th scope="col">Booking Date</th>
            <th scope="col"></th>
            <th scope="col">Action</th>
            <th scope="col"></th>

        </tr>
      </thead>
      <?php
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>
      	<td>". $row['fname']."</td>
      	<td>". $row['lname']."</td>
      	<td>". $row['contact']."</td>
      	<td>". $row['problem']."</td>
      	<td>". $row['address']."</td>
      	<td>". $row['date']."</td>";
          echo "<td>";?><a class="btn btn-primary"   href="book_a_carpenter_com.php?id=<?php echo $row ['id'];?>">Completed</a><?php echo"</td>";
            echo "<td>";?><a class="btn btn-primary" href="update_booking.php?id=<?php echo $row ['id'];?>">Update</a><?php echo"</td>";
              echo "<td>";?><a class="btn btn-danger" href="delete_booking.php?id=<?php echo $row ['id'];?>">Delete</a><?php echo"</td>";

        echo "</tr>";
      }
      echo "</table>";
       ?>

     </div>
   </div>
 <?php
 include "footer.php";
  ?>
