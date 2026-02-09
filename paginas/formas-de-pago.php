<?php
$title = "Formas de Pago | Kuntur Hosting";
include __DIR__ . '/../partials/header.php';
?>

<!-- ================= FORMAS DE PAGO ================= -->
<section class="bg-background-light py-28">
  <div class="max-w-6xl mx-auto px-6">

    <!-- TÍTULO -->
    <div class="mb-16">
      <h1 class="text-4xl md:text-5xl font-extrabold text-background-dark mb-4">
        Formas de Pago
      </h1>
      <p class="text-gray-600 max-w-2xl">
        HIGH IT SOLUTIONS & NETWORKS SAC, representante de Kuntur Hosting, cuenta con los
        siguientes métodos de pago disponibles para nuestros clientes.
      </p>
    </div>

   <!-- FORMAS DE PAGO -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-20">

  <!-- TRANSFERENCIA BANCARIA -->
  <div class="bg-white rounded-2xl p-8 shadow-lg">
    <h3 class="text-xl font-bold text-background-dark mb-4">
      🏦 Transferencia Bancaria – BCP (Dólares)
    </h3>

    <ul class="space-y-2 text-gray-600 text-sm">
      <li>
        <strong>Número de Cuenta:</strong> 1912268693199
      </li>
      <li>
        <strong>CCI:</strong> 00219100226869319953
      </li>
      <li>
        <strong>Razón Social:</strong> HIGH IT SOLUTIONS &amp; NETWORKS SAC
      </li>
      <li>
        <strong>RUC:</strong> 20451515064
      </li>
    </ul>

    <p class="mt-4 text-xs text-gray-500">
      ✔ Aceptamos transferencias bancarias nacionales.
    </p>
  </div>

  <!-- YAPE -->
  <div class="bg-white rounded-2xl p-8 shadow-lg flex flex-col items-center text-center">
    <h3 class="text-xl font-bold text-background-dark mb-4">
      📱 Pago con Yape
    </h3>

    <p class="text-sm text-gray-600 mb-6 max-w-xs">
      Realiza tu pago de forma rápida y segura escaneando nuestro código QR desde la app Yape.
    </p>

    <!-- ESPACIO PARA QR -->
    <div class="w-48 h-48 bg-gray-100 border-2 border-dashed border-gray-300 rounded-xl flex items-center justify-center mb-4">
      <span class="text-xs text-gray-400 text-center px-4">
        Aquí irá el<br>QR de Yape
      </span>
    </div>

    <p class="text-xs text-gray-500">
      ✔ Pagos inmediatos<br>
      ✔ Solo Yape y transferencias bancarias
    </p>
  </div>

</div>



    <!-- IZYPAY -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

      <!-- TEXTO -->
      <div>
        <h2 class="text-2xl md:text-3xl font-extrabold text-background-dark mb-4">
          Pagos Online Seguros
        </h2>

        <p class="text-gray-600 mb-6">
          Si desea realizar pagos directos desde nuestro sistema de compra,
          puede pagar de forma segura mediante <strong>Izipay</strong>,
          aceptando todas las tarjetas de crédito y débito.
        </p>

        <p class="text-sm text-gray-500">
          Los pagos en línea son procesados bajo estándares de seguridad
          certificados.
        </p>
      </div>

      <!-- LOGO IZYPAY -->
      <div class="flex justify-center md:justify-end">
        <div class="bg-white rounded-2xl shadow-lg p-6">
          <img
            src="/img/izipay.png"
            alt="Izipay acepta todas las tarjetas"
            class="max-w-[220px]"
          >
        </div>
      </div>

    </div>

  </div>
</section>
<!-- ================= FIN FORMAS DE PAGO ================= -->

<?php include __DIR__ . '/../partials/footer.php'; ?>
