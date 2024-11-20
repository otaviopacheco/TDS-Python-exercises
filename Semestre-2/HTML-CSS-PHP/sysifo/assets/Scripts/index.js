// Script para corrigir o desaparecimento da área de contato ao redimensionar
const check = document.getElementById('check');
    check.addEventListener('change', function() {
        document.body.classList.toggle('menu-open', this.checked);
    });


window.addEventListener('resize', function() {
    if (window.innerWidth > 890) {
        document.body.classList.remove('menu-open');
        check.checked = false;
    }edge
});
//  Fim script