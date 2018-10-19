<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render(){
        return ['error' => 'Product not belong to user'];
    }
}
