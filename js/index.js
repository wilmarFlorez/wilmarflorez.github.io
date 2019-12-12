let $formContact = document.getElementById('formContact')
let $result = document.getElementById('result')

$formContact.addEventListener('submit', evt =>{
   evt.preventDefault()
   $result.innerHTML = 
   `<div class="spinner-grow text-primary" role="status">
   <span class="sr-only">Loading...</span>
   </div>`
   let data = new FormData($formContact)   

   fetch("sendMessage.php",{
      method: "POST",
      body: data
   })
   .then(response => response.json())
   .then(result => {
      if (result === "error")
      {
         showError('No se ha podido enviar el mensaje!')
      }else{
         showSuccess(result)
      }
   })
   .catch(err => {
      console.log(err)
   })
})

function showError(result)
{
   $result.innerHTML = 
   `<div class="alert alert-danger" role="alert">
      ${result}
   </div>`
}

function showSuccess(result)
{
   $formContact.reset()
   $result.innerHTML = 
   `<div class="alert alert-success" role="alert">
      ${result}
   </div>`
}