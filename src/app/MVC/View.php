<?php

declare(strict_types=1);

namespace App\MVC;

class View
{
    public function __construct(protected string $view, protected array $params = [])
    {
    }

    public function render(): string
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }

        ob_start();

        include $viewPath;

        return (string) ob_get_clean();
    }
}
