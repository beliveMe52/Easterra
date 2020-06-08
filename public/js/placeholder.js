let inputs = document.querySelectorAll('.inpt input');
for(let i = 0; i < inputs.length; i++) { 
   inputs[i].onblur = eventBlur
}

function eventBlur() {
   let placeholder = document.querySelectorAll('.inpt label');
   for(let i = 0; i < inputs.length; i++) {
      if(inputs[i].value.length > 1){
         placeholder[i].style.display = "none"
      }
   }
}

console.log(inputs)
