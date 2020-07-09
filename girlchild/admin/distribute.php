
<?php
include_once('../config.php');
        $q1=mysqli_query($db1, "select * from donations ");
            if(mysqli_num_rows($q1)>0) {
                $total = 0;
                    while($row=mysqli_fetch_array($q1)) {
                        $i=1;
                        $amount = $row['amount'];
                        $total =$total + $amount;
                    }
                    $i=$i+1;
            }
?>

<?php
    $financeid= $_GET['eid'];
    $granted =$_GET['amount'];
    $grantdate = date('Y-m-d H:i:s');

    if($granted > $total){
        header('location:managedonations.php?msg=insufficient');
    }else
        $query1 = mysqli_query($db1, " update financerequests set status = 1 where id = '$financeid' ") or die("Could not update");
        $query2 = mysqli_query($db1, " update financerequests set grantdate = '$grantdate' where id = '$financeid' ") or die("Could not update");
        $query3 = mysqli_query($db1, " update financerequests set grantedamount = '$granted' where id = '$financeid' ") or die("Could not update");
        header('location: managedonations.php?msg=updated');
?>