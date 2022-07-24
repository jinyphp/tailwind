<?php

namespace Jiny\UI\Tailwind;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;

class JinyUITailwindServiceProvider extends ServiceProvider
{
    private $vendor="jiny";
    private $package = "ui-tailwind";

    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // 패키지 데이터베이스 마이그레이션
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // 뷰 리소스
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->$vendor."-".$this->package);
        
        // 리소스배포
        // php artisan vendor:publish
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/'.$this->$vendor."/".$this->package),
        ]);


        

        // $this->loadTranslationsFrom(__DIR__.'/../lang', 'ui-tailwind');
        /*
        $this->publishes([
            __DIR__.'/../config/jiny-tailwind.php' => config_path('jiny-tailwind.php'),
        ]);
        */

        // 컴포넌트 선언
        //Blade::component($this->package.'::components.alert.primary', 'alert-primary');

    }

    public function register()
    {

    }

}
