var tel = document.querySelectorAll(".phone_number");
tel.forEach(element => {

    element.addEventListener("keypress", numVerify, false);
})
function numVerify(e) {
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
    console.log(e)
  }
}
