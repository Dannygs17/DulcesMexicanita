import './bootstrap';
import 'bootstrap'; 

import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.min.js';

import '../css/app.css';

//Id de log rocket
//import LogRocket from 'logrocket';
//LogRocket.init('4y1sfa/laravelp-qhfdp');




// Obtener token CSRF 
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Obtener la ruta para registrar el click 
const registrarClickUrl = window.routes?.registrarClick || '/registrar-click';

document.addEventListener('click', (event) => {
  const target = event.target;
  console.log('Se hizo click');

  // Registrar evento en LogRocket
  LogRocket.track('click', {
    tag: target.tagName,
    classes: target.className,
    id: target.id,
    text: target.innerText?.slice(0, 100) || ''
  });

  //Guardar en txt

  fetch(registrarClickUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken
    },
    body: JSON.stringify({
      tag: target.tagName,
      classes: target.className,
      id: target.id,
      text: target.innerText?.slice(0, 100) || ''
    }),
  })
  .then(res => res.json())
  .then(data => console.log('Click registrado:', data))
  .catch(err => console.error('Error al registrar click:', err));
});

//Mostrar los clicks en la pagina
document.addEventListener('click', (event) => {
  const target = event.target;
  // Mostrar mensaje en consola
  console.log('Se hizo click');
  // Registrar evento en LogRocket
  LogRocket.track('click', {
    tag: target.tagName,
    classes: target.className,
    id: target.id,
    text: target.innerText?.slice(0, 100) || ''
  });
});
