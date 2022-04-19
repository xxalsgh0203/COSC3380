<?php
session_start();

require_once "../php/config.php";


//------------------------------used to retrieve other doctors------------------------------------
$sql = "SELECT Office_id, Name, Speciality, Phone_number, Doctor_id FROM DOCTOR";
$result = mysqli_query($db, $sql);

$DtableResult = "";
if ($result->num_rows > 0) {
  while($row = $result-> fetch_assoc()) {
    $DtableResult .= "<tr>". "<td>" . $row["Office_id"] . "</td><td>" . $row["Name"] . "</td><td>" . 
                      $row["Speciality"] . "</td> <td>" . $row["Phone_number"] . "</td>" . "</td><td> 
                      <a href='../adminPages/editDoctor.php?update_Did=" . $row["Doctor_id"]  . "'>edit</a> </td>" . "</td><td> <a href='../adminPages/dataEntryForm.php?delete_Did=" . $row["Doctor_id"] . "'>Delete</a>
                                           </td>" .  "</tr>";
  }
}

//used when the delete hyperlink is pressed
if (isset($_GET['delete_Did'])) {
  $id = $_GET['delete_Did'];

 mysqli_query($db, "DELETE FROM DOCTOR WHERE Doctor_id = " . $id);
header('location:dataEntryForm.php');

}

//used when the delete hyperlink is pressed
if (isset($_GET['delete_Did'])) {
  $id = $_GET['delete_Did'];

 mysqli_query($db, "DELETE FROM DOCTOR WHERE Doctor_id = " . $id);
header('location:dataEntryForm.php');

}

$update = false;
$id = 1;
if (isset($_GET['update_Did'])) {
  $id = $_GET['update_Did'];
  $update = true;
  $Eresult = $db->query("Select * FROM DOCTOR WHERE Doctor_id = $id");

  if($Eresult->num_rows == 1)
  {
    $row = $Eresult->fetch_array();
    $OFFID =  $row['OFFID'];
    $DName = $row['Dname'];
    $SPType = $row['SPType'];
    $DPWord = $row['DPWord'];
    $DPhoneNum = $row['DPhoneNum'];
  }


header('location:dataEntryForm.php');

}


if (isset($_POST['USubmitD']))
{
  $ID = $_POST['id'];
  $Off_id = $_POST['OFFID'];
  $dname = $_POST['Dname'];
  $Speciality = $_POST[''];



  $db->query("UPDATE DOCTOR SET Office_id='$Off_id',Name='$dname', Speciality='$Speciality' , Phone_number = '$PhoneNum' WHERE Doctor_id=$id");



header('location:dataEntryForm.php');

}


//Takes in input for doctor from SubmitD
if (isset($_POST['SubmitD']))
{

    $OFFID =  $_POST['OFFID'];
    $DName = $_POST['Dname'];
    $SPType = $_POST['SPType'];
    $DPWord = $_POST['DPWord'];
    $DPhoneNum = $_POST['DPhoneNum'];

    //Used to insert data into doctor
    $db->query("INSERT INTO DOCTOR (Office_id,  Name, Speciality, Password, Phone_number) 
                    VALUES ('$OFFID', '$DName', '$SPType', '$DPWord', '$DPhoneNum')")  or die($db->error); 

  
    header("location:dataEntryForm.php");

}


/*---------------------------to retrieve  admins------------------------------------------------*/
$sql = "SELECT * FROM ADMIN";
$result = mysqli_query($db, $sql);

$OtADtableResult = "";
if ($result->num_rows > 0) {
  while($row = $result-> fetch_assoc()) {
    $OtADtableResult .= "<tr>". "<td>" . $row["Office_id"] . "</td><td>" . $row["Name"] . "</td><td>" . 
                          $row["Phone_number"] . "</td><td>" . $row["Email"] . "</td>" . "</td><td> 
                          <a href='../adminPages/editAdmin.php?update_ADid=" . $row["Admin_id"]  . "'>edit</a> </td>" . "</td><td> <a href='../adminPages/dataEntryForm.php?delete_ADid=" . $row["Admin_id"] . "'>Delete</a>
                                               </td>"."<tr>";
  }
 
}

?> 

<!doctype html>
<html lang="en">

<head>
  <title>GROUP 5</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

</style>
</head>
<body>


<div class="dataEntryRenderbtn">
    <a href="doctorDataEntry.php">
        <div>
            Doctor Data Entry Page
        </div>
    </a>
    <a href="adminDataEntry.php">
        <div>
            Admin Data Entry Page
        </div>
    </a>
    <a href="patientDataEntry.php">
        <div>
            Patient Data Entry Page
        </div>
    </a>
</div>


<?php include_once("../php/header.php"); ?>

  <!-- Header of the page-->
  <section>
    <br><br>
    <h1 class="text-center" id="data-entry-header">Data Entry Form</h1>
  </section>
  

<!-- ======= Doctor Section ======= -->

<section id="dataEntry">
      <h1>Doctors</h1>
    
      <table  class = "center">
              <thead class="thead">
                <tr>
                  <th>Office ID</th>
                  <th>Name</th>
                  <th>Specialty</th>
                  <th>Phone Number</th>
                  <th>update</th>
                  <th>delete</th>
                </tr>
                <?php echo $DtableResult;?>
              </thead>
              <tbody>
              </tbody>
            </table>
  

        <form action="" method="POST">
            <!--input taken for doctor-->
              <h2>  Doctor info:  </h2>
              <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
              <label for="OFFID">Office ID:</label>
              <input type="number" id="OFFID" name="OFFID">
              <label for="SPType">Speciality:</label>
              <input type="text" id="SPType" name="SPType" maxlength = "30"> 
              <label for="Dname">Name:</label>
              <input type="text" id="Dname" name="Dname" maxlength="20">
              <br>
              <label for="DPWord">create password:</label>
              <input type="Password" id="DPWord" name="DPWord">
              <label for="DPhoneNum">Phone Number:</label>
              <input type="text" id="DPhoneNum" name="DPhoneNum" maxlength="10">    
              <!--Used to separate inputs-->
              <br>
              <?php
              if ($update == true):
              ?>
                <button type="submit" class="btn btn-info" name="SubmitD">Update</button>
               <?php else: ?>
              <button type="submit" class="btn btn-primary" name="SubmitD">Submit</button>
              <?php endif; ?>
        </form>
</section>



<script src="main.js"></script>
</body>

</html>