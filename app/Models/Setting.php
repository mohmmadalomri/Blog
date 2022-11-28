<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use function PHPUnit\Framework\isNull;

class Setting extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title', 'contant', 'address'];
    protected $fillable = [
        'id', 'logo', 'favicon', 'facebook',
        'instgram', 'phone', 'email'
    ];

    public static function CheckSetting()
    {
        $setting = self::all();
        if (count($setting) < 1) {
            $data = [
                'id' => 1,
            ];
            foreach (config('app.languge') as $key => $value) {
                $data[$key]['title'] = $value;
            }
            Self::create($data);
        }
        return self::first();
    }
}
