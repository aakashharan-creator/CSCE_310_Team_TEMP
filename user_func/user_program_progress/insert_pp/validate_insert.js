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

  // check uin
  if (uin.value.length < 3) {
    messages.push('Incorrect uin')
  }

  // check cert_ID
  if (cert_ID.value.length > 1) {
    messages.push('Incorrect Cert_ID')
  }
  
  
  if (!validStatuses.includes(status_.value)) {
    messages.push('Status must be "Done", "In Progress" or "Not Started"')
  }

  if (!validStatuses.includes(training_status.value)) {
    messages.push('Status must be "Done", "In Progress" or "Not Started"')
  }

  // check program number
  if (program_num.value > 10) {
    messages.push('Incorrect program number (programs are only 1-10)')
  } 

  if (!validSemester.includes(semester.value)) {
    messages.push('Semester must be "Fall", "Spring" or "Summer"')
  }
  
  
  // check cert_ID
  if (year.value.length > 4 || year.value.length < 4) {
    messages.push('Incorrect year use format XXXX')
  }
  
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join('\n')
  }
  
})