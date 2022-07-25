<?php

namespace Jiny\UI\Tailwind;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;

class JinyUITailwindServiceProvider extends ServiceProvider
{
    private $vendor="jiny";
    private $package = "ui_tailwind";

    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // 패키지 데이터베이스 마이그레이션
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // 뷰 리소스
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->vendor."_".$this->package);

        // 리소스배포
        // php artisan vendor:publish
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/'.$this->vendor."/".$this->package),
        ]);


        // 컴포넌트 선언
        $this->avatars();
        $this->button(); // 버튼
        $this->badge();
        $this->table(); // 테이블

    }

    public function register()
    {

    }

    private function avatars()
    {
        Blade::component($this->vendor."_".$this->package.'::components.avatars.avatar', 'avatar');
    }

    private function button()
    {
        Blade::component($this->vendor."_".$this->package.'::components.buttons.button', 'button');
        Blade::component($this->vendor."_".$this->package.'::components.buttons.button-light', 'button-light');
        Blade::component($this->vendor."_".$this->package.'::components.buttons.button-outline', 'button-outline');
    }

    private function badge()
    {
        Blade::component($this->vendor."_".$this->package.'::components.badges.badge', 'badge');
        Blade::component($this->vendor."_".$this->package.'::components.badges.badge-pill', 'badge-pill');
    }

    private function table()
    {
        Blade::component($this->vendor."_".$this->package.'::components.tables.table', 'table');
        Blade::component($this->vendor."_".$this->package.'::components.tables.tr', 'tr');
        Blade::component($this->vendor."_".$this->package.'::components.tables.th', 'th');
        Blade::component($this->vendor."_".$this->package.'::components.tables.th-center', 'th-center');
        Blade::component($this->vendor."_".$this->package.'::components.tables.td', 'td');
        Blade::component($this->vendor."_".$this->package.'::components.tables.td-center', 'td-center');
    }

}
