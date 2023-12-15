<?php //include ("admin_header.php")?>
<html>
    <head>
        <title>Fetch and show data from the database</title>
    </head>
    <body>
        <table border = "2">

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Location</th>
                <th>Guests</th>
                <th>Arrival</th>
                <th>Leaving</th>
            </tr>


<?php
include("config.php");
error_reporting(0);
$query = "select * from book";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);



if($total!=0){
    while($result=mysqli_fetch_assoc($data))
    {
        echo  "
        <tr>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['address']."</td>
        <td>".$result['location']."</td>
        <td>".$result['guests']."</td>
        <td>".$result['arrival']."</td>
        <td>".$result['leaving']."</td>
        ";
    }
}
else{
    echo "No records found";
}

?>

       </table>
    </body>
</html>