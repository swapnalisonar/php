
<?php
//include('/api.php');
include('../php/index.php');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else
{
    // $stmt = $conn -> prepare("insert into Leave_Records(m_Ecode,m_Ename,m_Sdate,m_Count,m_Edate,m_Reasone) values (?,?,?,?,?,?)");
    // $stmt -> bind_param("ississ",$m_Ecode, $m_Ename, $m_Sdate,$m_Count,$m_Edate,$m_Reasone);


}
    $m_Ecode = $_POST['m_Ecode'] ;
    $m_Ename = $_POST['m_Ename'] ;
    $m_Sdate = $_POST['m_Sdate'] ;
    $m_Count = $_POST['m_Count'] ;
    $m_Edate = $_POST['m_Edate'] ;
    $m_Reasone = $_POST['m_Reasone'] ;
    
    

    $sql = "INSERT INTO Leave_ Records (m_Ecode,m_Ename,m_Sdate,m_Count,m_Edate,m_Reasone) 
    VALUES(?,?,?,?,?,?)";
    $stmt =mysql_stmt_init($conn);

 
if (!mysql_stmt_prapare ($stmt,$sql)) {
    die(mysql_error($conn));
} 
mysql_stmt_bind_param($stmt, ississ,$m_Ecode, $m_Ename, $m_Sdate,$m_Count,$m_Edate,$m_Reasone);
mysql_stmt_bind_param_excute($stmt);
echo "sucesss bc";

?>
