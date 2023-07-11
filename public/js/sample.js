const tawag = document.getElementById('name')
const btn1 = document.getElementById('btn1')
const out1= document.getElementById('output2')

function showe(){
    out1.innerHTML =tawag.value
}
btn1.addEventListener('click',showe);