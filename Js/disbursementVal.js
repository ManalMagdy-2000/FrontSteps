/*
* Name: Manal Magdy
* ID: B1901825
*/
let dsbtDate=document.getElementById("dsbtDate");
let cashAmount=document.getElementById("cashAmount");
let goods=document.getElementById("goods");
let form=document.querySelector("form");

function validateInput(){
    //check username is empty 
    if(dsbtDate.value.trim()===""){
       onError(dsbtDate,"Error! You have to select a date");
    }else{
        onSuccess(dsbtDate);
    }


    //password
    if(cashAmount.value.trim()===""){
        onError(cashAmount,"amount cannot be empty");
     }else{
         onSuccess(cashAmount);
     }
}

document.getElementById("recordsbt")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateInput();
});

function onSuccess(input){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("small");
    messageEle.style.visibility="hidden"; 
    parent.classList.remove("error");
    parent.classList.add("success"); 
    console.log(document.getElementById("recordDsbt").value);
    var recordDsbt2 = document.getElementById("recordDsbt").value;
}
function onError(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("small");
    messageEle.style.visibility="visible";
    messageEle.innerText=message;  
    parent.classList.add("error");
    parent.classList.remove("success");

}