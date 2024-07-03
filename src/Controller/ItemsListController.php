<?php

namespace Drupal\vue_items_list\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ItemsListController.
 *
 * @package Drupal\vue_items_list\Controller
 */
class ItemsListController extends ControllerBase {

  /**
   * View.
   *
   * @return array
   *   Return render array.
   */
  public function view() {
    return [
      '#markup' => '<div id="vue-items-list"></div>',
      '#attached' => [
        'library' => [
          'vue_items_list/vue_items_list',
        ],
      ],
    ];
  }

}
