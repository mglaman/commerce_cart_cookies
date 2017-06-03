<?php

namespace Drupal\commerce_cart_cookies;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Symfony\Component\DependencyInjection\Reference;

class CommerceCartCookiesServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    if ($container->hasDefinition('commerce_cart.cart_session')) {
      $container->getDefinition('commerce_cart.cart_session')
        ->setClass(CookieCartSession::class)
        ->setArguments([new Reference('request_stack')]);
    }
  }

}
