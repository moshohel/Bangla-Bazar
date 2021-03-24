<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

use Illuminate\Support\Arr;
use config\auth;
use Exception;
use Illuminate\Auth\AuthenticationException;
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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        $class = get_class($exception);

        switch ($class) {
        case 'Illuminate\Auth\AuthenticationException':
        $guard = Arr::get($exception->guards(), 0);

        switch ($guard) {
            case 'admin':
            $login = "admin.login";
            break;

            case 'web':
            $login = "login";
            break;

            default:
            $login = "login";
            break;
        }

        return redirect()->route($login);
        break;
        }

    return parent::render($request, $exception);
    }
}
