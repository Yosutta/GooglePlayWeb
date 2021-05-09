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

// ADMIN PAGE

function showAdminAppsGrid(pendingapps,index){
    let back = document.getElementById("previousAppGrid")
    let front = document.getElementById("nextAppGrid")
    if(index === 0)
        back.disabled = true;
    else
        back.disabled = false;


    if(index >= pendingapps.length-5) 
        front.disabled =true;
    else
        front.disabled = false;

    let x = 1
    for(let i=index;i<index+5;i++){
        let table = document.getElementById("appsGrid");
        let row  = table.insertRow(x);

        let appname = row.insertCell(0)
        let appimage = row.insertCell(1)
        let category = row.insertCell(2)
        let creator = row.insertCell(3)
        let status = row.insertCell(4)
        let buttons = row.insertCell(5)

        let appid = "appTemplate.php?appid="+pendingapps[i]['appid']
        appname.innerHTML = "<a href ='"+appid+"'>"+pendingapps[i]['appname']+"</a>"

        var img = document.createElement('img'); 
        img.src = pendingapps[i]['pictureLink']; 
        img.style.height = "50px";
        appimage.appendChild(img);

        category.innerHTML = pendingapps[i]['catename']

        creator.innerHTML = pendingapps[i]['creatorname']

        no = x;

        if(pendingapps[i]['status']==0){
            status.innerHTML = "Waiting"
            buttons.innerHTML = `<button style="background-color:greenyellow;border-radius:5px;width:50px" id="a`+no+`" value=`+no+` onclick="whenApproved(id)"">
                                <i class="fas fa-check text-white"></i>
                            </button>
                            <button class="" style="background-color:red;border-radius:5px;width:50px" id="c`+no+`" value=`+no+` onclick="whenDenied(id)"">
                                <i class="fas fa-times text-white""></i>
                            </button>`;
        }
        else if(pendingapps[i]['status']==1){
            status.innerHTML = "Approved"
            buttons.innerHTML = `<button style="background-color:greenyellow;border-radius:5px;width:50px" id="a`+no+`" value=`+no+` onclick="whenApproved(id)"">
                                    <i class="fas fa-check text-white"></i>
                                </button>
                                `
        }
        else{
            status.innerHTML = "Canceled"
            buttons.innerHTML = `<button class="" style="background-color:red;border-radius:5px;width:50px" id="c`+no+`" value=`+no+` onclick="whenDenied(id)"">
                                    <i class="fas fa-times text-white""></i>
                                </button>`;
        }
        x= x+1;                                    
    }
}

function removeAdminAppsGrid(){
    let table = document.getElementById("appsGrid");
    for(let i=0;i<5;i++)
        table.deleteRow(1); 
}

function whenDenied(id){
    let deny = document.getElementById(id)

    let table = document.getElementById("appmanagement")
    let row = table.getElementsByTagName("tr")[deny.value]
    var td = row.getElementsByTagName("td")[4];
    td.innerHTML = "Canceled";

    deny.disabled = true;
    
    var aid = id.replace('c', '');
    aid = 'a'+aid;

    let approve = document.getElementById(aid)
    approve.style.display = "none";
}

function whenApproved(id){
    let approve = document.getElementById(id)

    let table = document.getElementById("appmanagement")
    let row = table.getElementsByTagName("tr")[approve.value]
    var td = row.getElementsByTagName("td")[4];
  
    td.innerHTML = "Approved";

    approve.disabled = true;
    
    var cid = id.replace('a', '');
    cid = 'c'+cid;

    let deny = document.getElementById(cid)
    deny.style.display = "none";
}