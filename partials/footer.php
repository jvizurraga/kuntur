</main>

<!-- ================= FOOTER ================= -->
<footer class="bg-background-dark text-white">
  <div class="max-w-7xl mx-auto px-6 py-16">

    <div class="grid grid-cols-1 md:grid-cols-4 gap-12">

      <div>
  <a href="/" class="flex items-center gap-3 mb-4 no-underline">
    
    <!-- Logo real reutilizado -->
    <div class="logo-circle scale-90">
      <img src="/img/condor.png" alt="Kuntur Hosting">
    </div>

    <div class="flex flex-col leading-none">
      <span class="text-white font-display font-extrabold text-xl tracking-wider">
        KUNTUR
      </span>
      <span class="text-primary text-xs tracking-[0.35em] uppercase mt-1">
        HOSTING
      </span>
    </div>

  </a>

  <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
    Proveedor de servicios de hosting de alta calidad con tecnología de punta
    y el mejor soporte técnico en español.
  </p>
</div>


      <!-- PRODUCTOS -->
      <div>
        <h4 class="text-background-dark text-white font-bold mb-4">
          Productos
        </h4>
        <ul class="space-y-3 text-sm text-gray-500">
          <li><a href="/hosting" class="hover:text-primary">Hosting</a></li>
		  <li><a href="https:/customer/cart.php?a=add&domain=register" class="hover:text-primary">Dominios</a></li>
          <li><a href="/#" class="hover:text-primary">VPS Cloud</a></li>
          <li><a href="/#" class="hover:text-primary">Dedicated Servers</a></li>
          <li><a href="/#" class="hover:text-primary">WordPress Hosting</a></li>
        </ul>
      </div>

      <!-- EMPRESA -->
      <div>
        <h4 class="text-background-dark text-white font-bold mb-4">
          Empresa
        </h4>
        <ul class="space-y-3 text-sm text-gray-500">
          <li><a href="/formas-de-pago" class="hover:text-primary">Formas de Pago</a></li>
          <li><a href="/terminos-y-condiciones" class="hover:text-primary">Terminos y Condiciones</a></li>
          <li><a href="/legal" class="hover:text-primary">Legal</a></li>
          <li><a href="/politicas-de-uso" class="hover:text-primary">Politicas de Uso</a></li>
		  <li><a href="/nosotros" class="hover:text-primary">Nosotros</a></li>
          <li><a href="/contacto" class="hover:text-primary">Contacto</a></li>
        </ul>
      </div>

      <!-- REDES -->
      <div>
        <h4 class="text-background-dark font-bold mb-4">
          Síguenos
        </h4>
        <div class="flex gap-4">
          <a href="#" class="text-gray-400 hover:text-primary transition">
            <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22.23 0H1.77C.79 0 0 .774 0 1.727v20.545C0 23.227.79 24 1.77 24h11.06v-9.294H9.69V11.01h3.14V8.413c0-3.1 1.894-4.788 4.66-4.788 1.325 0 2.464.098 2.795.142v3.24h-1.918c-1.505 0-1.797.716-1.797 1.765v2.316h3.59l-.467 3.696h-3.123V24h6.127C23.21 24 24 23.227 24 22.273V1.727C24 .774 23.21 0 22.23 0z"/>
            </svg>
          </a>

          <a href="#" class="text-gray-400 hover:text-primary transition">
            <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 4.557a9.93 9.93 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195A4.916 4.916 0 0016.616 3c-2.737 0-4.958 2.22-4.958 4.957 0 .39.045.765.127 1.124C7.728 8.89 4.1 6.89 1.67 3.905a4.93 4.93 0 00-.666 2.49c0 1.72.874 3.234 2.188 4.122a4.902 4.902 0 01-2.245-.616v.06c0 2.404 1.71 4.41 3.977 4.866a4.93 4.93 0 01-2.237.085c.63 1.953 2.445 3.377 4.6 3.418A9.87 9.87 0 010 19.54a13.94 13.94 0 007.548 2.212c9.058 0 14.01-7.496 14.01-13.986 0-.21 0-.423-.015-.636A10.012 10.012 0 0024 4.557z"/>
            </svg>
          </a>
        </div>
      </div>

    </div>

    <!-- BOTTOM -->
    <div class="mt-16 pt-8 border-t border-white/10 text-center text-sm text-gray-400">
      © <?= date('Y') ?> Kuntur Hosting. Marca operada por <strong>IT Solutions &amp; Network SAC</strong>.  
  Todos los derechos reservados.
    </div>

  </div>
</footer>
<!-- ================= FIN FOOTER ================= -->

<!-- BOTÓN VOLVER ARRIBA -->
<button id="scrollTopBtn"
  aria-label="Volver arriba"
  class="fixed bottom-6 right-6 w-12 h-12 rounded-full
         bg-primary text-background-dark
         flex items-center justify-center
         shadow-lg opacity-0 pointer-events-none
         transition-all duration-300 hover:opacity-90 z-50">
  ↑	
</button>

<script>
const scrollBtn = document.getElementById("scrollTopBtn");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    scrollBtn.classList.remove("opacity-0", "pointer-events-none");
  } else {
    scrollBtn.classList.add("opacity-0", "pointer-events-none");
  }
});

scrollBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
</script>

<script>
(() => {
  const wrapper = document.querySelector(".carousel-wrapper");
  const track = document.querySelector(".carousel-track");

  if (!wrapper || !track) {
    console.warn("Carrusel no encontrado");
    return;
  }

  let maxScroll = track.scrollWidth - wrapper.clientWidth;

  wrapper.addEventListener("mousemove", (e) => {
    const rect = wrapper.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const percent = Math.min(Math.max(x / rect.width, 0), 1);

    track.style.transform = `translateX(${-maxScroll * percent}px)`;
  });

  window.addEventListener("resize", () => {
    maxScroll = track.scrollWidth - wrapper.clientWidth;
  });
})();
</script>

</body>
</html>
