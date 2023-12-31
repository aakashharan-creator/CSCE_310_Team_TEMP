const ia_num = document.getElementById('IA_Num')
const uin = document.getElementById('UIN')
const intern_ID = document.getElementById('Intern_ID')
const status_ = document.getElementById('Status')
const year = document.getElementById('Year')

const form = document.getElementById('form')
const errorElement = document.getElementById('error')
const validStatuses = ['Done', 'In Progress', 'Not Started'];

form.addEventListener('submit', (e) => {
  let messages = []

  // check uin
  if (uin.value.length < 3) {
    messages.push('Incorrect UIN')
  }

  // check Internship_ID
  if (intern_ID.value > 10) {
    messages.push('Incorrect Intern_ID (1-10)')
  }
  
  // check status
  if (!validStatuses.includes(status_.value)) {
    messages.push('Status must be "Done", "In Progress" or "Not Started"')
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