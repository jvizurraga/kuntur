<?php
$title = "Nosotros | Kuntur Hosting";
include __DIR__ . '/../partials/header.php';
?>

<!-- ================= NOSOTROS ================= -->
<section class="py-28 bg-background-light">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-2 gap-16 items-center">

      <!-- TEXTO -->
      <div>

        <h1 class="text-4xl md:text-5xl font-display font-extrabold text-background-dark leading-tight">
          Nosotros, Proveedores<br>
          <span class="text-primary">Especializados en Hosting</span>
        </h1>

        <p class="mt-6 text-gray-600 leading-relaxed">
          <strong>ITSolutions & Network SAC</strong> es una empresa tecnológica enfocada en
          soluciones modernas de infraestructura digital. Contamos con un equipo
          altamente capacitado, orientado a implementar tecnologías de última generación.
        </p>

        <p class="mt-4 text-gray-600 leading-relaxed">
          Nuestro ADN está compuesto por especialistas en diversas áreas de la tecnología
          de la información como DevOps, infraestructura, seguridad, soporte técnico y
          programación.
        </p>

        <p class="mt-4 text-gray-600 leading-relaxed">
          Gracias a nuestra experiencia acumulada y conocimiento técnico, solucionamos
          problemas de infraestructura, seguridad y soporte de forma óptima y a precios
          accesibles, siempre bajo buenas prácticas y respeto por la confidencialidad
          de la información.
        </p>

        <h3 class="mt-8 font-bold text-background-dark">
          Como proveedores de hosting brindamos:
        </h3>

        <ul class="mt-4 space-y-2 text-gray-600 list-disc list-inside">
          <li><strong>Servicio de web hosting</strong> para empresas</li>
          <li><strong>Venta de VPS</strong> (servidores virtuales privados)</li>
          <li>Alojamiento en nube pública</li>
          <li>Correo corporativo empresarial</li>
          <li>Registro de dominios (.com, .net, .world, etc.)</li>
        </ul>

        <!-- BOTÓN PDF -->
        <a
          href="/docs/nosotros.pdf"
          download
          class="inline-block mt-10 px-8 py-4 rounded-full bg-primary text-background-dark font-bold hover:opacity-90 transition"
        >
          Presentación de la Empresa
        </a>

      </div>

      <!-- IMAGEN -->
      <div class="flex justify-center">
        <img
          src="/img/nosotros-hosting.png"
          alt="Infraestructura ITSolutions & Network"
          class="w-full max-w-md drop-shadow-xl"
        >
      </div>

    </div>

  </div>
</section>
<!-- ================= FIN NOSOTROS ================= -->


<?php include __DIR__ . '/../partials/footer.php'; ?>