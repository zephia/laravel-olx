<?php
/*
 * This file is part of the Laravel OLX Feed Generator package.
 *
 * (c) Zephia <info@zephia.com.ar>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zephia\LaravelOLX\Provider;

use Illuminate\Support\ServiceProvider;
use JMS\Serializer\SerializerBuilder;
use Zephia\OLXFeed\Document;

/**
 * Class LaravelOLXServiceProvider
 *
 * @package Zephia\LaravelOLX\Provider
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class LaravelOLXServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the Olx service.
     *
     */
    public function boot()
    {
        $this->app->bind('olx', function () {
            $serializer = SerializerBuilder::create()
                ->addMetadataDir(
                    base_path('vendor/zephia/olx/resources/config/serializer')
                )->build();
            return new Document($serializer);
        });
    }

    /**
     * Register the Olx service.
     */
    public function register()
    {
    }
}
