import './bootstrap';
import 'bootstrap'; 

import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.min.js';

import '../css/app.css';

//Id de log rocket
import LogRocket from 'logrocket';
LogRocket.init('4y1sfa/laravelp-dqgfg');



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
