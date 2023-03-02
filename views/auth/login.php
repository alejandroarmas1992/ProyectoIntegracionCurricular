<main class="auth">
    <h2 class="auth_heading"><?php echo $titulo; ?></h2>
    <p class="aut_text">Inicio sesión en DebWebCamp</p>


    <form class="formulario">
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
        <input type="submit" class="formulario__submit" value="Iniciar Sesión" />
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>

</main>