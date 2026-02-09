<!DOCTYPE html>

<style>
/* DESKTOP - carrusel correcto */
.carousel-wrapper {
  overflow: hidden;
}
.carousel-track {
  display: flex;
  gap: 20px;
  transition: transform 0.3s ease;
}
.plan-card {
  flex: 0 0 280px;
  min-height: 500px;
}

</style>

<html lang="es">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?php echo isset($title) ? $title : 'KunturHosting'; ?></title>

<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@300;400;500&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

<script>
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "#C9A227",
        "background-light": "#F8FAFC",
        "background-dark": "#0B1C2D",
        "accent-dark": "#162B40",
      },
      fontFamily: {
        display: ["Montserrat", "sans-serif"],
        sans: ["Inter", "sans-serif"],
      },
    },
  },
};
</script>

<style>
/* ================= PLANES DE HOSTING ================= */

.carousel-track {
  display: flex;
  gap: 32px;
  align-items: stretch;
  transition: transform 0.35s ease;
  will-change: transform;
}

.plan-card {
  background: #ffffff;
  border-radius: 20px;
  padding: 32px 28px;
  width: 280px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.08);
  text-align: center;
  transition: all 0.4s ease;
  position: relative;
  overflow: visible;
}

	/* Estado inactivo (por defecto) */
.plan-card {
  opacity: 0.35;
  transform: scale(0.9);
}

/* Estado activo (controlado por JS) */
.plan-card.is-active {
  opacity: 1;
  transform: scale(1.05);
  z-index: 2;
}
	
.plan-card h3 {
  font-size: 1.25rem;
  font-weight: 800;
  color: #0B1C2D;
  margin-bottom: 10px;
}

.plan-card .price {
  font-size: 2rem;
  font-weight: 800;
  color: #C9A227;
  margin-bottom: 20px;
}

.plan-card .price span {
  font-size: 0.9rem;
  color: #64748b;
}

.plan-card .btn-primary {
  margin-top: 20px;
  background: #0B1C2D;
  color: #ffffff;
  padding: 12px 24px;
  border-radius: 999px;
  font-weight: 700;
  width: 100%;
}

.plan-card .btn-primary:hover {
  opacity: 0.9;
}

/* ===== NOTA PRECIO (override final) ===== */
.plan-card .price-note {
  font-size: 0.75rem;
  color: #64748b;
  margin-top: -14px;
  margin-bottom: 14px;
  line-height: 1;
}

/* Badge POPULAR */
.plan-card .badge {
  position: absolute;
  top: -14px;
  left: 50%;
  transform: translateX(-50%);
  background: #C9A227;
  color: #0B1C2D;
  font-size: 0.7rem;
  font-weight: 800;
  padding: 6px 14px;
  border-radius: 999px;
}

/* =========================
   BOTÓN DETALLES DEL SERVICIO
   ========================= */
.details-link {
  display: block;
  margin-top: 10px;
  font-size: 0.85rem;
  font-weight: 600;
  color: #C9A227;
  text-decoration: underline;
  transition: opacity 0.3s ease;
}

.details-link:hover {
  opacity: 0.75;
}
	
/* ================= LOGO ================= */
.logo-circle{
  width:65px;
  height:65px;
  background:#C9A227;
  border-radius:9999px;
  display:flex;
  align-items:center;
  justify-content:center;
  flex-shrink:0;
  overflow:visible;
}

.logo-circle img{
  width: 130% !important;
  max-width: none !important;   /* 🔥 ESTO ES LO QUE FALTABA */
  height: auto;
  transform: translateY(-2px);
  transition: transform 0.7s ease;
}


.logo-circle:hover img{
  transform: translateY(-4px) scale(1.50);
}

/* ================= NAV ================= */
.navbar-height{
  min-height:90px;
}

/* ================= CONDOR ANIMATION ================= */
#condor-fly{
  position: fixed;
  width: 180px;
  z-index: 9999;
  pointer-events: none;

  /* estado inicial */
  opacity: 0;

  /* optimización animación */
  will-change: transform, opacity;

  /* sombra realista */
  filter: brightness(0) contrast(1.2)
          drop-shadow(0 14px 20px rgba(0,0,0,0.35));

  /* animación */
  animation: condorFlight 4.6s cubic-bezier(.45,0,.25,1) forwards;
}


@keyframes condorFlight {

  /* 1️⃣ Sale del logo */
  0% {
    transform: translate(0, 0) scale(0.55) rotate(0deg);
    opacity: 1;
  }

  /* 2️⃣ Llega al centro (descenso suave) */
  45% {
    transform: translate(18vw, 55vh) scale(0.9) rotate(6deg);
    opacity: 1;
  }

  /* 3️⃣ Salida horizontal continua */
  100% {
    transform: translate(120vw, 38vh) scale(1.05) rotate(8deg);
    opacity: 0;
  }
}



/* Mobile OFF */
@media(max-width:768px){
  #condor-fly{display:none;}
}

/* ================= TINTE AZUL GLOBAL ================= */
body::before{
  content:"";
  position:fixed;
  inset:0;
  background:linear-gradient(
    180deg,
    rgba(11,28,45,0.65) 0%,
    rgba(11,28,45,0.45) 40%,
    rgba(11,28,45,0.15) 100%
  );
  z-index:-1;
  pointer-events:none;
}

</style>
</head>

<body class="bg-background-dark font-sans dark">
	
<!-- CONDOR FLY -->
<img
  src="/img/condor.png"
  id="condor-fly"
  alt="Cóndor Kuntur"
  style="display:none;"
>

<nav class="fixed w-full z-50 bg-background-dark/80 backdrop-blur-md border-b border-white/10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between navbar-height">

      <!-- LOGO -->
      <a href="/" class="flex items-center gap-4 no-underline">
  <div class="logo-circle">
    <img src="/img/condor.png" alt="Kuntur Hosting">
  </div>

  <div class="flex flex-col leading-none">
    <span class="text-white font-display font-extrabold text-3xl tracking-wider">
      KUNTUR
    </span>
    <span class="text-primary text-xs tracking-[0.35em] uppercase mt-1">
      HOSTING
    </span>
  </div>
</a>

      <!-- MENU DESKTOP -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="/" class="text-gray-300 hover:text-primary">Inicio</a>
        <a href="/paginas/hosting.php" class="text-gray-300 hover:text-primary">Hosting</a>
        <a href="https://kunturhosting.com/customer/cart.php?a=add&domain=register" class="text-gray-300 hover:text-primary">Dominios</a>
        <a href="/contacto" class="text-gray-300 hover:text-primary">Contacto</a>

        <a
          href="https://kunturhosting.com/customer/"
          target="_blank"
          class="ml-4 px-6 py-2.5 rounded-full bg-primary text-background-dark font-semibold hover:opacity-90 transition"
        >
          Iniciar sesión
        </a>
      </div>

      <!-- MENU MOBILE -->
      <div class="md:hidden">
        <span class="material-symbols-outlined text-white text-3xl cursor-pointer">menu</span>
      </div>

    </div>
  </div>
</nav>

<script>

	/* CONDOR SOLO UNA VEZ */
document.addEventListener("DOMContentLoaded", () => {

  // 👉 si ya se ejecutó en esta sesión, no hacer nada
  if (sessionStorage.getItem("condorPlayed")) {
    return;
  }

  const condor = document.getElementById("condor-fly");
  const logo = document.querySelector(".logo-circle");

  if (!condor || !logo) return;

  const rect = logo.getBoundingClientRect();

  condor.style.left = `${rect.left + rect.width / 2 - 75}px`;
  condor.style.top  = `${rect.top + rect.height / 2 - 47}px`;
  condor.style.display = "block";

  requestAnimationFrame(() => {
    condor.style.animation = "condorFlight 5.8s cubic-bezier(.45,0,.25,1) forwards";
  });

  // 👉 marcar como ya ejecutado
  sessionStorage.setItem("condorPlayed", "1");

});
</script>


<main class="pt-[80px]">

