// let burger = document.querySelector(".burger");
// let cross = document.querySelectorAll("#menu-label");
// let nav = document.querySelector(".hidde");
// console.log(burger);
// console.log(nav);

// burger.addEventListener('click', nav.style.display = 'block');
// cross.addEventListener('click',nav.style.display = 'none');



// document.getElementById('menu-label').addEventListener('click', function() {
//     var menu = document.getElementById('menu');
//     var checkbox = document.getElementById('menu-checkbox');
    
//     if (checkbox.checked) {
//       nav.style.display = 'none';
//       checkbox.checked = false;
//     } else {
//       menu.style.display = 'block';
//       checkbox.checked = true;
//     }
//   });



// document.getElementById('menu-label').addEventListener('click', function() {
//     var menu = document.querySelector('.menu');
//     var checkbox = document.getElementById('menu-checkbox');
    
//     if (checkbox.checked) {
//       menu.classList.add('hidden');
//       checkbox.checked = false;
//     } else {
//       menu.classList.remove('hidden');
//       checkbox.checked = true;
//     }
//   });



// document.addEventListener('DOMContentLoaded', function() {
//     var checkbox = document.getElementById('menu-checkbox');
//     var menu = document.querySelector('.menu');
  
//     checkbox.addEventListener('change', function() {
//       if (checkbox.checked) {
//         menu.classList.remove('hidden');
//       } else {
//         menu.classList.add('hidden');
//       }
//     });
//   });
   

// document.addEventListener('DOMContentLoaded', function() {
//     var checkbox = document.getElementById('menu-checkbox');
//     var menu = document.querySelector('.menu');
    
//     checkbox.addEventListener('click', function() {
//       menu.classList.toggle('hidden');
//     });
//   });

// document.addEventListener('DOMContentLoaded', function() {
//     var checkbox = document.getElementById('menu-checkbox');
//     var menu = document.querySelector('.menu');
//     var burger = document.querySelector('.burger');
    
//     burger.addEventListener('click', function() {
//       menu.classList.toggle('hidden');
//       checkbox.checked = !checkbox.checked;
//     });
//   });


const button = document.querySelector('.button');
const menu = document.querySelector('.menu');

button.addEventListener('click', () => {
  button.classList.toggle('-menu-open');
  menu.classList.toggle('-open');


  
})
  
  