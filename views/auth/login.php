<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Iniciar sesion con tus datos</p>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email" class="email">
            Email: 
        </label>
        <input 
            type="email"
            id="email"
            placeholder="Tu email"
            name="email"
        
        /> 
    </div>

    <div class="campo">
        <label for="password">Password: </label>
        <input 
        type="password"
        id="password"
        placeholder="Tu password"
        name="passwordss"
        />

    </div>
    <input type="submit" class="boton" value="Iniciar Sesion">
</form>

<div class="acciones">
    <a href="/crear-cuenta"> ¿Aún no tiene una cuenta ? - Crear una </a>
    <a href="/olvide"> Olvide mi contraseña </a>


</div>
