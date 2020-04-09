// RESPONSIVE UI
$(document).ready(function(){
    setInterval(function(){ 
        if(jQuery( window ).width() <= 600){
            jQuery("#official_logo").hide();
            jQuery("#logo_only").show();
            jQuery("#sidebar-footer").hide();
        }else if(jQuery( window ).width() > 600){
            jQuery("#official_logo").show();
            jQuery("#logo_only").hide();
            jQuery("#sidebar-footer").show();
        }
    }, 100);

    setInterval(function(){
        var today = new Date();
        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var dateTime = date+' '+time;
        document.getElementById("dateTime").innerHTML ="Date: " + dateTime;
    }, 1000);
});

// SWEET ALERT JS
function logout(){
    swal({
        title: "Are you sure to logout?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((doLogout) => {
        if (doLogout) {
            // DESTROY SESSION IN PHP FILE (REQUEST)
            var xhr = new XMLHttpRequest();
            xhr.open("GET","destroy_session",true);
            xhr.setRequestHeader("Content-type","application/json");
            xhr.onreadystatechange = function(){
                if(this.status == 200 && this.readyState == 4){
                        swal("You have been logged out successfully!", {
                            icon: "success",
                            buttons: false
                          });
                    confirm_logout();
                }
            }
            
            xhr.send();
        } 
      });
}

function confirm_logout(){
    setTimeout(function(){
        window.location.href='';
    }, 2000);
    
}

