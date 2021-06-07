const close = document.getElementById('close')
const open = document.getElementById('open')
const sidebar = document.querySelector('.sidebar')
const body = document.querySelector('body')
const chat = document.getElementById('chat')
const chatdiv = document.querySelector('.chat')
const dog = document.getElementById('chien')
const dogdiv = document.querySelector('.chien')

open.addEventListener("click",()=>{
  
   sidebar.classList.toggle("moveright")
 
})

close.addEventListener("click",()=>{
  
   sidebar.classList.toggle("moveright")
 
})

chat.addEventListener('click', ()=>{
   chatdiv.classList.toggle('catClass')
})

dog.addEventListener('click', ()=>{
   dogdiv.classList.toggle('dogClass')
})
