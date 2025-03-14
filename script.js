document.querySelector('.burger-menu').addEventListener('click', () => {
   document.querySelector('.nav-links').classList.toggle('active');
});

document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function (event) {
        if (this.getAttribute('href').startsWith('#')) {
            event.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});
