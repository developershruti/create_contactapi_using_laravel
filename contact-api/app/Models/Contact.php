<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Contact extends Model
{
    use HasFactory;
    public $fillable = ['fname', 'phone', 'select_service', 'select_product', 'email', 'message'];
}