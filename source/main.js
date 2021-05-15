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

function activateLink(level){
    document.getElementById('account').className = 'activateLink';
    document.getElementById('payment').className = 'activateLink';
    if(level>1){
        document.getElementById('devsite').className = 'activateLink';
    }
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

            let img = document.createElement('img'); 
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
    let td = row.getElementsByTagName("td")[4];
    td.innerHTML = "Canceled";

    deny.disabled = true;
    
    let aid = id.replace('c', '');
    aid = 'a'+aid;

    let approve = document.getElementById(aid)
    approve.style.display = "none";

    xmlhttp = new XMLHttpRequest();
    
    let PageToSendTo = "adminRequest.php?";
    let appid = document.getElementById(id).parentElement.attributes.name.nodeValue;
    let appidHolder = "appid=";
    let statusHolder = "&status=";
    let status = 2;
    let UrlToSend = PageToSendTo + appidHolder + appid + statusHolder+status;
    
    xmlhttp.open("GET", UrlToSend, false);
    console.log(xmlhttp)
    xmlhttp.send();
}

function whenApproved(id){
    let approve = document.getElementById(id)

    let table = document.getElementById("appmanagement")
    let row = table.getElementsByTagName("tr")[approve.value]
    let td = row.getElementsByTagName("td")[4];

    td.innerHTML = "Approved";

    approve.disabled = true;
    
    let cid = id.replace('a', '');
    cid = 'c'+cid;

    let deny = document.getElementById(cid)
    deny.style.display = "none";

    xmlhttp = new XMLHttpRequest();
    
    let PageToSendTo = "adminRequest.php?";
    let appid = document.getElementById(id).parentElement.attributes.name.nodeValue;
    let appidHolder = "appid=";
    let statusHolder = "&status=";
    let status = 1;
    let UrlToSend = PageToSendTo + appidHolder + appid + statusHolder+status;
    
    xmlhttp.open("GET", UrlToSend, false);
    console.log(xmlhttp)
    xmlhttp.send();
}

function appSearch(appList,key){
    key = key.toLowerCase();
    appsArr = []
    for(let i in appList){
        let count = 0;
        let appName = change_alias(appList[i][0]).toLowerCase()
        for(let x in key){
            if(appName.charAt(x) === key.charAt(x))
                count++
        }
        if(key.length === count){
            appsArr.push(appList[i])
        }
    }
    console.log(appsArr)
    for(let i=0;i<appsArr.length;i++)
        console.log(appsArr[i])

    if(appsArr.length <10){
        count = appsArr.length
    }
    else
        count =10
    
    let suggestions = document.getElementById("suggestion")
    suggestions.style.backgroundColor = "white";
    suggestions.style.width = "600px";
    suggestions.style.marginLeft = "235px"
    
    
    suggestions.innerHTML = ""
    if(key.length>0){
        for(let i=0;i<count;i++){
            let row = suggestions.insertRow(i)
            let appname = row.insertCell(0)
            let link = document.createElement("a")

            appname.innerHTML = "<a href='application_detail.php?appid="+appsArr[i][1]+"'>"+appsArr[i][0]+"</a>"
        }
    }
}

function change_alias(alias) {
    var str = alias;
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
    str = str.replace(/đ/g,"d");
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
    str = str.replace(/ + /g," ");
    str = str.trim(); 
    return str;
    // From github
}

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})