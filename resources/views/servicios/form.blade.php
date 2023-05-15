<form action="" id="services">
    <div class="row text-white">
        <div class="col-12">
            <label for="">Area</label>
            <select name="field_id" id="" class="form-control">
                <option value="" selected disabled>Elige una opcion...</option>
                @foreach ($fields as $field)
                    <option value="{{ $field->id }}"
                        @isset($service)
                        {{ $service->field_id == $field->id ? 'selected' : '' }}
                    @endisset>
                        {{ $field->field }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row text-white">
        <div class="col-12">
            <label for="">Servicio</label>
            <input type="text" class="form-control" name="service" value="{{ optional($service ?? null)->service }}">
        </div>
    </div>
</form>
