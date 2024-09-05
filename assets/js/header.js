// Agregamos un evento de clic al botón de toggle
document.getElementById('menu-toggle').addEventListener('click', function() {
    // Obtenemos el menú principal
    var menuPrincipal = document.getElementById('menu-principal');
    
    // Si el menú está oculto, lo mostramos
    if (menuPrincipal.classList.contains('show')) {
        menuPrincipal.classList.remove('show');
    } else {
        // Si el menú está visible, lo ocultamos
        menuPrincipal.classList.add('show');
    }
});