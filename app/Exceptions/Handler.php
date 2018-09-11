<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
		//check if exception is an instance of ModelNotFoundException.
        //or NotFoundHttpException
        if ($e instanceof ModelNotFoundException or $e instanceof NotFoundHttpException) {
            // ajax 404 json feedback
            if ($request->ajax()) {
                return response()->json(['error' => 'Not Found'], 404);
            }

            // normal 404 view page feedback
            return response()->view('front.404', [], 404);
        }
		
		if ($this->isHttpException($e)) {
			return response()->view('front.404', [], 404);
		}
		
        return parent::render($request, $e);
    }
}
