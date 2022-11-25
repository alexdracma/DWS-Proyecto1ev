const messageBox = document.querySelector('#messageBox')
const icon = messageBox.querySelector('i')
const textBox = messageBox.querySelector('#messageText')

function showMessage(message) {
    function hideMessage() {
        messageBox.style.display = 'none'
    }
    textBox.innerHTML = ''
    icon.setAttribute('class','bi bi-check-circle')
    messageBox.style.display = 'flex'
    textBox.innerText = message
    let countdown_call = setTimeout(hideMessage, 7000)
}

function showError(error) {
    const messageBar = messageBox.querySelector('#messageBar')
    function hideError() {
        messageBox.style.display = 'none'
        messageBar.removeAttribute('class')
    }
    textBox.innerHTML = ''
    icon.setAttribute('class','bi bi-x-circle text-danger')
    messageBar.setAttribute('class','bg-danger')
    messageBox.style.display = 'flex'
    textBox.innerText = error
    let countdown_call = setTimeout(hideError, 7000)
}