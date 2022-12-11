<?php
session_start();
require '../connections/connection.php';
$consignment_id = $_GET['id'];
$_SESSION['consignment_id']=$consignment_id;

$useremail= $_SESSION["emailID"];

$sql = "SELECT manager_id
        FROM manager
        WHERE manager_email ='$useremail'";
$get_data = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($get_data);
$manager_id = max($row);

$sql2 = "SELECT *
        FROM deliveryman d
        JOIN manager m
        WHERE m.manager_id = d.manager_id
        AND m.manager_id = '$manager_id'
        AND m.location_id = d.location_id
        ORDER BY d.deliveryman_id";

$result=mysqli_query($conn,$sql2);
      if (mysqli_num_rows($result)>0) {
          echo '<table>
                <tr>
                <th>Deliveryman ID</th>
                <th>Manager ID</th>
                <th>Location ID</th>
                <th>Name</th>
                <th>PhoneNumber</th>
                <th>Address </th>
                <th>dm_status</th>
                </tr>';

      while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr>
                <td><a href="updatedeliveryman.php?id='.$row['deliveryman_id'].'">'.$row['deliveryman_id'].'</a></td>
                <td>'.$row['manager_id'].'</td>
                <td>'.$row['location_id'].'</td>
                <td>'.$row['deliveryman_firstName'].' '.$row['deliveryman_lastName'].'</td>
                <td>+880</b>'.$row['deliveryman_phone_number'].' </td>
                <td>'.$row['deliveryman_address'].'</td>
                <td>'.$row['dmstatus_id'].'</td>
                </tr><br>';

                  }
              }


?>
