function updateSession(){

}

function insertCost(){
    let toggle = document.getElementById("pricing");
    if(toggle.disabled === false) 
        toggle.disabled = true;
    else
        toggle.disabled = false;
}

function removeCost(){
    let toggle = document.getElementById("pricing");
    toggle.value = "";
}

function checkLogIn(str){
    if(str === null){
        alert("You have not sign in!");
    }
    else
        window.location.replace("upload_apps.php");
}

function activateLink(){
    document.getElementById('devsite').className = 'activateLink';
    document.getElementById('account').className = 'activateLink';
}