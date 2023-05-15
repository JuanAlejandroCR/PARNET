<form action="" id="fields">
    <div class="row text-white">
        <div class="col-12">
            <label for="">Área</label>
            <input type="text" name="field" class="form-control" value="{{ optional($field ?? null)->field }}">
        </div>
    </div>
</form>
