<?php

namespace Drupal\commerce_cart_cookies;

use Drupal\commerce_cart\CartSessionInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Uses cookies to track active carts.
 *
 * We inject the request stack to handle cookies within the Request object,
 * and not directly.
 */
class CookieCartSession implements CartSessionInterface {

  /**
   * The current request.
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected $request;

  /**
   * Creates a new CookieCartSession object.
   *
   * @param \Symfony\Component\HttpFoundation\RequestStack $request_stack
   *   The request stack.
   */
  public function __construct(RequestStack $request_stack) {
    $this->request = $request_stack->getCurrentRequest();
  }

  /**
   * {@inheritdoc}
   */
  public function getCartIds($type = self::ACTIVE) {
    // TODO: Implement getCartIds() method.
  }

  /**
   * {@inheritdoc}
   */
  public function addCartId($cart_id, $type = self::ACTIVE) {
  }

  /**
   * {@inheritdoc}
   */
  public function hasCartId($cart_id, $type = self::ACTIVE) {
    // TODO: Implement hasCartId() method.
  }

  /**
   * {@inheritdoc}
   */
  public function deleteCartId($cart_id, $type = self::ACTIVE) {
    // TODO: Implement hasCartId() method.
  }

}
