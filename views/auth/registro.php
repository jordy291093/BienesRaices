<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form action="/registro" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input 
            type="text" 
            class="formulario__input"
            placeholder="Nombre(s)"
            id="nombre"
            name="nombre"
            value="<?php echo $usuario->nombre; ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellidos</label>
            <input 
            type="text" 
            class="formulario__input"
            placeholder="Apellidos"
            id="apellido"
            name="apellido"
            value="<?php echo $usuario->apellido; ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Correo Eléctronico</label>
            <input 
            type="email" 
            class="formulario__input"
            placeholder="Correo Eléctronico"
            id="email"
            name="email"
            value="<?php echo $usuario->email; ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="nacimiento" class="formulario__label">Fecha de Nacimiento</label>
            <input 
            type="date" 
            class="formulario__input"
            id="nacimiento"
            name="nacimiento"
            value="<?php echo $usuario->nacimiento; ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input 
            type="password" 
            class="formulario__input"
            placeholder="Password"
            id="password"
            name="password"
            >
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Contraseña</label>
            <input 
            type="password" 
            class="formulario__input"
            placeholder="Repetir Password"
            id="password2"
            name="password2"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlace">Recuperar Contraseña</a>
    </div>
</main>