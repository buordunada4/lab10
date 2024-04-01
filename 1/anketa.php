<head>

<title> Anketa</title>

</head>

<body bgcolor=yellow>

<?PHP

if (!isset($_POST['submit']))


{ print("<form action=\"anketa.php\" method=POST>"); print("<table> <tr><td> Имя</td>");

print("<td><input type=text name=\"FirstName\" size=20></td></tr>"); print("<tr><td>Фамилия</td>"); print("<td><input type=text name=\"LastName\" size=20></td></tr>");

print("<tr><td>E-mail</td>"); print("<td><input type=text name=\"Email\" size=40></td></tr>");

print("<tr><td> Комментарий</td>");
print("<td><textarea name=\"Comments\" rows=\"5\" cols=\"40\"></textarea></td></tr></table>");


print("<input type=submit name=\"submit\" value=\"OK\">&nbsp;"); print("<input type=reset name=\"Reset\" value=\"Cancel\">");

print("</form>"); }

else

{

$FirstName = trim($_POST['FirstName']);
$Lastname=trim($_POST ['LastName']);
$Email=trim($_POST ['Email']); 
$Comments=trim($_POST['Comments']);
$Name=$_POST['FirstName']." ".$_POST['LastName']; 
print("Ваше имя: $FirstName <br>");

print("Ваша фамилия: $Lastname <br>");

print("Ваш e-mail is: $Email <br>");

print("Комментарий: $Comments <br>");

print("<a href=\"myhello.php?FirstName=" . urlencode($FirstName) . "\">здесь</a>");

}

?>

</body>

</html>