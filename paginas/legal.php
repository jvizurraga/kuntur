<?php
$title = "Legal | Kuntur Hosting";
include __DIR__ . '/../partials/header.php';
?>

<section class="bg-background-light py-24">
  <div class="max-w-5xl mx-auto px-6">

    <h1 class="text-4xl md:text-5xl font-extrabold text-background-dark mb-8">
      Legal
    </h1>

    <div class="prose prose-slate max-w-none text-gray-700 leading-relaxed">

      <h3>LEGAL</h3>

      <p>
        Las interrupciones son eventos inevitables. Ya sea que utilices un servicio de hosting compartido,
        reseller hosting, VPS o una solución en la nube, ya sea con <strong>Kuntur Hosting</strong> u otro proveedor,
        cualquier servicio basado en tecnologías de la información está expuesto al riesgo de sufrir una caída;
        esta realidad es innegable.
      </p>

      <p>
        Tanto para nuestro equipo interno como para nuestros valiosos clientes, cualquier interrupción representa
        un desafío significativo. A pesar de ser conscientes de que estos eventos ocurrirán en algún momento,
        hemos desarrollado esta política de respuesta ante emergencias.
      </p>

      <p>
        Esta política no solo nos guía hacia una resolución eficiente en situaciones críticas, sino que también
        brinda al cliente la certeza de estar en manos de profesionales comprometidos. En <strong>Kuntur Hosting</strong>
        entendemos que, durante incidentes críticos, las situaciones pueden escalar rápidamente. Sin embargo,
        con esta política en marcha, nos comprometemos a abordar cualquier interrupción de forma eficiente y efectiva,
        garantizando la continuidad y estabilidad de los servicios que proporcionamos.
      </p>

      <p>
        <strong>Tipos de incidentes:</strong> En el ámbito de la prestación de servicios de hosting, la identificación
        y clasificación de incidentes es fundamental para garantizar la estabilidad y continuidad operativa.
        A continuación, se detallan los distintos tipos de incidentes según el impacto generado en los servicios.
      </p>

      <h3>Bug</h3>

      <p>
        Este incidente, clasificado como <strong>No Urgente</strong>, implica fallas en determinadas funciones
        del servicio sin que exista una interrupción total del mismo.
      </p>

      <ul>
        <li>
          <strong>Software Propietario:</strong> Fallos identificados en el software central de Kuntur Hosting,
          sujetos a corrección en futuras actualizaciones.  
          <br>
          <em>Ejemplo:</em> El cliente experimenta un error al intentar pagar con saldo en el Área de Cliente,
          impidiendo completar un pedido al seleccionar el método de pago “Saldo a Favor”.
        </li>
        <li>
          <strong>Software de Terceros:</strong> Fallos identificados en software de terceros o partners,
          cuya corrección depende de futuras actualizaciones del proveedor.
          <br>
          <em>Ejemplo:</em> cPanel elimina dominios adicionales al transferir una cuenta entre servidores.
        </li>
      </ul>

      <h3>Interrupción Parcial</h3>

      <p>
        Este incidente, clasificado como <strong>Urgente</strong>, implica una interrupción parcial de los servicios
        o de su funcionalidad.
      </p>

      <ul>
        <li>
          <strong>Software Propietario:</strong> Interrupciones limitadas a funciones específicas debido a fallos
          en software propietario de Kuntur Hosting.
          <br>
          <em>Ejemplo:</em> Interrupción en la comunicación del API de reventa de dominios, impidiendo la gestión
          de dominios desde el Área de Cliente.
        </li>
        <li>
          <strong>Ataques:</strong> Ataques cibernéticos que provocan una interrupción parcial de los servicios.
          <br>
          <em>Ejemplo:</em> Un ataque de Denegación de Servicio (DoS) que genera sobrecarga en el Área de Cliente,
          afectando temporalmente el acceso.
        </li>
        <li>
          <strong>Software de Terceros:</strong> Fallos o degradaciones en servicios externos que impactan
          parcialmente la funcionalidad ofrecida por Kuntur Hosting.
          <br>
          <em>Ejemplo:</em> Fallo en Mailchannels que afecta la entrega de correos electrónicos.
        </li>
      </ul>

      <h3>Caída Total</h3>

      <p>
        Este incidente, clasificado como <strong>Crítico</strong>, implica una interrupción total de los servicios
        de hosting y puede originarse por las siguientes causas:
      </p>

      <ul>
        <li>
          <strong>Centro de Datos:</strong> Fallos totales derivados de problemas en el centro de datos,
          como interrupciones en el suministro eléctrico.
          <br>
          <em>Ejemplo:</em> Una falla eléctrica provoca la caída completa de uno o más nodos de Kuntur Hosting.
        </li>
        <li>
          <strong>Software de Terceros:</strong> Errores sistémicos en software de terceros que interrumpen
          completamente los servicios.
          <br>
          <em>Ejemplo:</em> Caída del servicio DNS de Cloudflare que afecta uno o más nodos.
        </li>
        <li>
          <strong>Ataques:</strong> Ataques cibernéticos que generan interrupciones totales.
          <br>
          <em>Ejemplo:</em> Un ataque DDoS masivo y no mitigado que afecta la disponibilidad de los servicios.
        </li>
      </ul>

      <h3>Protocolo de Gestión ante Incidentes – Bug</h3>

      <h4>Procedimiento</h4>

      <ul>
        <li>Recolección de datos y evidencias del fallo reportado mediante un Ticket de Soporte.</li>
        <li>Réplica del error en un entorno controlado y documentación interna del incidente.</li>
        <li>Si el error no puede replicarse, se informa al cliente mediante el ticket.</li>
        <li>Si el error se replica, se genera un caso interno con referencia al ticket.</li>
        <li>Escalado del caso al desarrollador correspondiente (Kuntur Hosting o tercero).</li>
        <li>Resolución del bug, actualización del software y comunicación mediante boletín general.</li>
      </ul>

      <h4>Protocolo de Comunicación</h4>

      <ul>
        <li>No se reporta en la página de estado.</li>
        <li>No se envían boletines individuales.</li>
      </ul>

      <h4>Tiempo de Resolución</h4>

      <ul>
        <li>No existe un tiempo de resolución estimado para este tipo de incidentes.</li>
      </ul>

      <h3>Aplicación de la Ley</h3>

      <p>
        El cliente acepta que <strong>Kuntur Hosting</strong> podrá entregar información del cliente a las
        autoridades competentes cuando sea requerido por ley.
      </p>

    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
