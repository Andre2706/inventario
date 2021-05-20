<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Write data in excel file from database using PHP || Mitrajit's Tech Blog</title>
<style>
body { font-family:Arial, Helvetica, sans-serif; font-size:14px; }
h1 { clear:both; margin-bottom:30px; font-size:17px; }
h1 a { font-weight:bold; color:#0099FF; }
span { clear:both; display:block; margin-bottom:30px; }
span a { font-weight:bold; color:#0099FF; }

#submitBtn {
	padding:5px 15px;
	background-color:#0099FF;
	border-radius:5px;
	margin-bottom:5px;
	border:2px solid #ccc;
	color:#fff;
	cursor:pointer;
	font-weight:bold;
}
#submitBtn:hover {
	background-color:#00CCFF;
}
table { border:1px solid #ccc; width:600px; color:#fff; }
table th {
	background-color:#0099FF;
	color:#fff;
}
td {
	background-color:#00CCFF;
	height:40px;
	text-align:center;
}
.div_ok, .div_fail {
	width:590px;
	background-color:#3399FF;
	padding:5px;
	margin-top:10px;
	color:#fff;
}
.div_fail {
	background-color:#FF0000;
}
</style>
</head>

<body>
	<h1>Read the full article -- <a href="http://www.mitrajit.com/2016/12/write-data-excel-file-database-using-php/" target="_blank">Write data in excel file from database using PHP</a> -- in <a href="http://www.mitrajit.com">Mitrajit's Tech Blog</a></h1>
	
<?php
include("db.php");
$sql = "select * from `user_details`";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) > 0) {
	?>
	<form action="excel.php" method="post">
		<input type="submit" name="submitBtn" id="submitBtn" value="Generate Excel" />
		<table cellpadding="5" cellspacing="1">
			<tbody>
				<tr>
					<th>SL.</th>
					<th>NAME</th>
					<th>MOBILE</th>
					<th>COUNTRY</th>
				</tr>
		<?php
		while($row = mysqli_fetch_array($res)) {
			?>
				<tr>
					<td align="center"><?php echo $row['id']; ?>.</td>
					<td><?php echo $row['name']; ?></td>
					<td align="center"><?php echo $row['mobile']; ?></td>
					<td><?php echo $row['country']; ?></td>
				</tr>
			<?php
		}
		?>
			</tbody>
		</table>
	</form>
	<?php
}
?>
</body>
</html>
