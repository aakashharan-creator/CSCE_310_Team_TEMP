const uin = document.getElementById('UIN')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (uin.value.length < 3 || uin.value == null) {
    messages.push('Incorrect uin')
  }
  
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
  
})