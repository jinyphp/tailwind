<?php

namespace Jiny\UI\Tailwind;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;

class JinyUITailwindServiceProvider extends ServiceProvider
{
    private $package = "jiny-ui-tailwind";
    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);

        // 컴포넌트 선언
        //Blade::component($this->package.'::components.alert.primary', 'alert-primary');

    }

    public function register()
    {

    }

}
