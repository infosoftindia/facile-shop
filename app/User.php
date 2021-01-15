<?php

namespace App;

use Facile\Auth\HasApiTokens;
use Facile\Database\Goku\Model;

class User extends Model
{
    use HasApiTokens;
}