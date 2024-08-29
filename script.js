// script.js

// Simples script para adicionar uma funcionalidade de voltar ao topo
document.querySelector('footer a').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
