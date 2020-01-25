<?php
namespace jaguarjack\filesystem\cloud;


class Service extends \think\Service
{
    public function boot()
    {
        $this->app->bind('filesystem', Filesystem::class);
    }
}