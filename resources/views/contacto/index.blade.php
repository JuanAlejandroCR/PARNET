<form id="formulario">
    <div class="row">
        <div class="col-xs-2">
            <label for="empresa" style="color: white">Empresa:</label>
        </div>
        <div class="col-xs-8">
            <input class="form-control" type="text" name="company" id="company" placeholder="Empresa..."
                required="required">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-2">
            <label for="nombre" style="color: white">Nombre:</label>
        </div>
        <div class="col-xs-8">
            <input class="form-control" type="text" name="name" id="name" placeholder="Nombre..."
                required="required">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-2">
            <label for="telefono" style="color: white">Teléfono:</label>
        </div>
        <div class="col-xs-8">
            <input class="form-control" type="tel" name="phone" id="phone" pattern="[0-9]{10}" maxlength="10"
                placeholder="Teléfono..." required="required">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-2">
            <label for="correo" style="color: white">Correo:</label>
        </div>
        <div class="col-xs-8">
            <input class="form-control" type="email" name="mail" id="mail" placeholder="E-mail..."
                required="required">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-2">
            <label for="mensaje" style="color: white">Mensaje:</label>
        </div>
        <div class="col-xs-8">
            <textarea class="form-control" name="message" id="message" cols="50" rows="4" placeholder="Mensaje..."></textarea>
        </div>
    </div>
    <div class="col-md-8 offset-md-2">
        <div class="form-check">
            <div class="d-flex justify-content-center">
                <img class="m-3" src="{{ captcha_src() }}">
            </div>

            <input type="text" class="form-control bg-light rounded-5" name="captcha">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2">

        </div>
        <div class="col-xs-8">
            <br>
            <button type="button" class="btn btn-info pull-right" id="btn_correo"
                style="color: white; background-color: #0a83bf" onclick="sendMail();">Enviar Correo</button>
        </div>
    </div>
</form>

<script src="{{ asset('js/mail/index.js') }}" defer></script>
