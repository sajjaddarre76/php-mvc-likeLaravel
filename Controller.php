<?php


namespace app\core;


use app\core\middlewares\BaseMiddleware;

class Controller
{
    protected array $middlewares = [];
    public string $layout = 'main';
    public string $action = '';
    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @param array $middlewares
     */
    public function setMiddlewares(array $middlewares): void
    {
        $this->middlewares = $middlewares;
    }

    public function getMiddlewares():array
    {
       return $this->middlewares;
    }
}