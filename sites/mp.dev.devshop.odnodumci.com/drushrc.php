<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'YuPHChSiKi';
$options['db_name'] = 'mpdevdevshopodno';
$options['db_user'] = 'mpdevdevshopodno';
$options['profile_installed'] = true;
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '8.4.2-dev',
      'description' => 'This platform is running Drupal 8.4.2-dev',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'Standard',
      'info' => 
      array (
        'name' => 'Standard',
        'type' => 'profile',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => 'VERSION',
        'core' => '8.x',
        'dependencies' => 
        array (
          0 => 'node',
          1 => 'history',
          2 => 'block',
          3 => 'breakpoint',
          4 => 'ckeditor',
          5 => 'color',
          6 => 'config',
          7 => 'comment',
          8 => 'contextual',
          9 => 'contact',
          10 => 'menu_link_content',
          11 => 'datetime',
          12 => 'block_content',
          13 => 'quickedit',
          14 => 'editor',
          15 => 'help',
          16 => 'image',
          17 => 'menu_ui',
          18 => 'options',
          19 => 'path',
          20 => 'page_cache',
          21 => 'dynamic_page_cache',
          22 => 'taxonomy',
          23 => 'dblog',
          24 => 'search',
          25 => 'shortcut',
          26 => 'toolbar',
          27 => 'field_ui',
          28 => 'file',
          29 => 'rdf',
          30 => 'views',
          31 => 'views_ui',
          32 => 'tour',
          33 => 'automated_cron',
        ),
        'themes' => 
        array (
          0 => 'bartik',
          1 => 'seven',
        ),
        'languages' => 
        array (
          0 => 'en',
        ),
      ),
      'filename' => '/var/aegir/projects/mp/dev/core/profiles/standard/standard.info.yml',
      'path' => '/var/aegir/projects/mp/dev/core/profiles/standard',
      'version' => '8.4.2-dev',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'action' => 
    array (
      'name' => 'Actions',
      'type' => 'module',
      'description' => 'Perform tasks on specific events triggered within the system.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'entity.action.collection',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/action/action.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'address' => 
    array (
      'name' => 'Address',
      'type' => 'module',
      'description' => 'Provides functionality for handling postal addresses.',
      'package' => 'Field types',
      'config' => 'entity.address_format.collection',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'version' => '8.x-1.2',
      'core' => '8.x',
      'project' => 'address',
      'datestamp' => 1505896147,
      'mtime' => 1505888948,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/address/address.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'admin_toolbar' => 
    array (
      'name' => 'Admin Toolbar',
      'description' => 'Provides a drop-down menu interface to the core Drupal Toolbar.',
      'package' => 'Administration',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'toolbar',
      ),
      'version' => '8.x-1.15',
      'core' => '8.x',
      'project' => 'admin_toolbar',
      'datestamp' => 1464017773,
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/admin_toolbar/admin_toolbar.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'admin_toolbar_tools' => 
    array (
      'name' => 'Admin Toolbar Extra Tools',
      'description' => 'Adds additional functionality to the Admin Toolbar.',
      'package' => 'Administration',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'admin_toolbar',
      ),
      'version' => '8.x-1.15',
      'core' => '8.x',
      'project' => 'admin_toolbar',
      'datestamp' => 1464017773,
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'aggregator' => 
    array (
      'name' => 'Aggregator',
      'type' => 'module',
      'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds) from external sources.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'aggregator.admin_settings',
      'dependencies' => 
      array (
        0 => 'file',
        1 => 'options',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/aggregator/aggregator.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'automated_cron' => 
    array (
      'name' => 'Automated Cron',
      'type' => 'module',
      'description' => 'Provides an automated way to run cron jobs, by executing them at the end of a server response.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'system.cron_settings',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/automated_cron/automated_cron.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'ban' => 
    array (
      'name' => 'Ban',
      'type' => 'module',
      'description' => 'Enables banning of IP addresses.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'ban.admin_page',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/ban/ban.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'basic_auth' => 
    array (
      'name' => 'HTTP Basic Authentication',
      'type' => 'module',
      'description' => 'Provides the HTTP Basic authentication provider',
      'package' => 'Web services',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'user',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/basic_auth/basic_auth.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'big_pipe' => 
    array (
      'name' => 'BigPipe',
      'type' => 'module',
      'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/big_pipe/big_pipe.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'block' => 
    array (
      'name' => 'Block',
      'type' => 'module',
      'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'block.admin_display',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/block/block.info.yml',
      'status' => 1,
      'schema_version' => '8003',
    ),
    'block_content' => 
    array (
      'name' => 'Custom Block',
      'type' => 'module',
      'description' => 'Allows the creation of custom blocks through the user interface.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'block',
        1 => 'text',
        2 => 'user',
      ),
      'configure' => 'entity.block_content.collection',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/block_content/block_content.info.yml',
      'status' => 1,
      'schema_version' => 8300,
    ),
    'block_place' => 
    array (
      'name' => 'Place Blocks',
      'type' => 'module',
      'description' => 'Allow administrators to place blocks from any Drupal page',
      'package' => 'Core (Experimental)',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'hidden' => true,
      'dependencies' => 
      array (
        0 => 'block',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/block_place/block_place.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'book' => 
    array (
      'name' => 'Book',
      'type' => 'module',
      'description' => 'Allows users to create and organize related content in an outline.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'node',
      ),
      'configure' => 'book.settings',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/book/book.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'breakpoint' => 
    array (
      'name' => 'Breakpoint',
      'type' => 'module',
      'description' => 'Manage breakpoints and breakpoint groups for responsive designs.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/breakpoint/breakpoint.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'ckeditor' => 
    array (
      'name' => 'CKEditor',
      'type' => 'module',
      'description' => 'WYSIWYG editing for rich text fields using CKEditor.',
      'package' => 'Core',
      'core' => '8.x',
      'version' => '8.4.2-dev',
      'dependencies' => 
      array (
        0 => 'editor',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/ckeditor/ckeditor.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'color' => 
    array (
      'name' => 'Color',
      'type' => 'module',
      'description' => 'Allows administrators to change the color scheme of compatible themes.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/color/color.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'comment' => 
    array (
      'name' => 'Comment',
      'type' => 'module',
      'description' => 'Allows users to comment on and discuss published content.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'text',
      ),
      'configure' => 'comment.admin',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/comment/comment.info.yml',
      'status' => 1,
      'schema_version' => 8400,
    ),
    'commerce' => 
    array (
      'name' => 'Commerce',
      'type' => 'module',
      'description' => 'Defines common functionality for all Commerce modules.',
      'package' => 'Commerce',
      'configure' => 'commerce.admin_commerce',
      'dependencies' => 
      array (
        0 => 'address',
        1 => 'entity:entity',
        2 => 'datetime',
        3 => 'inline_entity_form',
        4 => 'views',
        5 => 'system (>=8.4.0)',
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/commerce.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_cart' => 
    array (
      'name' => 'Commerce Cart',
      'type' => 'module',
      'description' => 'Implements the shopping cart system and add to cart features.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce',
        1 => 'commerce:commerce_order',
        2 => 'commerce:commerce_price',
        3 => 'commerce:commerce_product',
        4 => 'views',
      ),
      'config_devel' => 
      array (
        'install' => 
        array (
          0 => 'core.entity_form_mode.commerce_order_item.add_to_cart',
          1 => 'views.view.commerce_cart_form',
          2 => 'views.view.commerce_carts',
        ),
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/cart/commerce_cart.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_checkout' => 
    array (
      'name' => 'Commerce Checkout',
      'type' => 'module',
      'description' => 'Provides configurable checkout flows.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce',
        1 => 'commerce:commerce_order',
        2 => 'commerce:commerce_cart',
      ),
      'config_devel' => 
      array (
        'install' => 
        array (
          0 => 'commerce_checkout.commerce_checkout_flow.default',
          1 => 'core.entity_view_display.commerce_product_variation.default.summary',
          2 => 'core.entity_view_mode.commerce_product_variation.summary',
          3 => 'views.view.commerce_checkout_order_summary',
        ),
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/checkout/commerce_checkout.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_log' => 
    array (
      'name' => 'Commerce Log',
      'type' => 'module',
      'description' => 'Provides activity logs for Commerce entities.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce',
        1 => 'user',
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/log/commerce_log.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_order' => 
    array (
      'name' => 'Commerce Order',
      'type' => 'module',
      'description' => 'Defines the Order entity and associated features.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce',
        1 => 'commerce:commerce_price',
        2 => 'commerce:commerce_store',
        3 => 'entity_reference_revisions',
        4 => 'options',
        5 => 'profile',
        6 => 'state_machine',
      ),
      'config_devel' => 
      array (
        'install' => 
        array (
          0 => 'commerce_order.commerce_order_type.default',
          1 => 'core.entity_form_display.commerce_order.default.default',
          2 => 'core.entity_view_display.commerce_order.default.default',
          3 => 'core.entity_view_display.commerce_order.default.user',
          4 => 'core.entity_view_mode.commerce_order.user',
          5 => 'core.entity_form_display.profile.customer.default',
          6 => 'core.entity_view_display.profile.customer.default',
          7 => 'field.field.commerce_order.default.order_items',
          8 => 'field.storage.commerce_order.order_items',
          9 => 'views.view.commerce_orders',
          10 => 'views.view.commerce_order_item_table',
          11 => 'views.view.commerce_user_orders',
          12 => 'profile.type.customer',
          13 => 'system.action.commerce_delete_order_action',
        ),
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/order/commerce_order.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_payment' => 
    array (
      'name' => 'Commerce Payment',
      'type' => 'module',
      'description' => 'Provides payment functionality.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce:commerce_order',
        1 => 'entity_reference_revisions',
        2 => 'filter',
        3 => 'user',
      ),
      'config_devel' => 
      array (
        'install' => 
        array (
          0 => 'field.storage.user.commerce_remote_id',
          1 => 'field.field.user.user.commerce_remote_id.yml',
        ),
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/payment/commerce_payment.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_payment_example' => 
    array (
      'name' => 'Commerce Payment Example',
      'type' => 'module',
      'description' => 'Provides payment gateway examples.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce:commerce_payment',
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/payment_example/commerce_payment_example.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_price' => 
    array (
      'name' => 'Commerce Price',
      'type' => 'module',
      'description' => 'Defines the Currency entity.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce',
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/price/commerce_price.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_product' => 
    array (
      'name' => 'Commerce Product',
      'type' => 'module',
      'description' => 'Defines the Product entity and associated features.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce',
        1 => 'commerce:commerce_price',
        2 => 'commerce:commerce_store',
        3 => 'path',
        4 => 'text',
      ),
      'config_devel' => 
      array (
        'install' => 
        array (
          0 => 'commerce_product.commerce_product_type.default',
          1 => 'commerce_product.commerce_product_variation_type.default',
          2 => 'core.entity_form_display.commerce_product.default.default',
          3 => 'core.entity_view_display.commerce_product.default.default',
          4 => 'core.entity_form_display.commerce_product_variation.default.default',
          5 => 'field.storage.commerce_product.body',
          6 => 'field.storage.commerce_product.stores',
          7 => 'field.storage.commerce_product.variations',
          8 => 'field.field.commerce_product.default.body',
          9 => 'field.field.commerce_product.default.stores',
          10 => 'field.field.commerce_product.default.variations',
          11 => 'system.action.commerce_delete_product_action',
          12 => 'system.action.commerce_publish_product',
          13 => 'system.action.commerce_unpublish_product',
          14 => 'views.view.commerce_products',
        ),
        'optional' => 
        array (
          0 => 'commerce_order.commerce_order_item_type.default',
          1 => 'core.entity_form_display.commerce_order_item.product_variation.default',
          2 => 'core.entity_form_display.commerce_order_item.product_variation.add_to_cart',
          3 => 'core.entity_view_display.commerce_order_item.product_variation.default',
          4 => 'core.entity_view_display.commerce_product_variation.default.cart',
          5 => 'core.entity_view_mode.commerce_product_variation.cart',
        ),
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/product/commerce_product.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_promotion' => 
    array (
      'name' => 'Commerce Promotion',
      'type' => 'module',
      'description' => 'Provides a UI for managing promotions.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'options',
        1 => 'inline_entity_form',
        2 => 'commerce',
        3 => 'commerce:commerce_order',
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/promotion/commerce_promotion.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_store' => 
    array (
      'name' => 'Commerce Store',
      'type' => 'module',
      'description' => 'Defines the Store entity and associated features.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce',
        1 => 'commerce:commerce_price',
        2 => 'options',
      ),
      'config_devel' => 
      array (
        'install' => 
        array (
          0 => 'commerce_store.commerce_store_type.online',
          1 => 'commerce_store.settings',
          2 => 'core.entity_view_display.commerce_store.online.default',
          3 => 'views.view.commerce_stores',
          4 => 'system.action.commerce_delete_store_action',
        ),
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/store/commerce_store.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'commerce_tax' => 
    array (
      'name' => 'Commerce Tax',
      'type' => 'module',
      'description' => 'Provides tax functionality.',
      'package' => 'Commerce',
      'dependencies' => 
      array (
        0 => 'commerce:commerce_order',
      ),
      'version' => '8.x-2.1',
      'core' => '8.x',
      'project' => 'commerce',
      'datestamp' => 1509734300,
      'mtime' => 1509730700,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/commerce/modules/tax/commerce_tax.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'config' => 
    array (
      'name' => 'Configuration Manager',
      'type' => 'module',
      'description' => 'Allows administrators to manage configuration changes.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'config.sync',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/config/config.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'config_translation' => 
    array (
      'name' => 'Configuration Translation',
      'type' => 'module',
      'description' => 'Provides a translation interface for configuration.',
      'package' => 'Multilingual',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'config_translation.mapper_list',
      'dependencies' => 
      array (
        0 => 'locale',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/config_translation/config_translation.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'contact' => 
    array (
      'name' => 'Contact',
      'type' => 'module',
      'description' => 'Enables the use of both personal and site-wide contact forms.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'entity.contact_form.collection',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/contact/contact.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'content_moderation' => 
    array (
      'name' => 'Content Moderation',
      'type' => 'module',
      'description' => 'Provides moderation states for content',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'package' => 'Core (Experimental)',
      'configure' => 'entity.workflow.collection',
      'dependencies' => 
      array (
        0 => 'workflows',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/content_moderation/content_moderation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'content_translation' => 
    array (
      'name' => 'Content Translation',
      'type' => 'module',
      'description' => 'Allows users to translate content entities.',
      'dependencies' => 
      array (
        0 => 'language',
      ),
      'package' => 'Multilingual',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'language.content_settings_page',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/content_translation/content_translation.info.yml',
      'status' => 1,
      'schema_version' => 8400,
    ),
    'contextual' => 
    array (
      'name' => 'Contextual Links',
      'type' => 'module',
      'description' => 'Provides contextual links to perform actions related to elements on a page.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/contextual/contextual.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'currency' => 
    array (
      'name' => 'Currency',
      'description' => 'Provides currency metadata and exchange rates, and amount formatting.',
      'configure' => 'entity.currency.collection',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'plugin',
      ),
      'version' => '8.x-3.1',
      'core' => '8.x',
      'project' => 'currency',
      'datestamp' => 1455608847,
      'mtime' => 1455605248,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/currency/currency.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'currency_intl' => 
    array (
      'name' => 'Currency Intl',
      'description' => 'Formats amounts according the locales of users using the PHP Intl extension.',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'currency',
      ),
      'version' => '8.x-3.1',
      'core' => '8.x',
      'project' => 'currency',
      'datestamp' => 1455608847,
      'mtime' => 1455605248,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/currency/modules/currency_intl/currency_intl.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'currency_test' => 
    array (
      'name' => 'Currency tests',
      'description' => 'Supports Currency\'s automated tests.',
      'dependencies' => 
      array (
        0 => 'currency',
      ),
      'hidden' => true,
      'type' => 'module',
      'version' => '8.x-3.1',
      'core' => '8.x',
      'project' => 'currency',
      'datestamp' => 1455608847,
      'mtime' => 1455605248,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/currency/modules/currency_test/currency_test.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'custom_breadcrumb' => 
    array (
      'name' => 'Custom Breadcrumb',
      'description' => 'This is custom breadcrumb.',
      'package' => 'Weebpal',
      'type' => 'module',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/weebpal_module/custom_breadcrumb/custom_breadcrumb.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'custom_image_menu' => 
    array (
      'name' => 'Custom Image Menu',
      'description' => 'This menu add image field to menu items.',
      'package' => 'Weebpal',
      'type' => 'module',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/weebpal_module/custom_image_menu/custom_image_menu.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'datetime' => 
    array (
      'name' => 'Datetime',
      'type' => 'module',
      'description' => 'Defines datetime form elements and a datetime field type.',
      'package' => 'Field types',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'field',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/datetime/datetime.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'datetime_range' => 
    array (
      'name' => 'Datetime Range',
      'type' => 'module',
      'description' => 'Provides the ability to store end dates.',
      'package' => 'Field types',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'datetime',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/datetime_range/datetime_range.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'dblog' => 
    array (
      'name' => 'Database Logging',
      'type' => 'module',
      'description' => 'Logs and records system events to the database.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'system.logging_settings',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/dblog/dblog.info.yml',
      'status' => 1,
      'schema_version' => 8400,
    ),
    'devel' => 
    array (
      'type' => 'module',
      'name' => 'Devel',
      'description' => 'Various blocks, pages, and functions for developers.',
      'package' => 'Development',
      'configure' => 'devel.admin_settings',
      'tags' => 
      array (
        0 => 'developer',
      ),
      'version' => '8.x-1.x-dev',
      'core' => '8.x',
      'project' => 'devel',
      'datestamp' => 1447717473,
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/devel/devel.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'devel_generate' => 
    array (
      'type' => 'module',
      'name' => 'Devel generate',
      'description' => 'Generate dummy users, nodes, menus, taxonomy terms...',
      'package' => 'Development',
      'tags' => 
      array (
        0 => 'developer',
      ),
      'version' => '8.x-1.x-dev',
      'core' => '8.x',
      'project' => 'devel',
      'datestamp' => 1447717473,
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/devel/devel_generate/devel_generate.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'devel_node_access' => 
    array (
      'type' => 'module',
      'name' => 'Devel node access',
      'description' => 'Developer blocks and page illustrating relevant node_access records.',
      'package' => 'Development',
      'configure' => 'admin/config/development/devel',
      'dependencies' => 
      array (
        0 => 'devel',
        1 => 'menu_ui',
      ),
      'tags' => 
      array (
        0 => 'developer',
      ),
      'version' => '8.x-1.x-dev',
      'core' => '8.x',
      'project' => 'devel',
      'datestamp' => 1447717473,
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/devel/devel_node_access/devel_node_access.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'dynamic_entity_reference' => 
    array (
      'name' => 'Dynamic Entity Reference',
      'type' => 'module',
      'description' => 'Provides an entity reference field that can reference multiple entity types.',
      'package' => 'Field types',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'test_dependencies' => 
      array (
        0 => 'drupal:field_ui',
        1 => 'drupal:language',
        2 => 'drupal:locale',
        3 => 'drupal:node',
        4 => 'drupal:taxonomy',
      ),
      'version' => '8.x-1.4',
      'core' => '8.x',
      'project' => 'dynamic_entity_reference',
      'datestamp' => 1501151044,
      'mtime' => 1501143844,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/dynamic_entity_reference/dynamic_entity_reference.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'dynamic_page_cache' => 
    array (
      'name' => 'Internal Dynamic Page Cache',
      'type' => 'module',
      'description' => 'Caches pages for any user, handling dynamic content correctly.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/dynamic_page_cache/dynamic_page_cache.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'editor' => 
    array (
      'name' => 'Text Editor',
      'type' => 'module',
      'description' => 'Provides a means to associate text formats with text editor libraries such as WYSIWYGs or toolbars.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'filter',
        1 => 'file',
      ),
      'configure' => 'filter.admin_overview',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/editor/editor.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'entity' => 
    array (
      'name' => 'Entity',
      'description' => 'Provides expanded entity APIs, which will be moved to Drupal core one day.',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'drupal:system (>=8.3.0)',
      ),
      'version' => '8.x-1.0-beta1',
      'core' => '8.x',
      'project' => 'entity',
      'datestamp' => 1505895847,
      'mtime' => 1505888648,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/entity/entity.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'entity_reference' => 
    array (
      'name' => 'Entity Reference',
      'type' => 'module',
      'description' => 'Deprecated. All the functionality has been moved to Core.',
      'package' => 'Field types',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'hidden' => true,
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/entity_reference/entity_reference.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'entity_reference_revisions' => 
    array (
      'name' => 'Entity Reference Revisions',
      'type' => 'module',
      'description' => 'Adds a Entity Reference field type with revision support.',
      'package' => 'Field types',
      'test_dependencies' => 
      array (
        0 => 'diff:diff',
      ),
      'version' => '8.x-1.3',
      'core' => '8.x',
      'project' => 'entity_reference_revisions',
      'datestamp' => 1495814304,
      'mtime' => 1495807104,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/entity_reference_revisions/entity_reference_revisions.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'field' => 
    array (
      'name' => 'Field',
      'type' => 'module',
      'description' => 'Field API to add fields to entities like nodes and users.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/field/field.info.yml',
      'status' => 1,
      'schema_version' => 8003,
    ),
    'field_layout' => 
    array (
      'name' => 'Field Layout',
      'type' => 'module',
      'description' => 'Adds layout capabilities to the Field UI.',
      'package' => 'Core (Experimental)',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'layout_discovery',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/field_layout/field_layout.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'field_ui' => 
    array (
      'name' => 'Field UI',
      'type' => 'module',
      'description' => 'User interface for the Field API.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'field',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/field_ui/field_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'file' => 
    array (
      'name' => 'File',
      'type' => 'module',
      'description' => 'Defines a file field type.',
      'package' => 'Field types',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'field',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/file/file.info.yml',
      'status' => 1,
      'schema_version' => 8300,
    ),
    'filter' => 
    array (
      'name' => 'Filter',
      'type' => 'module',
      'description' => 'Filters content in preparation for display.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'filter.admin_overview',
      'dependencies' => 
      array (
        0 => 'user',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/filter/filter.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'forum' => 
    array (
      'name' => 'Forum',
      'type' => 'module',
      'description' => 'Provides discussion forums.',
      'dependencies' => 
      array (
        0 => 'node',
        1 => 'history',
        2 => 'taxonomy',
        3 => 'comment',
        4 => 'options',
      ),
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'forum.overview',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/forum/forum.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'hal' => 
    array (
      'name' => 'HAL',
      'type' => 'module',
      'description' => 'Serializes entities using Hypertext Application Language.',
      'package' => 'Web services',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'serialization',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/hal/hal.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'help' => 
    array (
      'name' => 'Help',
      'type' => 'module',
      'description' => 'Manages the display of online help.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/help/help.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'history' => 
    array (
      'name' => 'History',
      'type' => 'module',
      'description' => 'Records which user has read which content.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'node',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/history/history.info.yml',
      'status' => 1,
      'schema_version' => 8101,
    ),
    'image' => 
    array (
      'name' => 'Image',
      'type' => 'module',
      'description' => 'Defines an image field type and provides image manipulation tools.',
      'package' => 'Field types',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'file',
      ),
      'configure' => 'entity.image_style.collection',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/image/image.info.yml',
      'status' => 1,
      'schema_version' => 8201,
    ),
    'inline_entity_form' => 
    array (
      'name' => 'Inline Entity Form',
      'description' => 'Provides a widget for inline management (creation, modification, removal) of referenced entities. ',
      'type' => 'module',
      'package' => 'Fields',
      'test_dependencies' => 
      array (
        0 => 'entity_reference_revisions:entity_reference_revisions',
      ),
      'version' => '8.x-1.0-beta1',
      'core' => '8.x',
      'project' => 'inline_entity_form',
      'datestamp' => 1477868362,
      'mtime' => 1477864762,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/inline_entity_form/inline_entity_form.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'inline_form_errors' => 
    array (
      'type' => 'module',
      'name' => 'Inline Form Errors',
      'description' => 'Places error messages adjacent to form inputs, for improved usability and accessibility.',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'package' => 'Core',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/inline_form_errors/inline_form_errors.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'kint' => 
    array (
      'name' => 'Devel Kint',
      'type' => 'module',
      'description' => 'Wrapper for Kint debugging tool',
      'package' => 'Development',
      'tags' => 
      array (
        0 => 'developer',
      ),
      'version' => '8.x-1.x-dev',
      'core' => '8.x',
      'project' => 'devel',
      'datestamp' => 1447717473,
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/devel/kint/kint.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'language' => 
    array (
      'name' => 'Language',
      'type' => 'module',
      'description' => 'Allows users to configure languages and apply them to content.',
      'package' => 'Multilingual',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'entity.configurable_language.collection',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/language/language.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'layout_discovery' => 
    array (
      'name' => 'Layout Discovery',
      'type' => 'module',
      'description' => 'Provides a way for modules or themes to register layouts.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/layout_discovery/layout_discovery.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'link' => 
    array (
      'name' => 'Link',
      'type' => 'module',
      'description' => 'Provides a simple link field type.',
      'core' => '8.x',
      'package' => 'Field types',
      'version' => '8.4.2-dev',
      'dependencies' => 
      array (
        0 => 'field',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/link/link.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'locale' => 
    array (
      'name' => 'Interface Translation',
      'type' => 'module',
      'description' => 'Translates the built-in user interface.',
      'configure' => 'locale.translate_page',
      'package' => 'Multilingual',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'language',
        1 => 'file',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/locale/locale.info.yml',
      'status' => 1,
      'schema_version' => 8300,
    ),
    'media' => 
    array (
      'name' => 'Media',
      'description' => 'Create reusable media.',
      'type' => 'module',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'hidden' => true,
      'dependencies' => 
      array (
        0 => 'file',
        1 => 'image',
        2 => 'user',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/media/media.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'memcache' => 
    array (
      'name' => 'Memcache',
      'description' => 'High performance integration with memcache.',
      'type' => 'module',
      'package' => 'Performance and scalability',
      'version' => '8.x-2.x-dev',
      'core' => '8.x',
      'project' => 'memcache',
      'datestamp' => 1430987886,
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/memcache/memcache.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'menu_link_content' => 
    array (
      'name' => 'Custom Menu Links',
      'type' => 'module',
      'description' => 'Allows administrators to create custom menu links.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'link',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/menu_link_content/menu_link_content.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'menu_ui' => 
    array (
      'name' => 'Menu UI',
      'type' => 'module',
      'description' => 'Allows administrators to customize the site navigation menu.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'entity.menu.collection',
      'dependencies' => 
      array (
        0 => 'menu_link_content',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/menu_ui/menu_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'migrate' => 
    array (
      'name' => 'Migrate',
      'type' => 'module',
      'description' => 'Handles migrations',
      'package' => 'Core (Experimental)',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/migrate/migrate.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'migrate_drupal' => 
    array (
      'name' => 'Migrate Drupal',
      'type' => 'module',
      'description' => 'Contains migrations from older Drupal versions.',
      'package' => 'Core (Experimental)',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'migrate',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/migrate_drupal/migrate_drupal.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'migrate_drupal_ui' => 
    array (
      'name' => 'Migrate Drupal UI',
      'type' => 'module',
      'description' => 'Provides a user interface for migrating from older Drupal versions.',
      'package' => 'Core (Experimental)',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'migrate_drupal_ui.upgrade',
      'dependencies' => 
      array (
        0 => 'migrate',
        1 => 'migrate_drupal',
        2 => 'dblog',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/migrate_drupal_ui/migrate_drupal_ui.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'mobile_number' => 
    array (
      'name' => 'Mobile Number',
      'description' => 'Mobile number field with sms verification.',
      'package' => 'Field types',
      'type' => 'module',
      'dependencies' => 
      array (
      ),
      'test_dependencies' => 
      array (
        0 => 'smsframework:sms',
      ),
      'version' => '8.x-1.0-alpha5',
      'core' => '8.x',
      'project' => 'mobile_number',
      'datestamp' => 1493925188,
      'mtime' => 1493917988,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/mobile_number/mobile_number.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'node' => 
    array (
      'name' => 'Node',
      'type' => 'module',
      'description' => 'Allows content to be submitted to the site and displayed on pages.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'entity.node_type.collection',
      'dependencies' => 
      array (
        0 => 'text',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/node/node.info.yml',
      'status' => 1,
      'schema_version' => 8400,
    ),
    'options' => 
    array (
      'name' => 'Options',
      'type' => 'module',
      'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
      'package' => 'Field types',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'field',
        1 => 'text',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/options/options.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'page_cache' => 
    array (
      'name' => 'Internal Page Cache',
      'type' => 'module',
      'description' => 'Caches pages for anonymous users. Use when an external page cache is not available.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/page_cache/page_cache.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'path' => 
    array (
      'name' => 'Path',
      'type' => 'module',
      'description' => 'Allows users to rename URLs.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'path.admin_overview',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/path/path.info.yml',
      'status' => 1,
      'schema_version' => 8200,
    ),
    'plugin' => 
    array (
      'name' => 'Plugin',
      'description' => 'Provides tools that extend Drupal\'s plugin system.',
      'type' => 'module',
      'configure' => 'plugin.plugin_type.list',
      'dependencies' => 
      array (
        0 => 'system (>=8.0.5)',
      ),
      'version' => '8.x-2.5',
      'core' => '8.x',
      'project' => 'plugin',
      'datestamp' => 1491597185,
      'mtime' => 1491589986,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/plugin/plugin.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'profile' => 
    array (
      'name' => 'Profile',
      'type' => 'module',
      'description' => 'Provides configurable user profiles.',
      'configure' => 'entity.profile_type.collection',
      'dependencies' => 
      array (
        0 => 'user',
        1 => 'entity',
        2 => 'field',
        3 => 'views',
        4 => 'system (>=8.1.0)',
      ),
      'version' => '8.x-1.0-rc1',
      'core' => '8.x',
      'project' => 'profile',
      'datestamp' => 1505830148,
      'mtime' => 1505822948,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/profile/profile.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'quickedit' => 
    array (
      'name' => 'Quick Edit',
      'type' => 'module',
      'description' => 'In-place content editing.',
      'package' => 'Core',
      'core' => '8.x',
      'version' => '8.4.2-dev',
      'dependencies' => 
      array (
        0 => 'contextual',
        1 => 'field',
        2 => 'filter',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/quickedit/quickedit.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'rdf' => 
    array (
      'name' => 'RDF',
      'type' => 'module',
      'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/rdf/rdf.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'responsive_image' => 
    array (
      'name' => 'Responsive Image',
      'type' => 'module',
      'description' => 'Provides an image formatter and breakpoint mappings to output responsive images using the HTML5 picture tag.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'breakpoint',
        1 => 'image',
      ),
      'configure' => 'entity.responsive_image_style.collection',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/responsive_image/responsive_image.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'rest' => 
    array (
      'name' => 'RESTful Web Services',
      'type' => 'module',
      'description' => 'Exposes entities and other resources as RESTful web API',
      'package' => 'Web services',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'serialization',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/rest/rest.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search' => 
    array (
      'name' => 'Search',
      'type' => 'module',
      'description' => 'Enables site-wide keyword searching.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'entity.search_page.collection',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/search/search.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'search_api' => 
    array (
      'type' => 'module',
      'name' => 'Search API',
      'description' => 'Provides a generic framework for modules offering search capabilities.',
      'package' => 'Search',
      'configure' => 'search_api.overview',
      'dependencies' => 
      array (
        0 => 'system (>=8.3)',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'search_api',
      'datestamp' => 1507989257,
      'mtime' => 1507982058,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/search_api/search_api.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search_api_db' => 
    array (
      'type' => 'module',
      'name' => 'Database Search',
      'description' => 'Offers an implementation of the Search API that uses database tables for indexing content.',
      'package' => 'Search',
      'dependencies' => 
      array (
        0 => 'search_api:search_api',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'search_api',
      'datestamp' => 1507989257,
      'mtime' => 1507982058,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/search_api/modules/search_api_db/search_api_db.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search_api_db_defaults' => 
    array (
      'type' => 'module',
      'name' => 'Database Search Defaults',
      'description' => 'Enable this module for a best-practice default setup of Search API with the Database backend. After installation it is recommended to uninstall this module again for performance reasons. The provided configuration will not be removed.',
      'package' => 'Search',
      'dependencies' => 
      array (
        0 => 'drupal:comment',
        1 => 'drupal:field',
        2 => 'drupal:image',
        3 => 'drupal:node',
        4 => 'drupal:text',
        5 => 'drupal:user',
        6 => 'drupal:views',
        7 => 'search_api:search_api_db',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'search_api',
      'datestamp' => 1507989257,
      'mtime' => 1507982058,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/search_api/modules/search_api_db/search_api_db_defaults/search_api_db_defaults.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search_api_solr' => 
    array (
      'type' => 'module',
      'name' => 'Solr search',
      'description' => 'Offers an implementation of the Search API that uses an Apache Solr server for indexing content.',
      'package' => 'Search',
      'dependencies' => 
      array (
        0 => 'search_api',
      ),
      'version' => '8.x-1.2',
      'core' => '8.x',
      'project' => 'search_api_solr',
      'datestamp' => 1509541996,
      'mtime' => 1509538396,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/search_api_solr/search_api_solr.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search_api_solr_defaults' => 
    array (
      'type' => 'module',
      'name' => 'Solr Search Defaults',
      'description' => 'Enable this module for a best-practice default setup of Search API with the Solr backend. After installation it is recommended to uninstall this module again for performance reasons. The provided configuration will not be removed.',
      'package' => 'Search',
      'dependencies' => 
      array (
        0 => 'drupal:comment',
        1 => 'drupal:text',
        2 => 'drupal:field',
        3 => 'drupal:image',
        4 => 'drupal:node',
        5 => 'drupal:user',
        6 => 'drupal:views',
        7 => 'search_api_solr',
      ),
      'version' => '8.x-1.2',
      'core' => '8.x',
      'project' => 'search_api_solr',
      'datestamp' => 1509541996,
      'mtime' => 1509538396,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/search_api_solr/search_api_solr_defaults/search_api_solr_defaults.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search_api_views_taxonomy' => 
    array (
      'type' => 'module',
      'name' => 'Search API Taxonomy Term Handlers',
      'description' => 'Enables the use of Search API indexed taxonomy terms as filters or arguments in Search API supported Views.',
      'package' => 'Search',
      'configure' => 'search_api.overview',
      'dependencies' => 
      array (
        0 => 'drupal:system (>=8.1)',
        1 => 'search_api:search_api',
        2 => 'drupal:taxonomy',
        3 => 'drupal:views',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'search_api',
      'datestamp' => 1507989257,
      'mtime' => 1507982058,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/search_api/modules/search_api_views_taxonomy/search_api_views_taxonomy.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'serialization' => 
    array (
      'name' => 'Serialization',
      'type' => 'module',
      'description' => 'Provides a service for (de)serializing data to/from formats such as JSON and XML',
      'package' => 'Web services',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/serialization/serialization.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'settings_tray' => 
    array (
      'name' => 'Settings Tray',
      'type' => 'module',
      'description' => 'Provides the ability to change the most common configuration from the Drupal front-end.',
      'package' => 'Core (Experimental)',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'block',
        1 => 'toolbar',
        2 => 'contextual',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/settings_tray/settings_tray.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'shortcut' => 
    array (
      'name' => 'Shortcut',
      'type' => 'module',
      'description' => 'Allows users to manage customizable lists of shortcut links.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'entity.shortcut_set.collection',
      'dependencies' => 
      array (
        0 => 'link',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/shortcut/shortcut.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'simplenews' => 
    array (
      'name' => 'Simplenews',
      'description' => 'Send newsletters to subscribed email addresses. For uninstall go to Configuration > Web services > Simplenews > Settings and hit "Prepare uninstall".',
      'type' => 'module',
      'package' => 'Mail',
      'dependencies' => 
      array (
        0 => 'node',
        1 => 'field',
        2 => 'options',
        3 => 'views',
      ),
      'test_dependencies' => 
      array (
        0 => 'monitoring',
      ),
      'configure' => 'simplenews.newsletter_list',
      'version' => '8.x-1.0-alpha2',
      'core' => '8.x',
      'project' => 'simplenews',
      'datestamp' => 1448269742,
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/simplenews/simplenews.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'simplenews_demo' => 
    array (
      'name' => 'Simplenews Demo',
      'type' => 'module',
      'description' => 'Demo module for Simplenews.',
      'dependencies' => 
      array (
        0 => 'block',
        1 => 'views',
        2 => 'simplenews',
        3 => 'simplenews_scheduler',
      ),
      'hidden' => false,
      'package' => 'Mail',
      'version' => '8.x-1.0-alpha2',
      'core' => '8.x',
      'project' => 'simplenews',
      'datestamp' => 1448269742,
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/simplenews/modules/simplenews_demo/simplenews_demo.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'simpletest' => 
    array (
      'name' => 'Testing',
      'type' => 'module',
      'description' => 'Provides a framework for unit and functional testing.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'simpletest.settings',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/simpletest/simpletest.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'sms' => 
    array (
      'name' => 'SMS Framework',
      'description' => 'Provides an extensible API that facilitates communication between Drupal and various SMS gateways.',
      'package' => 'SMS Framework',
      'type' => 'module',
      'configure' => 'admin/config/smsframework',
      'dependencies' => 
      array (
        0 => 'telephone',
        1 => 'dynamic_entity_reference',
      ),
      'version' => '8.x-1.0',
      'core' => '8.x',
      'project' => 'smsframework',
      'datestamp' => 1489138389,
      'mtime' => 1489134790,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/smsframework/sms.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'sms_blast' => 
    array (
      'name' => 'SMS Blast',
      'description' => 'Allows bulk text messages to be sent to registered users.',
      'type' => 'module',
      'package' => 'SMS Framework',
      'dependencies' => 
      array (
        0 => 'sms',
        1 => 'user',
      ),
      'version' => '8.x-1.0',
      'core' => '8.x',
      'project' => 'smsframework',
      'datestamp' => 1489138389,
      'mtime' => 1489134790,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/smsframework/modules/sms_blast/sms_blast.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'sms_clickatell' => 
    array (
      'name' => 'Clickatell',
      'type' => 'module',
      'description' => 'Enables modules to use Clickatell API, and integrates with SMS Framework.',
      'version' => '8.x-1.0-beta3',
      'core' => '8.x',
      'project' => 'sms_clickatell',
      'datestamp' => 1489148886,
      'mtime' => 1489145286,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/sms_clickatell/sms_clickatell.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'sms_devel' => 
    array (
      'name' => 'SMS Devel',
      'type' => 'module',
      'description' => 'Tools to assist building with the SMS Framework.',
      'package' => 'SMS Framework',
      'dependencies' => 
      array (
        0 => 'sms',
      ),
      'version' => '8.x-1.0',
      'core' => '8.x',
      'project' => 'smsframework',
      'datestamp' => 1489138389,
      'mtime' => 1489134790,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/smsframework/modules/sms_devel/sms_devel.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'sms_sendtophone' => 
    array (
      'name' => 'Send to phone',
      'type' => 'module',
      'description' => 'Provides various tools for sending bits of information via SMS.',
      'dependencies' => 
      array (
        0 => 'sms',
      ),
      'package' => 'SMS Framework',
      'version' => '8.x-1.0',
      'core' => '8.x',
      'project' => 'smsframework',
      'datestamp' => 1489138389,
      'mtime' => 1489134790,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/smsframework/modules/sms_sendtophone/sms_sendtophone.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'sms_user' => 
    array (
      'name' => 'SMS User',
      'description' => 'Provides integration between the SMS Framework and Drupal users.',
      'package' => 'SMS Framework',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'sms',
        1 => 'user',
      ),
      'version' => '8.x-1.0',
      'core' => '8.x',
      'project' => 'smsframework',
      'datestamp' => 1489138389,
      'mtime' => 1489134790,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/smsframework/modules/sms_user/sms_user.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'standard' => 
    array (
      'name' => 'Standard',
      'type' => 'profile',
      'description' => 'Install with commonly used features pre-configured.',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'node',
        1 => 'history',
        2 => 'block',
        3 => 'breakpoint',
        4 => 'ckeditor',
        5 => 'color',
        6 => 'config',
        7 => 'comment',
        8 => 'contextual',
        9 => 'contact',
        10 => 'menu_link_content',
        11 => 'datetime',
        12 => 'block_content',
        13 => 'quickedit',
        14 => 'editor',
        15 => 'help',
        16 => 'image',
        17 => 'menu_ui',
        18 => 'options',
        19 => 'path',
        20 => 'page_cache',
        21 => 'dynamic_page_cache',
        22 => 'taxonomy',
        23 => 'dblog',
        24 => 'search',
        25 => 'shortcut',
        26 => 'toolbar',
        27 => 'field_ui',
        28 => 'file',
        29 => 'rdf',
        30 => 'views',
        31 => 'views_ui',
        32 => 'tour',
        33 => 'automated_cron',
      ),
      'themes' => 
      array (
        0 => 'bartik',
        1 => 'seven',
      ),
      'mtime' => 1509990124,
      'package' => 'Other',
      'php' => '5.5.9',
      'hidden' => true,
      'required' => true,
      'distribution' => 
      array (
        'name' => 'Drupal',
      ),
      'filename' => '/var/aegir/projects/mp/dev/core/profiles/standard/standard.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'state_machine' => 
    array (
      'name' => 'State Machine',
      'type' => 'module',
      'description' => 'Provides code-driven workflow functionality.',
      'package' => 'Other',
      'version' => '8.x-1.0-beta3',
      'core' => '8.x',
      'project' => 'state_machine',
      'datestamp' => 1477868941,
      'mtime' => 1477865342,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/contrib/state_machine/state_machine.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'statistics' => 
    array (
      'name' => 'Statistics',
      'type' => 'module',
      'description' => 'Logs content statistics for your site.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'statistics.settings',
      'dependencies' => 
      array (
        0 => 'node',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/statistics/statistics.info.yml',
      'status' => 1,
      'schema_version' => 8300,
    ),
    'syslog' => 
    array (
      'name' => 'Syslog',
      'type' => 'module',
      'description' => 'Logs and records system events to syslog.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'system.logging_settings',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/syslog/syslog.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'system' => 
    array (
      'name' => 'System',
      'type' => 'module',
      'description' => 'Handles general site configuration for administrators.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'required' => true,
      'configure' => 'system.admin_config_system',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/system/system.info.yml',
      'status' => 1,
      'schema_version' => 8403,
    ),
    'taxonomy' => 
    array (
      'name' => 'Taxonomy',
      'type' => 'module',
      'description' => 'Enables the categorization of content.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'node',
        1 => 'text',
      ),
      'configure' => 'entity.taxonomy_vocabulary.collection',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/taxonomy/taxonomy.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'telephone' => 
    array (
      'name' => 'Telephone',
      'type' => 'module',
      'description' => 'Defines a field type for telephone numbers.',
      'package' => 'Field types',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'field',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/telephone/telephone.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'text' => 
    array (
      'name' => 'Text',
      'type' => 'module',
      'description' => 'Defines simple text field types.',
      'package' => 'Field types',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'field',
        1 => 'filter',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/text/text.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'toolbar' => 
    array (
      'name' => 'Toolbar',
      'type' => 'module',
      'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
      'core' => '8.x',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'dependencies' => 
      array (
        0 => 'breakpoint',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/toolbar/toolbar.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'tour' => 
    array (
      'name' => 'Tour',
      'type' => 'module',
      'description' => 'Provides guided tours.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/tour/tour.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'tracker' => 
    array (
      'name' => 'Activity Tracker',
      'type' => 'module',
      'description' => 'Enables tracking of recent content for users.',
      'dependencies' => 
      array (
        0 => 'node',
        1 => 'comment',
      ),
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/tracker/tracker.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'update' => 
    array (
      'name' => 'Update Manager',
      'type' => 'module',
      'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
      'version' => '8.4.2-dev',
      'package' => 'Core',
      'core' => '8.x',
      'configure' => 'update.settings',
      'dependencies' => 
      array (
        0 => 'file',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/update/update.info.yml',
      'status' => 1,
      'schema_version' => 8001,
    ),
    'user' => 
    array (
      'name' => 'User',
      'type' => 'module',
      'description' => 'Manages the user registration and login system.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'required' => true,
      'configure' => 'user.admin_index',
      'dependencies' => 
      array (
        0 => 'system',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/user/user.info.yml',
      'status' => 1,
      'schema_version' => 8100,
    ),
    'views' => 
    array (
      'name' => 'Views',
      'type' => 'module',
      'description' => 'Create customized lists and queries from your database.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'filter',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/views/views.info.yml',
      'status' => 1,
      'schema_version' => 8201,
    ),
    'views_ui' => 
    array (
      'name' => 'Views UI',
      'type' => 'module',
      'description' => 'Administrative interface for Views.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'configure' => 'entity.view.collection',
      'dependencies' => 
      array (
        0 => 'views',
      ),
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/views_ui/views_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'votingapi' => 
    array (
      'name' => 'Voting API',
      'type' => 'module',
      'description' => 'Provides a voting API that other modules can make use of.',
      'package' => 'Voting',
      'configure' => 'votingapi.admin_settings',
      'version' => '8.x-3.0-alpha2+0-dev',
      'core' => '8.x',
      'project' => 'votingapi',
      'datestamp' => 1466179259,
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/votingapi/votingapi.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'webprofiler' => 
    array (
      'name' => 'Web Profiler',
      'type' => 'module',
      'description' => 'Drupal Web Profiler.',
      'package' => 'Development',
      'configure' => 'webprofiler.settings',
      'tags' => 
      array (
        0 => 'developer',
      ),
      'dependencies' => 
      array (
        0 => 'devel',
      ),
      'version' => '8.x-1.x-dev',
      'core' => '8.x',
      'project' => 'devel',
      'datestamp' => 1447717473,
      'mtime' => 1509990124,
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/modules/devel/webprofiler/webprofiler.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'workflows' => 
    array (
      'name' => 'Workflows',
      'type' => 'module',
      'description' => 'Provides UI and API for managing workflows. This module can be used with the Content moderation module to add highly customizable workflows to content.',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'package' => 'Core',
      'configure' => 'entity.workflow.collection',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/var/aegir/projects/mp/dev/core/modules/workflows/workflows.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'name' => 'Bartik',
      'type' => 'theme',
      'base theme' => 'classy',
      'description' => 'A flexible, recolorable theme with many regions and a responsive, mobile-first layout.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'libraries' => 
      array (
        0 => 'bartik/global-styling',
      ),
      'ckeditor_stylesheets' => 
      array (
        0 => 'css/base/elements.css',
        1 => 'css/components/captions.css',
        2 => 'css/components/table.css',
        3 => 'css/components/text-formatted.css',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'highlighted' => 'Highlighted',
        'featured_top' => 'Featured top',
        'breadcrumb' => 'Breadcrumb',
        'content' => 'Content',
        'sidebar_first' => 'Sidebar first',
        'sidebar_second' => 'Sidebar second',
        'featured_bottom_first' => 'Featured bottom first',
        'featured_bottom_second' => 'Featured bottom second',
        'featured_bottom_third' => 'Featured bottom third',
        'footer_first' => 'Footer first',
        'footer_second' => 'Footer second',
        'footer_third' => 'Footer third',
        'footer_fourth' => 'Footer fourth',
        'footer_fifth' => 'Footer fifth',
      ),
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/bartik/screenshot.png',
      'php' => '5.5.9',
      'mtime' => 1509990124,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'dependencies' => 
      array (
        0 => 'classy',
      ),
      'filename' => '/var/aegir/projects/mp/dev/core/themes/bartik/bartik.info.yml',
      'status' => 1,
    ),
    'classy' => 
    array (
      'name' => 'Classy',
      'type' => 'theme',
      'description' => 'A base theme with sensible default CSS classes added. Learn how to use Classy as a base theme in the <a href="https://www.drupal.org/docs/8/theming">Drupal 8 Theming Guide</a>.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'hidden' => true,
      'libraries' => 
      array (
        0 => 'classy/base',
        1 => 'classy/messages',
        2 => 'core/normalize',
      ),
      'libraries-extend' => 
      array (
        'user/drupal.user' => 
        array (
          0 => 'classy/user',
        ),
        'core/drupal.dropbutton' => 
        array (
          0 => 'classy/dropbutton',
        ),
        'core/drupal.dialog' => 
        array (
          0 => 'classy/dialog',
        ),
        'file/drupal.file' => 
        array (
          0 => 'classy/file',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'classy/progress',
        ),
      ),
      'engine' => 'twig',
      'base theme' => 'stable',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/classy/screenshot.png',
      'php' => '5.5.9',
      'mtime' => 1509990124,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'dependencies' => 
      array (
        0 => 'stable',
      ),
      'filename' => '/var/aegir/projects/mp/dev/core/themes/classy/classy.info.yml',
      'status' => 1,
    ),
    'seven' => 
    array (
      'name' => 'Seven',
      'type' => 'theme',
      'base theme' => 'classy',
      'description' => 'The default administration theme for Drupal 8 was designed with clean lines, simple blocks, and sans-serif font to emphasize the tools and tasks at hand.',
      'alt text' => 'Default administration theme for Drupal 8 with simple blocks and clean lines.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'libraries' => 
      array (
        0 => 'seven/global-styling',
      ),
      'libraries-override' => 
      array (
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              '/core/themes/stable/css/system/components/system-status-counter.css' => 'css/components/system-status-counter.css',
              '/core/themes/stable/css/system/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
              '/core/themes/stable/css/system/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => false,
            ),
          ),
        ),
        'core/jquery.ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'assets/vendor/jquery.ui/themes/base/theme.css' => false,
            ),
          ),
        ),
        'core/jquery.ui.dialog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
            ),
          ),
        ),
        'classy/dialog' => 'seven/seven.drupal.dialog',
      ),
      'libraries-extend' => 
      array (
        'core/ckeditor' => 
        array (
          0 => 'seven/ckeditor-dialog',
        ),
        'core/drupal.vertical-tabs' => 
        array (
          0 => 'seven/vertical-tabs',
        ),
        'core/jquery.ui' => 
        array (
          0 => 'seven/seven.jquery.ui',
        ),
        'tour/tour-styling' => 
        array (
          0 => 'seven/tour-styling',
        ),
      ),
      'quickedit_stylesheets' => 
      array (
        0 => 'css/components/quickedit.css',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'pre_content' => 'Pre-content',
        'breadcrumb' => 'Breadcrumb',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'sidebar_first' => 'First sidebar',
      ),
      'regions_hidden' => 
      array (
        0 => 'sidebar_first',
        1 => 'page_top',
        2 => 'page_bottom',
      ),
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/seven/screenshot.png',
      'php' => '5.5.9',
      'mtime' => 1509990124,
      'dependencies' => 
      array (
        0 => 'classy',
      ),
      'filename' => '/var/aegir/projects/mp/dev/core/themes/seven/seven.info.yml',
      'status' => 1,
    ),
    'stable' => 
    array (
      'name' => 'Stable',
      'type' => 'theme',
      'description' => 'A default base theme using Drupal 8.0.0\'s core markup and CSS.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'hidden' => true,
      'libraries-override' => 
      array (
        'block/drupal.block.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/block.admin.css' => 'css/block/block.admin.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/ckeditor.css' => 'css/ckeditor/ckeditor.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.plugins.drupalimagecaption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css' => 'css/ckeditor/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.plugins.language' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/plugins/language/ckeditor.language.css' => 'css/ckeditor/plugins/language/ckeditor.language.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/ckeditor.admin.css' => 'css/ckeditor/ckeditor.admin.css',
            ),
          ),
        ),
        'color/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/color.admin.css' => 'css/color/color.admin.css',
            ),
          ),
        ),
        'config_translation/drupal.config_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/config_translation.admin.css' => 'css/config_translation/config_translation.admin.css',
            ),
          ),
        ),
        'content_translation/drupal.content_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/content_translation.admin.css' => 'css/content_translation/content_translation.admin.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-links' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.module.css' => 'css/contextual/contextual.module.css',
            ),
            'theme' => 
            array (
              'css/contextual.theme.css' => 'css/contextual/contextual.theme.css',
              'css/contextual.icons.theme.css' => 'css/contextual/contextual.icons.theme.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.toolbar.css' => 'css/contextual/contextual.toolbar.css',
            ),
          ),
        ),
        'core/drupal.dropbutton' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/dropbutton/dropbutton.css' => 'css/core/dropbutton/dropbutton.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => 'css/core/vertical-tabs.css',
            ),
          ),
        ),
        'dblog/drupal.dblog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/dblog.module.css' => 'css/dblog/dblog.module.css',
            ),
          ),
        ),
        'field_ui/drupal.field_ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/field_ui.admin.css' => 'css/field_ui/field_ui.admin.css',
            ),
          ),
        ),
        'file/drupal.file' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/file.admin.css' => 'css/file/file.admin.css',
            ),
          ),
        ),
        'filter/drupal.filter.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/filter.admin.css' => 'css/filter/filter.admin.css',
            ),
          ),
        ),
        'filter/drupal.filter' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/filter.admin.css' => 'css/filter/filter.admin.css',
            ),
          ),
        ),
        'filter/caption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/filter.caption.css' => 'css/filter/filter.caption.css',
            ),
          ),
        ),
        'image/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/image.admin.css' => 'css/image/image.admin.css',
            ),
          ),
        ),
        'image/quickedit.inPlaceEditor.image' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/editors/image.css' => 'css/image/editors/image.css',
            ),
            'theme' => 
            array (
              'css/editors/image.theme.css' => 'css/image/editors/image.theme.css',
            ),
          ),
        ),
        'language/drupal.language.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/language.admin.css' => 'css/language/language.admin.css',
            ),
          ),
        ),
        'locale/drupal.locale.admin' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/locale.admin.css' => 'css/locale/locale.admin.css',
            ),
          ),
        ),
        'menu_ui/drupal.menu_ui.adminforms' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/menu_ui.admin.css' => 'css/menu_ui/menu_ui.admin.css',
            ),
          ),
        ),
        'node/drupal.node' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.preview' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.preview.css' => 'css/node/node.preview.css',
            ),
          ),
        ),
        'node/form' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.admin.css' => 'css/node/node.admin.css',
            ),
          ),
        ),
        'quickedit/quickedit' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/quickedit.module.css' => 'css/quickedit/quickedit.module.css',
            ),
            'theme' => 
            array (
              'css/quickedit.theme.css' => 'css/quickedit/quickedit.theme.css',
              'css/quickedit.icons.theme.css' => 'css/quickedit/quickedit.icons.theme.css',
            ),
          ),
        ),
        'shortcut/drupal.shortcut' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/shortcut.theme.css' => 'css/shortcut/shortcut.theme.css',
              'css/shortcut.icons.theme.css' => 'css/shortcut/shortcut.icons.theme.css',
            ),
          ),
        ),
        'simpletest/drupal.simpletest' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/simpletest.module.css' => 'css/simpletest/simpletest.module.css',
            ),
          ),
        ),
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/ajax-progress.module.css' => 'css/system/components/ajax-progress.module.css',
              'css/components/align.module.css' => 'css/system/components/align.module.css',
              'css/components/autocomplete-loading.module.css' => 'css/system/components/autocomplete-loading.module.css',
              'css/components/fieldgroup.module.css' => 'css/system/components/fieldgroup.module.css',
              'css/components/container-inline.module.css' => 'css/system/components/container-inline.module.css',
              'css/components/clearfix.module.css' => 'css/system/components/clearfix.module.css',
              'css/components/details.module.css' => 'css/system/components/details.module.css',
              'css/components/hidden.module.css' => 'css/system/components/hidden.module.css',
              'css/components/item-list.module.css' => 'css/system/components/item-list.module.css',
              'css/components/js.module.css' => 'css/system/components/js.module.css',
              'css/components/nowrap.module.css' => 'css/system/components/nowrap.module.css',
              'css/components/position-container.module.css' => 'css/system/components/position-container.module.css',
              'css/components/progress.module.css' => 'css/system/components/progress.module.css',
              'css/components/reset-appearance.module.css' => 'css/system/components/reset-appearance.module.css',
              'css/components/resize.module.css' => 'css/system/components/resize.module.css',
              'css/components/sticky-header.module.css' => 'css/system/components/sticky-header.module.css',
              'css/components/system-status-counter.css' => 'css/system/components/system-status-counter.css',
              'css/components/system-status-report-counters.css' => 'css/system/components/system-status-report-counters.css',
              'css/components/system-status-report-general-info.css' => 'css/system/components/system-status-report-general-info.css',
              'css/components/tabledrag.module.css' => 'css/system/components/tabledrag.module.css',
              'css/components/tablesort.module.css' => 'css/system/components/tablesort.module.css',
              'css/components/tree-child.module.css' => 'css/system/components/tree-child.module.css',
            ),
          ),
        ),
        'system/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.admin.css' => 'css/system/system.admin.css',
            ),
          ),
        ),
        'system/maintenance' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.maintenance.css' => 'css/system/system.maintenance.css',
            ),
          ),
        ),
        'system/diff' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/system.diff.css' => 'css/system/system.diff.css',
            ),
          ),
        ),
        'taxonomy/drupal.taxonomy' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/taxonomy.theme.css' => 'css/taxonomy/taxonomy.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/toolbar.module.css' => 'css/toolbar/toolbar.module.css',
            ),
            'theme' => 
            array (
              'css/toolbar.theme.css' => 'css/toolbar/toolbar.theme.css',
              'css/toolbar.icons.theme.css' => 'css/toolbar/toolbar.icons.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar.menu' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/toolbar.menu.css' => 'css/toolbar/toolbar.menu.css',
            ),
          ),
        ),
        'tour/tour-styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/tour.module.css' => 'css/tour/tour.module.css',
            ),
          ),
        ),
        'update/drupal.update.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/update.admin.theme.css' => 'css/update/update.admin.theme.css',
            ),
          ),
        ),
        'user/drupal.user' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/user.module.css' => 'css/user/user.module.css',
            ),
          ),
        ),
        'user/drupal.user.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.admin.css' => 'css/user/user.admin.css',
            ),
          ),
        ),
        'user/drupal.user.icons' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.icons.admin.css' => 'css/user/user.icons.admin.css',
            ),
          ),
        ),
        'views/views.module' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views.module.css' => 'css/views/views.module.css',
            ),
          ),
        ),
        'views_ui/admin.styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views_ui.admin.css' => 'css/views_ui/views_ui.admin.css',
            ),
            'theme' => 
            array (
              'css/views_ui.admin.theme.css' => 'css/views_ui/views_ui.admin.theme.css',
              'css/views_ui.contextual.css' => 'css/views_ui/views_ui.contextual.css',
            ),
          ),
        ),
      ),
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stable/screenshot.png',
      'php' => '5.5.9',
      'libraries' => 
      array (
      ),
      'mtime' => 1509990124,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/var/aegir/projects/mp/dev/core/themes/stable/stable.info.yml',
      'status' => 1,
    ),
    'stark' => 
    array (
      'name' => 'Stark',
      'type' => 'theme',
      'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
      'package' => 'Core',
      'version' => '8.4.2-dev',
      'core' => '8.x',
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stark/screenshot.png',
      'php' => '5.5.9',
      'libraries' => 
      array (
      ),
      'mtime' => 1509990124,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/var/aegir/projects/mp/dev/core/themes/stark/stark.info.yml',
      'status' => 0,
    ),
    'marketplace' => 
    array (
      'name' => 'Marketplace',
      'type' => 'theme',
      'base theme' => 'classy',
      'description' => 'Marketplace theme.',
      'package' => 'Core',
      'libraries' => 
      array (
        0 => 'marketplace/global-styling',
        1 => 'marketplace/corescript',
      ),
      'regions' => 
      array (
        'headline' => 'Headline',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'highlighted_first' => 'Highlighted first',
        'highlighted_second' => 'Highlighted second',
        'highlighted_third' => 'Highlighted third',
        'featured_top' => 'Featured top',
        'breadcrumb' => 'Breadcrumb',
        'content' => 'Content',
        'sidebar_first' => 'Sidebar first',
        'sidebar_second' => 'Sidebar second',
        'panel_first' => 'Panel first',
        'panel_second' => 'Panel second',
        'panel_third' => 'Panel third',
        'footer_first' => 'Footer first',
        'footer_second' => 'Footer second',
        'footer_third' => 'Footer third',
        'footer_fourth' => 'Footer fourth',
        'footer' => 'Footer',
      ),
      'version' => '8.x',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1446633477,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'themes/marketplace/screenshot.png',
      'php' => '5.5.9',
      'mtime' => 1509990125,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'dependencies' => 
      array (
        0 => 'classy',
      ),
      'filename' => '/var/aegir/projects/mp/dev/themes/marketplace/marketplace.info.yml',
      'status' => 1,
    ),
  ),
);
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];

# Local non-aegir-generated additions.
@include_once('/var/aegir/projects/mp/dev/sites/mp.dev.devshop.odnodumci.com/local.drushrc.php');
