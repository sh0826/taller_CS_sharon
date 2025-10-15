<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<style>
.glitch-form-wrapper {
  --bg-color: #0d0d0d;
  --primary-color: #00f2ea;
  --secondary-color: #a855f7;
  --text-color: #e5e5e5;
  --font-family: "Fira Code", Consolas, "Courier New", Courier, monospace;
  --glitch-anim-duration: 0.5s;
}

html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  background-color: #050505;
}

.glitch-form-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;       /* ocupa todo el ancho visible */
  height: 100vh;      /* ocupa toda la altura de la ventana */
  background-color: #050505; /* fondo negro */
  margin: 0;
  padding: 0;
  overflow: hidden;   /* evita barras de desplazamiento innecesarias */
}


/* --- Card Structure --- */
.glitch-card {
  background-color: var(--bg-color);
  width: 100%;
  max-width: 380px;
  border: 1px solid rgba(0, 242, 234, 0.2);
  box-shadow:
    0 0 20px rgba(0, 242, 234, 0.1),
    inset 0 0 10px rgba(0, 0, 0, 0.5);
  overflow: hidden;
  margin: 1rem;
}

.card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.3);
  padding: 0.5em 1em;
  border-bottom: 1px solid rgba(0, 242, 234, 0.2);
}

.card-title {
  color: var(--primary-color);
  font-size: 0.8rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  display: flex;
  align-items: center;
  gap: 0.5em;
}

.card-title svg {
  width: 1.2em;
  height: 1.2em;
  stroke: var(--primary-color);
}

.card-dots span {
  display: inline-block;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background-color: #333;
  margin-left: 5px;
}

.card-body {
  padding: 1.5rem;
}

/* --- Form Elements --- */
.form-group {
  position: relative;
  margin-bottom: 1.5rem;
}

.form-label {
  position: absolute;
  top: 0.75em;
  left: 0;
  font-size: 1rem;
  color: var(--primary-color);
  opacity: 0.6;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  pointer-events: none;
  transition: all 0.3s ease;
}

.form-group input {
  width: 100%;
  background: transparent;
  border: none;
  border-bottom: 2px solid rgba(0, 242, 234, 0.3);
  padding: 0.75em 0;
  font-size: 1rem;
  color: var(--text-color);
  font-family: inherit;
  outline: none;
  transition: border-color 0.3s ease;
}

.form-group input:focus {
  border-color: var(--primary-color);
}

.form-group input:focus + .form-label,
.form-group input:not(:placeholder-shown) + .form-label {
  top: -1.2em;
  font-size: 0.8rem;
  opacity: 1;
}

.form-group input:focus + .form-label::before,
.form-group input:focus + .form-label::after {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: var(--bg-color);
}

.form-group input:focus + .form-label::before {
  color: var(--secondary-color);
  animation: glitch-anim var(--glitch-anim-duration)
    cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}

.form-group input:focus + .form-label::after {
  color: var(--primary-color);
  animation: glitch-anim var(--glitch-anim-duration)
    cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both;
}

@keyframes glitch-anim {
  0% {
    transform: translate(0);
    clip-path: inset(0 0 0 0);
  }
  20% {
    transform: translate(-5px, 3px);
    clip-path: inset(50% 0 20% 0);
  }
  40% {
    transform: translate(3px, -2px);
    clip-path: inset(20% 0 60% 0);
  }
  60% {
    transform: translate(-4px, 2px);
    clip-path: inset(80% 0 5% 0);
  }
  80% {
    transform: translate(4px, -3px);
    clip-path: inset(30% 0 45% 0);
  }
  100% {
    transform: translate(0);
    clip-path: inset(0 0 0 0);
  }
}

/* --- Button Styling --- */
.submit-btn {
  width: 100%;
  padding: 0.8em;
  margin-top: 1rem;
  background-color: transparent;
  border: 2px solid var(--primary-color);
  color: var(--primary-color);
  font-family: inherit;
  font-size: 1rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  cursor: pointer;
  position: relative;
  transition: all 0.3s;
  overflow: hidden;
}

.submit-btn:hover,
.submit-btn:focus {
  background-color: var(--primary-color);
  color: var(--bg-color);
  box-shadow: 0 0 25px var(--primary-color);
  outline: none;
}

.submit-btn:active {
  transform: scale(0.97);
}

/* --- Glitch Effect for Button --- */
.submit-btn .btn-text {
  position: relative;
  z-index: 1;
  transition: opacity 0.2s ease;
}

.submit-btn:hover .btn-text {
  opacity: 0;
}

.submit-btn::before,
.submit-btn::after {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  background-color: var(--primary-color);
  transition: opacity 0.2s ease;
}

.submit-btn:hover::before,
.submit-btn:focus::before {
  opacity: 1;
  color: var(--secondary-color);
  animation: glitch-anim var(--glitch-anim-duration)
    cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}

.submit-btn:hover::after,
.submit-btn:focus::after {
  opacity: 1;
  color: var(--bg-color);
  animation: glitch-anim var(--glitch-anim-duration)
    cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both;
}

@media (prefers-reduced-motion: reduce) {

    opacity: 0;
  }

  .submit-btn:hover .btn-text {
    opacity: 1;
  }

</style>

<div class="glitch-form-wrapper">
  <form method="post" action="/inicio" class="glitch-card">
    <div class="card-header">
      <div class="card-title">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
          <path
            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"
          ></path>
          <path
            d="M12 11.5a3 3 0 0 0 -3 2.824v1.176a3 3 0 0 0 6 0v-1.176a3 3 0 0 0 -3 -2.824z"
          ></path>
        </svg>
        <span>¡Bienvenido a tienda TechnoPlanet Administrador!</span>
      </div>

      <div class="card-dots"><span></span><span></span><span></span></div>
    </div>

    <div class="card-body">
      <div class="form-group">
        <input
          type="text"
          id="usuario"
          name="usuario"
          required=""
          placeholder=""
        />
        <label for="username" class="form-label" data-text="USUARIO">Usuario</label>
    </div>

    <div class="form-group">
        <input
          type="password"
          id="password"
          name="password"
          required=""
          placeholder=""/>
        <label for="password" class="form-label" data-text="CONTRASEÑA"
          >Contraseña</label
        >
      </div>

      <button data-text="Entrar" type="submit" class="submit-btn">
        <span class="btn-text">Entrar</span>
      </button>
    </div>
  </form>
</div>
