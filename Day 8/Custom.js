function demoExternalAlert(){
    alert("you want to Delete all the files?")
    document.getElementById("ab").style.backgroundColor="red"
    document.getElementById("ab").style.color="white"
}
function demoExternalConfirm(){
    if(confirm("Are you sure..??")){
        alert("YESSS")
        document.getElementById("cd").style.backgroundColor="green"
        document.getElementById("cd").style.color="white"
    }
    else{
        alert("NOOOO")
        document.getElementById("cd").style.backgroundColor="orange"
        document.getElementById("cd").style.color="white"
    }
}
function demoExternalPrompt(){
    var fName=prompt("Enter Firstname Here..")
    var lName=prompt("Enter Lastname Here..")
    alert(fName+" "+lName)
    document.getElementById("ef").style.backgroundColor="yellow"
    document.getElementById("ef").style.color="black"
}

//New function for demo_divJS.html//
function demoDivGreen(){
    document.getElementById("divbg").style.backgroundColor="Green"
}
function demoDivGray(){
    document.getElementById("divbg").style.backgroundColor="Gray"
}

function demoBodyGreen(){
    document.body.style.backgroundColor="Green"
}
function demoBodyGray(){
    document.body.style.backgroundColor="Gray"
}

function demoDivPrompt(){
    var divbg=prompt('Enter BG Color for div')
    document.getElementById("divbg").style.backgroundColor=divbg
}
function demoBodyPrompt(){
    var bodybg=prompt('Enter BG Color for body')
    document.body.style.backgroundColor=bodybg
}


function demoDivInput(){
    var divbg=document.getElementById("CPD").value
    document.getElementById("divbg").style.backgroundColor=divbg
}
function demoBodyInput(){
    var divbg=document.getElementById("CPB").value
    document.body.style.backgroundColor=divbg
}
