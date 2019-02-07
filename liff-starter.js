window.onload = function (e) {
    liff.init(function (data) {
        initializeApp(data);
    });
};

function initializeApp(data) {
    const userId = data.context.userId;
    //document.getElementById('useridfield').textContent = data.context.userId;
    
    

    // closeWindow call
   // document.getElementById('closewindowbutton').addEventListener('click', function () {
        //liff.closeWindow();
    //});  

    // get profile call
   
        liff.getProfile().then(function (profile) {
            const id = profile.userId;
            window.location = 'class://scan?userId=' + id;
           // document.getElementById('useridprofilefield').textContent = profile.userId;
          
            toggleProfileData();
        }).catch(function (error) {
            window.alert("Error getting profile: " + error);
        });
    
}



function toggleProfileData() {
    toggleElement('profileinfo');
}
function toggleElement(elementId) {
    const elem = document.getElementById(elementId);
    if (elem.offsetWidth > 0 && elem.offsetHeight > 0) {
        elem.style.display = "none";
    } else {
        elem.style.display = "block";
    }
}