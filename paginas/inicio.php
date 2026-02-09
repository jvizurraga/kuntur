<?php
// Cargar precios desde WHMCS
$preciosDominios = include __DIR__ . '/../includes/whmcs-domains.php';

// Header después de los datos
include __DIR__ . '/../partials/header.php';
?>

<header class="relative min-h-screen flex items-center overflow-hidden">

  <!-- BUSCADOR DOMINIOS -->
  <div class="absolute inset-x-0 top-[70%] z-20">
    <div class="max-w-7xl mx-auto px-6">

      <div class="grid md:grid-cols-2 gap-12 items-center text-white">

        <!-- TEXTO IZQUIERDA -->
        <div>
          <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
            Compra el dominio perfecto para tu proyecto:
          </h2>

          <p class="text-gray-300 max-w-lg">
            Primero verifica disponibilidad del dominio para tu empresa o proyecto,
            luego resérvalo antes que alguien lo tome.
          </p>
        </div>

        <!-- BUSCADOR DERECHA -->
        <div class="flex flex-col items-center">

          <form
            action="https://kunturhosting.com/customer/cart.php"
            method="get"
            target="_blank"
            class="w-full flex items-center bg-white rounded-full overflow-hidden shadow-xl"
          >
            <input type="hidden" name="a" value="add">
            <input type="hidden" name="domain" value="register">

            <div class="flex items-center px-4 text-gray-400">🌐</div>

            <input
              type="text"
              name="query"
              placeholder="Buscar dominio, ejemplo: miempresa.com"
              class="flex-1 px-4 py-4 text-gray-700 outline-none"
              required
            >

            <button
              type="submit"
              class="bg-primary px-8 py-4 text-background-dark font-bold hover:opacity-90 transition"
            >
              Buscar
            </button>
          </form>

          <!-- PRECIOS DOMINIOS -->
          <div class="mt-4 w-full flex justify-center gap-6 text-sm text-gray-300">
            <?php if (is_array($preciosDominios) && !empty($preciosDominios)): ?>
              <?php foreach ($preciosDominios as $tld => $precio): ?>
                <span>
                  <strong class="text-primary">.<?= htmlspecialchars($tld) ?></strong>
                  $<?= number_format((float)$precio, 2) ?>
                </span>
              <?php endforeach; ?>
            <?php else: ?>
              <span class="text-gray-400">Consulta precios en tiempo real</span>
            <?php endif; ?>
          </div>

        </div>

      </div>
    </div>
  </div>

  <!-- FONDO -->
  <div class="absolute inset-0 -z-10">
    <img
      src="/img/fondo-kuntur.png"
      alt="Paisaje Kuntur Hosting"
      class="w-full h-full object-cover object-center"
    >
    <div class="absolute inset-0 bg-background-dark/60"></div>
  </div>

  <!-- CONTENIDO PRINCIPAL -->
  <div class="relative z-10 max-w-6xl ml-32 px-6 text-white pt-0 -mt-40">

    <h1 class="text-5xl md:text-7xl font-display font-extrabold leading-tight">
      Hosting <br>
      <span class="text-primary italic">que vuela alto</span>
    </h1>

    <p class="text-xl md:text-2xl mt-6 max-w-xl text-gray-200">
      Soluciones de alto rendimiento para tu empresa. Con el mejor soporte técnico del Perú.
    </p>

    <div class="mt-10 flex flex-col sm:flex-row gap-4">
      <a
        href="/paginas/hosting.php"
        class="bg-primary text-background-dark px-8 py-4 rounded-full font-bold text-lg hover:opacity-90 transition"
      >
        Ver planes
      </a>

      <a
        href="/paginas/contacto.php"
        class="border border-white/70 px-8 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition"
      >
        Contacto
      </a>
    </div>

  </div>
</header>

<!-- ================= PLANES DE HOSTING ================= -->
<section class="py-32 bg-background-light">
  <div class="max-w-7xl mx-auto px-6">

    <div class="text-center mb-20">
      <span class="text-primary font-semibold tracking-widest uppercase text-sm">
        Planes de Hosting
      </span>
      <h2 class="text-4xl md:text-5xl font-extrabold text-background-dark mt-4">
        Elige el plan perfecto para ti
      </h2>
      <p class="text-gray-600 mt-4">
        Soluciones escalables para cada etapa de tu crecimiento digital.
      </p>
    </div>

    <!-- 🔥 CARRUSEL -->
    <div class="carousel-wrapper">
      <div id="plans-carousel" class="carousel-track" style="width:max-content;">

        <div class="plan-card">
  		  <h3>Plan Emprendedor</h3>
  		  <p class="price">$69.88 <span>/anual</span></p>
  			<p class="price-note">No incluye IGV</p>
		  <ul>
  		    <li>8GB Almacenamiento SSD NVME</li>
    		<li>Transferencia de datos 150 Gb</li>
    		<li>Certificado SSL gratuito</li>
    		<li>Cuentas de Correo ilimitadas</li>
			<li>2 Bases de datos</li>
			<li>2 Sitios web</li>
			<li>Incluye subdominios</li>
			<li>Panel de control - Plesk</li>
			<li>Filtro Anti-SPAM de correos</li>
			<li>Seguridad Antimalware - Imunify360</li>
  		  </ul>
  		  
			<button
    class="btn-primary"
    onclick="window.location.href='https://kunturhosting.com/customer/store/hosting-web/plan-emprendedor'">
    Contratar
  </button>

  <a
    href="/hosting#caracteristicas"
    class="details-link">
    Detalles del servicio
  </a>
        </div>

        <div class="plan-card">
          <span class="badge">POPULAR</span>
          <h3>Plan Profesional</h3>
          <p class="price">$134.88 <span>/anual</span></p>
			<p class="price-note">No incluye IGV</p>
          <ul>
            <li>15GB Almacenamiento SSD NVME</li>
            <li>Transferencia de datos 200 Gb</li>
            <li>Certificado SSL gratuito</li>
            <li>Cuentas de Correo ilimitadas</li>
			<li>4 Bases de datos</li>
			<li>4 Sitios web</li>
			<li>Incluye subdominios</li>
			<li>Panel de control - Plesk</li>
			<li>Filtro Anti-SPAM de correos</li>
			<li>Seguridad Antimalware - Imunify360</li>
          </ul>
				
			<button
    class="btn-primary"
    onclick="window.location.href='https://kunturhosting.com/customer/store/hosting-web/plan-profesional'">
    Contratar
  </button>

  <a
    href="/hosting#caracteristicas"
    class="details-link">
    Detalles del servicio
  </a>
        </div>

        <div class="plan-card">
          <h3>Plan Corporativo</h3>
          <p class="price">$194.88 <span>/anual</span></p>
			<p class="price-note">No incluye IGV</p>
          <ul>
            <li>25GB Almacenamiento SSD NVME</li>
            <li>Transferencia de datos 250 Gb</li>
            <li>Certificado SSL gratuito</li>
            <li>Cuentas de Correo ilimitadas</li>
			<li>6 Bases de datos</li>
			<li>6 Sitios web</li>
			<li>Incluye subdominios</li>
			<li>Panel de control - Plesk</li>
			<li>Filtro Anti-SPAM de correos</li>
			<li>Seguridad Antimalware - Imunify360</li>
          </ul>
          
			<button
    class="btn-primary"
    onclick="window.location.href='https://kunturhosting.com/customer/store/hosting-web/plan-corporativo'">
    Contratar
  </button>

  <a
    href="/hosting#caracteristicas"
    class="details-link">
    Detalles del servicio
  </a>
        </div>

        <div class="plan-card">
          <h3>Plan Kuntur Pro</h3>
          <p class="price">$278.88 <span>/anual</span></p>
			<p class="price-note">No incluye IGV</p>
          <ul>
            <li>35GB Almacenamiento SSD NVME</li>
            <li>Transferencia de datos 400 Gb</li>
            <li>Certificado SSL gratuito</li>
            <li>Cuentas de Correo ilimitadas</li>
			<li>10 Bases de datos</li>
			<li>10 Sitios web</li>
			<li>Incluye subdominios</li>
			<li>Panel de control - Plesk</li>
			<li>Filtro Anti-SPAM de correos</li>
			<li>Seguridad Antimalware - Imunify360</li>
          </ul>
         
			<button
    class="btn-primary"
    onclick="window.location.href='https://kunturhosting.com/customer/store/hosting-web/plan-platino'">
    Contratar
  </button>

  <a
    href="/hosting#caracteristicas"
    class="details-link">
    Detalles del servicio
  </a>
        </div>
		</div>
          </div>
	  </div>
		
    <!-- 🔥 FIN CARRUSEL -->

<!-- ================= VENTAJAS ================= -->

<section class="py-32 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <!-- TÍTULO -->
    <div class="text-center mb-20">
      <span class="text-primary font-semibold tracking-widest uppercase text-sm">
        Nuestras ventajas
      </span>

      <h2 class="text-4xl md:text-5xl font-extrabold text-background-dark mt-4">
        ¿Por qué elegir Kuntur Hosting?
      </h2>

      <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
        Diseñado para ofrecer la mejor experiencia de usuario con infraestructura
        de última generación.
      </p>
    </div>

    <!-- TARJETAS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

      <!-- CARD 1 -->
      <div class="bg-background-light rounded-2xl p-8 text-center shadow-sm hover:shadow-lg transition">
        <div class="w-14 h-14 mx-auto mb-6 rounded-full bg-primary/10 flex items-center justify-center text-primary text-2xl">
          ⚡
        </div>
        <h3 class="text-xl font-bold text-background-dark mb-3">
          Hosting Rápido
        </h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Servidores optimizados con discos NVMe y tecnología LiteSpeed
          para una carga instantánea.
        </p>
      </div>

      <!-- CARD 2 -->
      <div class="bg-background-light rounded-2xl p-8 text-center shadow-sm hover:shadow-lg transition">
        <div class="w-14 h-14 mx-auto mb-6 rounded-full bg-primary/10 flex items-center justify-center text-primary text-2xl">
          🎧
        </div>
        <h3 class="text-xl font-bold text-background-dark mb-3">
          Soporte 24/7
        </h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Asistencia experta disponible todo el año para resolver
          cualquier duda en minutos.
        </p>
      </div>

      <!-- CARD 3 -->
      <div class="bg-background-light rounded-2xl p-8 text-center shadow-sm hover:shadow-lg transition">
        <div class="w-14 h-14 mx-auto mb-6 rounded-full bg-primary/10 flex items-center justify-center text-primary text-2xl">
          📈
        </div>
        <h3 class="text-xl font-bold text-background-dark mb-3">
          Escala Empresarial
        </h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Soluciones flexibles que crecen junto a tu negocio
          sin complicaciones técnicas.
        </p>
      </div>

    </div>

  </div>
</section>
<!-- ================= FIN VENTAJAS ================= -->

<!-- ================= CTA FINAL ================= -->
<section class="py-24 bg-background-dark">
  <div class="max-w-7xl mx-auto px-6">

    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-background-dark via-accent-dark to-background-dark px-10 py-16 text-center shadow-2xl">

      <!-- Efecto radial sutil -->
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.06),transparent_60%)]"></div>

      <div class="relative z-10 max-w-3xl mx-auto">

        <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
          ¿Listo para despegar tu proyecto?
        </h2>

        <p class="text-gray-300 text-lg mb-10">
          Únete a los miles de clientes que confían su infraestructura digital en
          <strong class="text-white">Kuntur Hosting</strong>.
          Migración gratuita incluida en todos los planes.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-6">

          <a
            href="https://kunturhosting.com/customer/register.php"
            class="bg-primary text-background-dark px-10 py-4 rounded-full font-bold text-lg hover:opacity-90 transition"
          >
            Crear mi cuenta ahora
          </a>

          <a
            href="/paginas/contacto.php"
            class="border border-white/40 text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition"
          >
            Hablar con un experto
          </a>

        </div>

      </div>
    </div>

  </div>
</section>
<!-- ================= FIN CTA ================= -->

	  
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const wrapper = document.querySelector(".carousel-wrapper");
  const track   = document.querySelector(".carousel-track");
  const cards   = Array.from(document.querySelectorAll(".plan-card"));

  if (!wrapper || !track || cards.length === 0) return;

  function updateFocus(mouseX) {
    const distances = cards.map(card => {
      const rect = card.getBoundingClientRect();
      const cardCenter = rect.left + rect.width / 2;
      return {
        card,
        distance: Math.abs(mouseX - cardCenter)
      };
    });

    distances.sort((a, b) => a.distance - b.distance);

    cards.forEach(card => {
      card.classList.remove("is-active");
      card.classList.add("is-blur");
    });

    distances.slice(0, 2).forEach(item => {
      item.card.classList.add("is-active");
      item.card.classList.remove("is-blur");
    });
  }

  wrapper.addEventListener("mousemove", (e) => {
    const rect = wrapper.getBoundingClientRect();
    const percent = (e.clientX - rect.left) / rect.width;
    const maxScroll = track.scrollWidth - wrapper.clientWidth;

    if (maxScroll > 0) {
      const translateX = -maxScroll * percent;
      track.style.transform = `translateX(${translateX}px)`;
    }

    updateFocus(e.clientX);
  });

  wrapper.addEventListener("mouseleave", () => {
    track.style.transform = "translateX(0)";
    updateFocus(wrapper.getBoundingClientRect().left + wrapper.clientWidth / 2);
  });

  // foco inicial (centrales)
  updateFocus(wrapper.getBoundingClientRect().left + wrapper.clientWidth / 2);
});
</script>


<?php include __DIR__ . '/../partials/footer.php'; ?>
