<?php
session_start();
if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && empty($_SESSION['valid_user'])){ //��������� ���� ��� �������� ��������� � ���� ������������ ���� �� � ������

$host  = $_SERVER['HTTP_HOST'];//����� �� ����� �� ��������� ����������� ����� $_SERVER
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');//����� �� ����� �� ��������� ����������� ����� $_SERVER
$extra = 'check_login.php';//���� ��� ����� �� �� ������� ��������������
header("Location: http://$host$uri/$extra"); //������������ ��� ������� �� ������� �� �������
exit; 
}

if (!empty($_SESSION['valid_user'])){ //��������� ���� � ��������� ��������� ���������� �.�. ���� ���������� � ��������� �������

$host  = $_SERVER['HTTP_HOST'];//����� �� ����� �� ��������� ����������� ����� $_SERVER
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');//����� �� ����� �� ��������� ����������� ����� $_SERVER
$extra = 'add_img.php';//���� ��� ����� �� �� ������� ��������������
header("Location: http://$host$uri/$extra"); //������������ ��� ������� �� ������� �� �������
exit;
}
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'login_forma.php';
		header("Location: http://$host$uri/$extra"); //������������ ��� ����� �����
		exit;
?>