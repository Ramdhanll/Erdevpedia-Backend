<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_id','photo','is_default'
    ];

    protected $hidden = [
    
    ];

    public function product() {
        return $this->belongsTo(Product::class,'product_id','id'); // ProductGallery kepunyaan Product::class | parameter(kelas,fieldYangBerelasinya,FieldSumberRelasinya)
        // return $this->belongsTo(Product::class); // Cara ini juga bisa
    }

    // ACCESSORS
    /**
     * Accesors merupakan sebuah fungsi
     * yang mengeluarkan output yang kita inginkan
     * misalkan contoh dibawah, ketika mau mengeluarkan photo
     * otomatis akan ditambahkan 'storage/value'
     */
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
