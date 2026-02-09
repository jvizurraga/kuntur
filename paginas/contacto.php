<?php
$title = "Contacto | Kuntur Hosting";
include __DIR__ . '/../partials/header.php';
?>

<section class="bg-background-light py-24">
  <div class="max-w-7xl mx-auto px-6">

    <!-- TÍTULO -->
    <div class="mb-16">
      <h1 class="text-4xl md:text-5xl font-display font-extrabold text-background-dark mb-4">
        Contáctanos
      </h1>
      <p class="text-gray-600 max-w-xl">
        Estamos aquí para ayudarte a escalar tu presencia digital con el respaldo
        y la solidez de los Andes.
      </p>
    </div>

    <!-- CONTENIDO -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">

      <!-- INFO CONTACTO -->
      <div class="space-y-6">

        <h3 class="text-lg font-bold text-background-dark">
          Información de Contacto
        </h3>

        <!-- CORREO ELECTRÓNICO -->
<div class="bg-white rounded-xl p-5 flex items-start gap-4 shadow-sm">
  <span class="material-symbols-outlined text-primary text-xl">
    mail
  </span>

  <div>
    <h4 class="font-semibold text-background-dark">
      Correo Electrónico
    </h4>

    <img
      src="/img/mail-contacto.png"
      alt="contacto@kunturhosting.com"
      class="mt-1 h-5 select-none pointer-events-none"
    >
  </div>
</div>




        <!-- DIRECCIÓN -->
        <div class="flex items-start gap-4 bg-white p-5 rounded-xl shadow-sm">
          <span class="material-symbols-outlined text-primary">
            location_on
          </span>
          <div>
            <p class="font-semibold text-background-dark">
              Ubicación
            </p>
            <p class="text-gray-500 text-sm">
              Lima, Perú
            </p>
          </div>
        </div>

        <!-- WHATSAPP -->
        <div class="mt-8">
          <p class="text-sm text-gray-600 mb-3">
            ¿Necesitas ayuda inmediata?
          </p>

          <a
            href="https://wa.me/51999999999"
            target="_blank"
            class="inline-flex items-center gap-2 bg-primary text-background-dark px-6 py-3 rounded-full font-semibold hover:opacity-90 transition"
          >
            <span class="material-symbols-outlined">
              chat
            </span>
            Contactar por WhatsApp
          </a>
        </div>

      </div>

      <!-- FORMULARIO -->
      <div class="bg-white p-8 rounded-2xl shadow-md">

        <form action="#" method="post" class="space-y-5">

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
              Nombre Completo
            </label>
            <input
              type="text"
              class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary"
              placeholder="Tu nombre"
              required
            >
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
              Correo Electrónico
            </label>
            <input
              type="email"
              class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary"
              placeholder="email@ejemplo.com"
              required
            >
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
              Asunto
            </label>
            <input
              type="text"
              class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary"
              placeholder="Motivo de contacto"
            >
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
              Mensaje
            </label>
            <textarea
              rows="4"
              class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary"
              placeholder="¿En qué podemos ayudarte?"
            ></textarea>
          </div>

          <button
            type="submit"
            class="w-full bg-background-dark text-white py-3 rounded-full font-semibold hover:opacity-90 transition"
          >
            Enviar Mensaje
          </button>

        </form>

      </div>

    </div>
  </div>
</section>

<!-- MAPA -->
<section class="bg-background-light pb-24">
  <div class="max-w-7xl mx-auto px-6">
    <div class="overflow-hidden rounded-2xl shadow-lg">

      <iframe
        src="https://www.google.com/maps?q=Lima%20Peru&output=embed"
        width="100%"
        height="420"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
      ></iframe>

    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>

