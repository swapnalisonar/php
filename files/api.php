<?php



include('../php/conn.php');


header("Content-Type:application/json");
if (isset($_GET['m_Ecode']) && $_GET['m_Ecode']!="") {
	$m_Ecode = $_GET['m_Ecode'];
	$result = mysqli_query(
	$con,
	"SELECT * FROM `Leave_Records` WHERE m_Ecode=$m_Ecode");
	if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_array($result);

    $m_Ename=$row['m_Ename'];
	$m_Sdate = $row['m_Sdate'];
	$m_Count = $row['m_Count'];
	$m_Edate = $row['m_Edate'];
    $m_Reasone =$row['m_Reason'];


	response($m_Ecode, $m_Ename, $m_Sdate,$m_Count,$m_Edate,$m_Reasone);
	mysqli_close($con);
	}else{
		response(NULL, NULL, 200,"No Record Found");
		}
}else{
	response(NULL, NULL, 400,"Invalid Request");
	}

function response($m_Ecode, $m_Ename, $m_Sdate,$m_Count,$m_Edate,$m_Reasone){
	$response['m_Ecode'] = $m_Ecode;
	$response['m_Ename'] = $m_Ename;
	$response['m_Sdate'] = $m_Sdate;
	$response['m_Count'] = $m_Count;
    $response['m_Edate'] = $m_Edate;
    $response['m_Reasone'] = $response_desc;
	
	$json_response = json_encode($response);
	echo $json_response;
}

//-----------------------------------------------------------------------------------
// if(isset($_POST))
// {
//     $m_Ecode = $_POST['m_Ecode'] ;
//     $m_Ename = $_POST['m_Ename'] ;
//     $m_Sdate = $_POST['m_Sdate'] ;
//     $m_Count = $_POST['m_Counte'] ;
//     $m_Edate = $_POST['m_Edate'] ;
//     $m_Reasone = $_POST['m_Reasone'] ;

// }
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // collect value of input field
//     $m_Ecode = $_REQUEST['m_Ecode'];
//     if (empty($m_Ecode)) {
//       echo "Name is empty";
//     } else {
//       echo $m_Ecode;
//     }

//     $m_Ename = $_REQUEST['m_Enmw'];
//     if (empty($m_Ename)) {
//       echo "Name is empty";
//     } else {
//       echo $m_Ename;
//     }

//     $m_Sdate = $_REQUEST['m_Ecode'];
//     if (empty($m_Sdate)) {
//       echo "Name is empty";
//     } else {
//       echo $m_Sdate;
//     }

//     $m_Count = $_REQUEST['m_Count'];
//     if (empty($m_Count)) {
//       echo "Name is empty";
//     } else {
//       echo $m_Count;
//     }

//     $m_Edate = $_REQUEST['m_Edate'];
//     if (empty($m_Edate)) {
//       echo "Name is empty";
//     } else {
//       echo $m_Edate;
//     }

//     $m_Reasone = $_REQUEST['m_Reasone'];
//     if (empty($m_Reasone)) {
//       echo "Name is empty";
//     } else {
//       echo $m_Reasone;
//     }



//   }








?>
