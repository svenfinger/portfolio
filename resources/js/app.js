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

  const heroLogo = document.getElementById('hero-logo')

  if (heroLogo){
    const splineHeroLogo = new Application(heroLogo)
    splineHeroLogo
    .load('https://prod.spline.design/fDlkZ5AnP0tWzeh5/scene.splinecode').then(r => {})
  }
});

Alpine.start()
