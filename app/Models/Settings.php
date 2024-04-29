<?php
namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Settings extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function getSiteData (){
        return Settings::first();

    }
}

