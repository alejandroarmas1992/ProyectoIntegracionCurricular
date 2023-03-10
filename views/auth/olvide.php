<main class="auth">
    <h2 class="auth_heading"><?php echo $titulo; ?></h2>
    <p class="aut_text">Recupera tu acceso a DevWebCamp</p>


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
       
        <input type="submit" class="formulario__submit" value="Enviar Instrucciones" />
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
    </div>

</main>