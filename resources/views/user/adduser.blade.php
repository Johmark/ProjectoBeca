<div class="container">
    <form action="{{url(/user)}}" method="POST" enctype="multipart/form-data">
    {{csrf_fild}}
        <div class="block">
            <label for="nombre">{{'Codigo'}}</label>
            <input type="text" name="nombre" id="nombre" placeholder="Canet">
        </div>
        <div class="block">
            <label for="nombre">{{'Nombre'}}</label>
            <input type="text" name="nombre" id="nombre" placeholder="El nombre Caballerito">
        </div>
        <div class="block">
            <label for="contraseña">{{'Contraseña'}}</label>
            <input type="text" name="contraseña" id="contraseña" placeholder="La contraseña Caballerito">
        </div>
        <div class="block">
            <label for="departamento">{{'Departamento'}}</label>
            <input type="text" name="departamento" id="departamento" placeholder="El departamento Caballerito">
        </div>
        <div class="block">
            <label for="escuela">{{'Escuela'}}</label>
            <input type="text" name="escuela" id="escuela" placeholder="La escuela Caballerito">
        </div>
    </form>
</div>