const divInfoCandidato = document.getElementById('infocandidato');
const ventanaEmergente = document.getElementById('ventana-emergente');
const textoVentanaEmergente = document.getElementById('info-candidato-texto');

divInfoCandidato.addEventListener('click', () => {
    // Obtener el texto del div y mostrarlo en la ventana emergente
    const texto = divInfoCandidato.innerHTML;
    textoVentanaEmergente.innerText = texto;
    ventanaEmergente.style.display = 'block';
});

// Agregar evento para cerrar la ventana emergente cuando se presione fuera de ella
document.addEventListener('click', (e) => {
    if (e.target !== ventanaEmergente && e.target !== divInfoCandidato) {
        ventanaEmergente.style.display = 'none';
    }
});
