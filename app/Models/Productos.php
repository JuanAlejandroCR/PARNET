<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Productos extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['available'];

    public function setFile(UploadedFile $image)
    {
        if ($this->attributes["image"] != null) {
            Storage::disk("public")->delete("storage/images/" . $this->attributes["image"]);
        }
        $filename = $image->hashName();
        $image->storeAs("images/productos", $filename, "public");
        $this->attributes["image"] = $filename;
        $this->save();
    }

    public function getAvailableAttribute() {
        return $this->stock > 0 ? 'Disponible' : 'Agotado';
    }
}
