import './bootstrap'

import clock from './clock';

import Alpine from 'alpinejs'

window.Alpine = Alpine

document.addEventListener('alpine:init', () => {
  Alpine.data('clock', clock);
});

Alpine.start()
