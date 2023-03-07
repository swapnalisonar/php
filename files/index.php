


<html>

<body>
  
<?php
// if(isset($_POST))
// {
//   echo  $_POST['m_Ename'],
//    $_POST['m_Ename'] ,
//      $_POST['m_Sdate'] ,
//     $_POST['m_Counte'] ,
//  $_POST['m_Edate'] ,
//  $_POST['m_Reasone'] ;

// }

// echo"<br>";
// print_r($_POST);



?>

<h2>HTML Forms</h2>

<form action="/conn.php" method="post">
  <label for="m_Ename">Employee Name:</label><br>
  <input type="text" id="fname" name="m_Ename" ><br>

  <label for="m_Ecode">Employee Code:</label><br>
  <input type="text" id="lname" name="m_Ecode"><br><br>

  <label for="m_Sdate">Start Date:</label><br>
  <input type="text" id="m_Sdate" name="m_Sdate" ><br><br>

  <label for="m_Count">Count:</label><br>
  <input type="text" id="m_Count" name="m_Count"><br><br>

  <label for="m_Edate">End Date:</label><br>
  <input type="text" id="m_Edate" name="m_Edate" ><br><br>

  <label for="m_Reasone">Resone:</label><br>
  <input type="text" id="m_Reasone" name="m_Reasone"><br><br>
  <input type="submit" value="Submit">

  
    
</form> 

<p></p>

</body>
</html>
