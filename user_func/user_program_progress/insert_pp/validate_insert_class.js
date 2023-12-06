const uin = document.getElementById('UIN')
const class_ID = document.getElementById('Class_ID')
const status_ = document.getElementById('Status')
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

  // check class_ID
  if (class_ID.value.length != 3) {
    messages.push('Incorrect Class_ID length must be 3 digits')
  }
  
  // Status
  if (!validStatuses.includes(status_.value)) {
    messages.push('Status must be "Done", "In Progress" or "Not Started"')
  }

  // check semester 
  if (!validSemester.includes(semester.value)) {
    messages.push('Semester must be "Fall", "Spring" or "Summer"')
  }
  
  // check year
  if (year.value.length > 4 || year.value.length < 4) {
    messages.push('Incorrect year use format XXXX')
  }
  
  // prevent defaut submit and print error messages
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join('\n')
  }
  
})