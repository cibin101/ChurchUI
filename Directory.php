<?php 
	include("includes/header.php"); 
if (!(isset($_SESSION['login_user'])AND ($_SESSION['login_user']!='')))
{
	header("Location: login.php");
}
 
if (isset($_POST["submit"])) {
       $name = $_POST["name"];
       $familyname =  $_POST["familyname"];
       $ward= $_POST["ward"];
       $getdata = 1;
  }
  else {
       $getdata = 0;
  }
?>
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <title>Telephone Directory </title>
 <style type="text/css" title="currentStyle" media="screen">
 	@import "design.css";
 </style>
</head>
<body>
<div id="container">
	<div id="intro">
		<div id="pageHeader" align="center">
			<h1><span>Search</span></h1>
		</div>
		<div id="quickSummary" align="center">
			<p class="p1">Search By Name or Family Name</p>
      
			<form id="form1" method="post" action="Directory.php" name="myform">
      <table width="795" align="center">
			  <tr><td><p>Name</td><td><input name="name" type="text" size="60" value=""/></p></td></tr>
			  <tr><td><p>Family Name </td><td><input name="familyname" type="text" size="60" value=""/></p></td></tr>
         <tr><td><p>Ward</p></td><td> <select name="ward">
                                      <option value="%%">Search in all wards</option>
                                      <option value="kesavadasapuram">Kesavadasapuram</option>
                                      <option value="muttada">Muttada</option>
                                      <option value="parottukonam">Parottukonam</option>
                                      <option value="nalanchira">Nalanchira</option>
                                      <option value="mannanthala">Mannanthala</option>
                                      <option value="chittazha">Chittazha</option>
                                      </select></td></tr>
			  <tr><td></td><td><p><input type="submit" name="submit" value="Search" /></p></td></tr>
			  
		    </form>
        </table>

   	<table width="795" border="1" align="center">
              <tr>
                <th width="398" scope="col" align="center">NAME</th>
                <th width="259" scope="col" align="center">Phone Number</th>
                <th width="259" scope="col" align="center">Phone Number 2</th>
                <th width="516" scope="col" align="center">Email Id</th>
                <th width="216" scope="col" align="center">Family Name</th>
              </tr>

<?php
  if ($getdata) {
    // 3 Perform database query
	$pos = strpos($name, "%");
	if ($pos === false) {
		$name="%".$name."%";
	}
	$FamilyName = $familyname;
    $sql = "select contacts.name,contacts.phonenum1,contacts.phonenum2,contacts.emailid, directory.familyname from contacts JOIN directory ON contacts.lookupnum = directory.lookupnum where";
	  $sql .= " contacts.name like '".$name."'";
	  $sql .= "or directory.familyname like '".$FamilyName."'";
    $sql .= "and directory.ward like'".$ward."'";
    $sql .= " order by contacts.name";
    $result = pg_query($db,$sql);
    if (!$result) {
     echo "<tr><td>No Results<td></tr>";

       die("Database selection failed: ");
    }
    // 4 Use Returned data
    while ($row = pg_fetch_assoc($result)) {
     echo "<tr> <td> ".$row["name"]."</td> <td>".$row["phonenum1"]."</td><td>".$row["phonenum2"]."</td><td> ".$row["emailid"]."</td> <td>".$row["familyname"]."<td></tr>";
    }
  }
?>

        </table>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>

		</div>
	</div>
</div>
<!-- extraDiv2 used for buttom image -->
<div id="leftimg">
</div>
<div id="extraDiv2">
</div>
</body>
</html>
<?php
  // 5 Close connection 
  include_once("includes/footer.php");
?>