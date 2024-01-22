import './bootstrap'
import Alpine from 'alpinejs'
import clock from './clock'
import Swiper from 'swiper'
import { Autoplay } from 'swiper/modules'
import 'swiper/css'

window.Alpine = Alpine
window.Swiper = Swiper
window.Autoplay = Autoplay

document.addEventListener('alpine:init', () => {
  Alpine.data('clock', clock)
});

Alpine.start()
