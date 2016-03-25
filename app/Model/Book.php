<?php
/**
 * @author: Ali Kenan Yağmur
 * Date: 25.03.2016
 * Time: 17:23
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    protected $fillable = ['name', 'author'];
}