## Vue Items List Module

This module displays a list of items using Vue.js and TypeScript.

### Installation Instructions:
1. Place the `vue_items_list` directory inside `modules/custom/`.
2. Enable the module via Drupal admin or Drush command:
  `drush en vue_items_list -y`
3. Go to 'Block layout' and place the 'Vue Items List Block' in your desired region.
4. The Vue.js component should now display a list of items fetched from the API: `https://jsonplaceholder.typicode.com/posts`.
