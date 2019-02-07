<?php
$id = isset($_GET['userid']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>qrdeeplink</title>
	<script src="https://d.line-scdn.net/liff/1.0/sdk.js" /></script>
</head>
<body onload="newDoc()">


<script>
liff.init(
  data => {
    // Now you can call LIFF API
    const userId = data.context.userId;
  }
);
</script>
<script src="http://code.jquery.com/jquery-latest.min.js">
	
	
	liff.getProfile()
.then(profile => {
  const userId = profile.userId
  $.get("index.php",{userid:userId});
  

})
.catch((err) => {
  console.log('error', err);
});
	

</script>

</body>
</html>
<?php 
  //$id = "U92e74f8ce3595165ba396dbef155629a";
 header("refresh: 0; url=class://scan?userId=".$id);
  exit(0);
  ?>