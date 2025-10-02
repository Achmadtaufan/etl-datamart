<?php
include("inc_err.php");
include("server.php");
include("lib.php");
include("classes/class.lookup.php");
session_start();
include("auth.php");
include("xajax_common.php");

$userid=$_SESSION["reporttools_userid"];
$logout="<a href='logout.php'>Logout ($userid)</a>";
$group_name=$_GET["group_name"];
$report_id=$_GET["report_id"];
if($report_id!="") get_report_info($report_id); else
$query="SELECT ROW_NUMBER() OVER(ORDER BY ......) AS NOMOR, A.* FROM (...) A";
$lookup=new Lookup();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php include("inc_webtitle.php") ?></title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="tooltip.css" />
<link rel="stylesheet" type="text/css" href="loader.css" />
<script language="JavaScript" src="tooltip.js"></script>

</head>

<body >
<table width="100%" border="0">
  <tr>
    <td><?php include("inc_header.php"); ?></td>
  </tr>
  <tr>
    <td><table  border="0">
      <tr>
        <td width="122" valign="top"><?php include("inc_menu.php"); ?></td>
        <td valign="top" >
		<table width="100%" border="0">
          <tr>
            <td class="title">Upload Policy Banca Additional</td>
          </tr>
          
          <tr>
            <td>
			

      <form action="Report_Policy_Banca_Additional_doupload.php" method="post" enctype="multipart/form-data">
  Select Excel file to upload:
  <input type="file" name="file_excel" id="file_excel">
  <input type="submit" value="Upload" name="submit">
</form>
			</td>
          </tr>
          
        </table></td>
      </tr>

    </table></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
