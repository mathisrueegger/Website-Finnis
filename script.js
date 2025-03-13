document.querySelectorAll('.nav-link').forEach(link => {
   link.addEventListener('click', (e) => {
       e.preventDefault();
       const targetId = link.getAttribute('href').substring(1);
       const
