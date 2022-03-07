/* methods to hide and show the dropdown content */  
function myProfile() {  
  document.getElementById("myDropdown1").classList.toggle("show");  
}  
  
// Close the dropdown menu if the user clicks outside of it  
window.onclick = function(event) {  
  if (!event.target.matches('.dropbtn')) {  
    var dropdowns = document.getElementsByClassName("dropdown-content");  
    var i;  
    for (i = 0; i < dropdowns.length; i++) {  
      var openDropdown = dropdowns[i];  
      if (openDropdown.classList.contains('show')) {  
        openDropdown.classList.remove('show');  
      }  
    }  
  }  
}  
function randomString() {  
  //define a variable consisting alphabets in small and capital letter  
var characters = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";  
    
  //specify the length for the new string  
var lenString = 3;  
var randomstring = '';  
  //loop to select a new character in each iteration  
for (var i=0; i<lenString; i++) {  
var rnum = Math.floor(Math.random() * characters.length);  
randomstring += characters.substring(rnum, rnum+1);  
} 
var chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWYZabcdefghijklmnopqrstuvwxyz',
idLength=8 ,
randomID = '',
i,
randomNum;
for(i = 0; i <idLength; i=i+1){
  randomNum = Math.floor(Math.random() * chars.length);
  randomID+= chars.substring(randomNum , randomNum+1);
}; 
//display the generated string   
alert("Applicant Successfully registered!"+"\n Username: "+ "Applicant"+randomstring  + "\n Password: " + randomID );
}  

