<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'contact', 'email'];
    
    public function rules(){
        return [              
            'name' => 'required|min:5',
            'contact' => "required|min:9|max:9|unique:contacts,contact,$this->id",
            'email' => "required|email|unique:contacts,email,$this->id"
        ];
    }
    
    public function feedback(){
        return [

        ];
    }
}
