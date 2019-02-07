<!DOCTYPE html>
<html>
<head>
	<title>qrdeeplink</title>
	
</head>
<body>
<script src="https://d.line-scdn.net/liff/1.0/sdk.js" /></script>
<script>
$(window).on('load', function(){
      
    // Initializes a LIFF app
      liff.init(function (data) {});
    });
	liff.getProfile().then(function (profile) {
            const = profile.userId;
            document.getElementById('profileid').textContent = profile.userId;
            
        }).catch(function (error) {
            window.alert("Error getting profile: " + error);
        });
    

</script>
<div id="profileid">
</body>
</html>
