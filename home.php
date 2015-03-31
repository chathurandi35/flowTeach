
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
 
<body>
	<nav class="navbar navbar-inverse" style="border-radius: 0;">
			<a class="navbar-brand" href="admin.php" style=" float: right;"> logout</a>
</nav>
<form enctype="multipart/form-data" action="control.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Headline</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Headline" name="news1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="news2">
  </div>
  <div class="form-group">
  	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />

    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" name="file">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>