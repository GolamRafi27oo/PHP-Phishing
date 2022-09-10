var submit = document.getElementById('submit');

submit.onclick = function () {
  if(document.getElementById('password').value == ""){
    document.getElementById('error').innerHTML = `
    <h1>Fill the ID password please!</h1>
  `
  }
}