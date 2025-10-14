/**
 * Contact Form Script
 */
    const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById('msg')
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
          msg.innerHTML = "saved!!"
        })
        setTimeout(function() {
          msg.innerHTML = ""
  
        }, 10000)
        form.reset()
        .catch(error => console.error('Error!', error.message))
    })
