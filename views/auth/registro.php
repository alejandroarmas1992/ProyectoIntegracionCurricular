<main class="auth">
    <h2 class="auth_heading"><?php echo $titulo; ?></h2>
    <p class="aut_text">Regístrate en DebWebCamp</p>


    <form class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input
                type="text"
                class="formulario_input"
                placeholder="Tu Nombre"
                id="nombre"
                name="nombre"
            >
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input
                type="text"
                class="formulario_input"
                placeholder="Tu Apellido"
                id="apellido"
                name="apellido"
            >
        </div>
        <div class="formulario__campo">
            <label for="mail" class="formulario__label">Email</label>
            <input
                type="email"
                class="formulario_input"
                placeholder="Tu email"
                id="email"
                name="email"
            >
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input
                type="password"
                class="formulario_input"
                placeholder="Tu Password"
                id="password"
                name="password"
            >
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Password</label>
            <input
                type="password"
                class="formulario_input"
                placeholder="Tu Password"
                id="password2"
                name="password2"
            >
        </div>
        <input type="submit" class="formulario__submit" value="Crear Cuenta" />
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>

</main>