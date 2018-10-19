<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * 
 */
trait ExceptionTrait
{
    public function apiException($request, $exception){
            if ($exception instanceof ModelNotFoundException) {
                return response([
                    'errors' => "Product Not Found"
                ],404);
            }
            if ($exception instanceof NotFoundHttpException) {
                return response([
                    'errors' => "Incorret route"
                ],404);
            }
            return parent::render($request, $exception);
    }
}
