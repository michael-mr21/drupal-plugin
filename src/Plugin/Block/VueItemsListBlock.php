<?php

namespace Drupal\vue_items_list\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'VueItemsListBlock' block.
 *
 * @Block(
 *   id = "vue_items_list_block",
 *   admin_label = @Translation("Vue Items List Block"),
 * )
 */
class VueItemsListBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      '#markup' => '<div id="vue-items-list"></div>',
      '#attached' => [
        'library' => [
          'vue_items_list/vue_items_list',
        ],
      ],
    ];

    // Debugging information
    $build['#markup'] .= '<!-- Attached Libraries: ' . json_encode($build['#attached']) . ' -->';

    return $build;
  }

}
