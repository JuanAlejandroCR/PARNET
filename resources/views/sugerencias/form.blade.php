<form action="" id="suggestions">
    <div class="row text-white">
        <div class="col-12">
            <label for="">Nombre:</label>
            <input type="text" name="name" class="form-control" value="{{ optional($suggestion ?? null)->name }}">
        </div>
    </div>
    <div class="row text-white">
        <div class="col-12">
            <label for="">Sugerencia</label>
            <textarea name="suggestion" class="form-control" id="" cols="30" rows="10">{{ optional($suggestion ?? null)->suggestion }}</textarea>
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
