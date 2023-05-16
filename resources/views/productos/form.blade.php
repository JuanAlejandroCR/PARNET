<form action="" id="products">
    <div class="row text-white">
        <div class="col-12 col-md-6">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ optional($products ?? null)->name }}">
        </div>

        <div class="col-12 col-md-6">
            <label for="">Descripción</label>
            <input type="text" name="description" class="form-control"
                value="{{ optional($products ?? null)->description }}">
        </div>
    </div>
    <div class="row text-white">
        <div class="col-12 col-md-6">
            <label for="">Imagen</label>
            @if (request()->routeIs('productos.edit'))
                <img src="{{ asset('storage/images/productos/' . $products->image) }}" width="50%" height="50%" />
            @endif
            <input type="file" name="image" id="image" class="form-control"
                value="{{ optional($products ?? null)->image }}">
        </div>

        <div class="col-12 col-md-6">
            <label for="">Precio</label>
            <input class="form-control" type="number" name="price" value="{{ optional($products ?? null)->price }}">
        </div>
    </div>

    <div class="row text-white">
        <div class="col-12 col-md-6">
            <label for="">Cantidad</label>
            <input class="form-control" type="number" name="stock" id=""
                value="{{ optional($products ?? null)->stock }}">
        </div>

        <div class="col-12 col-md-6">
            <label for="">Ficha tecnica</label>
            <textarea name="data_sheet" class="form-control" id="" cols="30" row text-whites="10">{{ optional($products ?? null)->data_sheet }}</textarea>
        </div>
    </div>
</form>
