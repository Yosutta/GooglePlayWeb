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
    let table = document.getElementById("appsGrid")
    let back = document.getElementById("previousAppGrid")
    let front = document.getElementById("nextAppGrid")  

    if(index === 0)
        back.disabled = true;
    else{
        back.disabled = false;
    }

    if(pendingapps.length-index < 5) {
        front.disabled =true;
    }
    else
        front.disabled = false;



    // console.log(pendingapps.length, index, step)

    let x = 1

    for(let i=index;i<index+5;i++){
        let row  = table.insertRow(x);
        row.classList.add("tradmin")


        let appname = row.insertCell(0)
        let appimage = row.insertCell(1)
        let category = row.insertCell(2)
        let creator = row.insertCell(3)
        let status = row.insertCell(4)
        let buttons = row.insertCell(5)
        
        if(pendingapps[i]!==undefined){
            let id = "appTemplate.php?appid="+pendingapps[i]['appid']
            appname.innerHTML = "<a href ='"+id+"'>"+pendingapps[i]['appname']+"</a>"

            var img = document.createElement('img'); 
            img.src = pendingapps[i]['pictureLink']; 
            img.style.height = "100px";
            appimage.appendChild(img);

            category.innerHTML = pendingapps[i]['catename']

            creator.innerHTML = pendingapps[i]['creatorname']

            no = x;

            appid = pendingapps[i]['appid']


            if(pendingapps[i]['status']==0){
                status.innerHTML = "Waiting"
                buttons.innerHTML = `<div id="approvalButton" name="`+appid+`">
                                <button type="submit" style="background-color:greenyellow;border-radius:5px;width:50px" id="a`+no+`" name="approve" value=`+no+` onclick="whenApproved(id)"">
                                    <i class="fas fa-check text-white"></i>
                                </button>
                                <button type="submit" class="" style="background-color:red;border-radius:5px;width:50px" id="c`+no+`" name="deny" value=`+no+` onclick="whenDenied(id)"">
                                    <i class="fas fa-times text-white"></i>
                                </button></div>`;
            }
            else if(pendingapps[i]['status']==1){
                status.innerHTML = "Approved"
                buttons.innerHTML = `<button style="background-color:greenyellow;border-radius:5px;width:50px" id="a`+no+`" value=`+no+`" disabled>
                                        <i class="fas fa-check text-white"></i>
                                    </button>
                                    `
            }
            else{
                status.innerHTML = "Canceled"
                buttons.innerHTML = `<button class="" style="background-color:red;border-radius:5px;width:50px" id="c`+no+`" value=`+no+`" disabled>
                                        <i class="fas fa-times text-white""></i>
                                    </button>`;
            }
            x= x+1;  
        }                                  
    }
}

function removeAdminAppsGrid(){
    let table = document.getElementById("appsGrid")
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

    xmlhttp = new XMLHttpRequest();
    
    var PageToSendTo = "adminRequest.php?";
    var MyVariable = document.getElementById(id).parentElement.attributes.name.nodeValue;
    var VariablePlaceholder = "appid=";
    var UrlToSend = PageToSendTo + VariablePlaceholder + MyVariable;
    
    xmlhttp.open("GET", UrlToSend, false);
    xmlhttp.send();
}