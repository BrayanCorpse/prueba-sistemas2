<form action="">
<div class="uk-card b-card uk-card-body uk-width-1-1@m">
    <div class="uk-child-width-expand@s" uk-grid>
        
        <div>
            <div class="uk-card uk-card-body">

                <label class="uk-form-label b-label" for="form-stacked-text">Correo electrónico *</label>
                <div class="uk-margin">
                    <div class="uk-form-controls">
                        <input class="uk-input b-input" id="form-stacked-text" type="text" placeholder="correo@ejemplo.com">
                    </div>
                </div>

                <label class="uk-form-label b-label" for="form-stacked-text">Genero *</label>
                <div class="uk-margin b-form-controls">

                    <input type="radio" value="Mujer" name="genero" id="Mujer" class="uk-button b-visible" checked>
                    <label class="b-label" for="Mujer">Mujer</label>

                    <input type="radio" value="Hombre" name="genero" id="Hombre" class="uk-button b-visible">
                    <label class="b-label" for="Hombre">Hombre</label> 

                    <input type="radio" value="Otro" name="genero" id="Otro" class="uk-button b-visible">
                    <label class="b-label" for="Otro">Otro</label> 

                </div>

                <label class="uk-form-label b-label" for="form-stacked-text">Fecha de nacimiento *</label>
                <div class="uk-margin">
                    <select class="uk-select b-select">
                        <option selected>Selecciona fecha</option>
                    </select>
                </div>  

            </div>
        </div>

        <div class="uk-margin-remove-top">
            <div class="uk-card uk-card-body">

                <label class="uk-form-label b-label" for="form-stacked-text">Situación sentimental *</label>
                <div class="uk-margin b-form-controlstwo">

                    <input type="radio" value="Soltero" name="situacion" id="Soltero" class="uk-button b-visible" checked>
                    <label class="b-label" for="Soltero">Soltero</label>

                    <input type="radio" value="En pareja" name="situacion" id="En pareja" class="uk-button b-visible">
                    <label class="b-label" for="En pareja">En pareja</label> 

                    <input type="radio" value="Es complicado" name="situacion" id="Es complicado" class="uk-button b-visible">
                    <label class="b-label" for="Es complicado">Es complicado</label> 

                </div>

                <label class="uk-form-label b-label" for="form-stacked-text">Campos Obligatorios *</label>
                <div class="uk-margin">
                    <div class="uk-form-controls">
                        <label class="b-label-sm"><input class="uk-radio b-radio" type="radio" name="radio1"> Deseo recibir el contenido más sensual</label>
                        <br>
                        <label class="b-label-md"><input class="uk-radio b-radio" type="radio" name="radio2"> Acepto <u class="b-underline">Términos y Condiciones</u></label>
                    </div>
                </div>

                <div class=" uk-margin-medium-top uk-text-center">
                    <button class="uk-button b-button-bk uk-width-1-1">Crear cuenta</button>
                </div>

            </div>
        </div>
        

    </div>
</div>
</form>