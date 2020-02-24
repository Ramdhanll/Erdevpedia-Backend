<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'prducts_id','photo','is_default'
    ];

    protected $hidden = [
    
    ];

    public function product() {
        return $this->belongsTo(Product::class,'products_id','id'); // ProductGallery kepunyaan Product::class | parameter(kelas,fieldYangBerelasinya,FieldSumberRelasinya)
    }

    // ACCESSORS
    public function getPhotoAttribute($value) {
        return url('storage/' . $value);
    }

    /**
     * Untuk menjalankan file storage harus melakukan
     * "php artisan storage:link"
     * Proses ini melakukan koneksi antaran storage dengan folder public
     * agar dapat diakses
     */

}
