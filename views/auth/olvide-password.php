<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuación</p>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input 
        type="email"
        id="email"
        name="email"
        placeholder="Tu Email"
        
        />
    </div>

    <input type="submit" class="boton" value="Enviar Intrucciones">

</form>


<div class="acciones">
    <a href="/"> ¿Ya tienes una cuenta ? - Inicia Sesión </a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta? Crea Una</a>
</div>