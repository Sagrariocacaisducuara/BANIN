let isDragging = false;
let offsetX, offsetY;

const infoCandidato = document.getElementById('infocandidato');
const infoHidden = document.getElementById('infoHidden');

// Función para mostrar/ocultar la información al hacer clic
function toggleInfo() {
    infoHidden.classList.toggle('show');
}

// Mover la "bolita" por la página
infoCandidato.addEventListener('mousedown', function(e) {
    isDragging = true;
    offsetX = e.clientX - infoCandidato.offsetLeft;
    offsetY = e.clientY - infoCandidato.offsetTop;
});

document.addEventListener('mousemove', function(e) {
    if (isDragging) {
        infoCandidato.style.left = (e.clientX - offsetX) + 'px';
        infoCandidato.style.top = (e.clientY - offsetY) + 'px';
    }
});

document.addEventListener('mouseup', function() {
    isDragging = false;
});