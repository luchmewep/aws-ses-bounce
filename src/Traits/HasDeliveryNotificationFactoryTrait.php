<?php

namespace Luchavez\AwsSesBounce\Traits;

use Luchavez\AwsSesBounce\Database\Factories\DeliveryNotificationFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Trait HasDeliveryNotificationFactoryTrait
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
trait HasDeliveryNotificationFactoryTrait
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
     */
    protected static function newFactory(): Factory
    {
        return DeliveryNotificationFactory::new();
    }
}
