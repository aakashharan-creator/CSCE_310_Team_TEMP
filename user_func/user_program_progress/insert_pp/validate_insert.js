// Get reference to form
const form = document.getElementById("certForm");
const error = document.getElementById("error");

function isValidUin(uin) {

    if(uin.length < 3) {
      return false;
    }
  
    return true;
  
  }
  
form.addEventListener("submit", (e) => {

    const uinInput = document.querySelector("input[name='UIN']");
  
    const uinValue = uinInput.value;  

    if(!isValidUin(uinValue)) {     
        // use uinValue variable  
        e.preventDefault();     
        error.textContent = "Invalid UIN";

  } 
  else {
    error.textContent = ""; 
  }
  
  });