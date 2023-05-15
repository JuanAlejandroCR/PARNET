<form action="" id="news">
    <div class="row text-white">
        <div class="col-12 col-md-6">
            <label for="">Titulo</label>
            <input type="text" name="title" class="form-control" value="{{ optional($news ?? null)->title }}">
        </div>
        <div class="col-12 col-md-6">
            <label for="">Descripcion</label>
            <input type="text" name="description" class="form-control" value="{{ optional($news ?? null)->description }}">
        </div>
    </div>
</form>
