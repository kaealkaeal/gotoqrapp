<!DOCTYPE html>
<html>
<head>
	<title>qrdeep</title>
	
</head>
<body>
<script src="https://d.line-scdn.net/liff/1.0/sdk.js" /></script>
<script>
$(window).on('load', function(){
      
    // Initializes a LIFF app
      liff.init(function (data) {
        initializeApp(data);
      });
    });
	
function initializeApp(data) {
    
    document.getElementById('profileid').textContent = data.context.userId;

    // closeWindow call
    document.getElementById('closewindowbutton').addEventListener('click', function () {
        liff.closeWindow();
    });
  

}    

</script>
<div id="profileid"></div>
<button id="closewindowbutton">Close Window</button>
</body>
</html>
