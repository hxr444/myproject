<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";
 
// ��������
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
} 
else{
	//echo "�������ݿ�ɹ�";
}
$conn->set_charset('utf8');
?>
