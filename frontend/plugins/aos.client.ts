import AOS from 'aos';
import 'aos/dist/aos.css';

export default defineNuxtPlugin((nuxtApp) => {
  if (typeof window !== 'undefined') {
    AOS.init({
      once: true, // Empêche l'animation de se rejouer
    });
  }
});
