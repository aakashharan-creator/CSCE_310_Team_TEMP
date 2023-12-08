/*
<!--
CertE_Num
UIN
Cert_ID
Status
Training_Status
Program_Num
Semester
Year
-->
*/
//const certE_Num = document.getElementById('CertE_Num')
const uin = document.getElementById('UIN')
const cert_ID = document.getElementById('Cert_ID')
const status_ = document.getElementById('Status')
const training_status = document.getElementById('Training_Status')
const program_num = document.getElementById('Program_Num')
const semester = document.getElementById('Semester')
const year = document.getElementById('Year')

const form = document.getElementById('form')
const errorElement = document.getElementById('error')

const validStatuses = ['Done', 'In Progress', 'Not Started'];
const validSemester = ['Fall', 'Spring', 'Summer'];

form.addEventListener('submit', (e) => {
  let messages = []

  // check UIN
  if (uin.value.length < 3) {
    messages.push('Incorrect UIN')
  }
  
  // check cert_ID
  if (cert_ID.value > 10) {
    messages.push('Incorrect Cert_ID')
  }
  
  // check status
  if (!validStatuses.includes(status_.value)) {
    messages.push('Status must be "Done", "In Progress" or "Not Started"')
  }
  
  // check trianing status
  if (!validStatuses.includes(training_status.value)) {
    messages.push('Status must be "Done", "In Progress" or "Not Started"')
  }

  // check program number
  if (program_num.value > 10) {
    messages.push('Incorrect program number (programs are only 1-10)')
  } 
  
  // check semester
  if (!validSemester.includes(semester.value)) {
    messages.push('Semester must be "Fall", "Spring" or "Summer"')
  }
  
  // check year
  if (year.value.length > 4 || year.value.length < 4) {
    messages.push('Incorrect year use format XXXX')
  }
  
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join('\n')
  }
  
})