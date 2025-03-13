document.querySelector('.burger-menu').addEventListener('click', () => {
   document.querySelector('.nav-links').classList.toggle('active');
});

document.querySelectorAll('nav ul li a').forEach(anchor => {
   anchor.addEventListener('click', function (event) {
       event.preventDefault();
       document.querySelector(this.getAttribute('href')).scrollIntoView({
           behavior: 'smooth'
       });
   });
});
