<form action="" id="serviceRequest">
    <div class="row text-white">
        <div class="col-12">
            <label for="">Área</label>
            <select name="field_id" id="" class="form-control">
                <option value="" selected disabled>Elige una opcion...</option>
                @foreach ($fields as $field)
                    <option value="{{ $field->id }}"
                        @isset($serviceRequest)
                        {{ $serviceRequest->field_id == $field->id ? 'selected' : '' }}
                    @endisset>
                        {{ $field->field }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row text-white">
        <div class="col-12">
            <label for="">Email</label>
            <input type="email" name="mail" class="form-control">
        </div>
    </div>
    <div class="row text-white">
        <div class="col-12">
            <label for="">Descripción</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
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
</form>