import './bootstrap'
import Alpine from 'alpinejs'
import clock from './clock'
import Swiper from 'swiper'
import { Autoplay } from 'swiper/modules'
import 'swiper/css'
import { Application } from '@splinetool/runtime'

window.Alpine = Alpine
window.Swiper = Swiper
window.Autoplay = Autoplay

document.addEventListener('alpine:init', () => {
  Alpine.data('clock', clock)

  const canvas = document.getElementById('canvas3d')

  // start the application and load the scene
  const spline = new Application(canvas)

  spline
    .load('https://prod.spline.design/2YyIpne5FYuNNWqZ/scene.splinecode')
});

Alpine.start()
