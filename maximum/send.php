<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("lding.studio@gmail.com", "������ � �����", "���:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "��������� ������� ����������";
} else {
    echo "��� �������� ��������� �������� ������";
}?>