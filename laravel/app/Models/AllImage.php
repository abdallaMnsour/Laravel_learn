<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllImage extends Model
{
    use HasFactory;

    public function imageable()
    {
        // بترجع الصوره دي تابعه لاي موديل
        // لا تحتاج الي ان تقوم بكتابه كل هذه القيم اذا كان اسم الفونكشن سليم
        return $this->morphTo('imageable', 'imageable_type', 'imageable_id');
    }


    public function by_many_images()
    {
        return $this->morphedByMany(User::class, 'imageable', 'all_images', 'id');
    }
}
