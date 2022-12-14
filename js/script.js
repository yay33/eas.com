console.log('123')

//var modal = "#mymodal"
//modal.on('shown.bs.modal', function () {
 // $('#myInput').trigger('focus')
//})


var myModal = document.getElementById('modal_cool')
var myInput = document.getElementById('myBtn')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})

