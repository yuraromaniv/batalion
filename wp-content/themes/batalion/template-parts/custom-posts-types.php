<?php

// register custom posts types
    function register_cpt_events() {
        $labels = array( 
            'name' => _x( 'Події', 'events' ),
            'singular_name' => _x( 'Подія', 'events' ),
            'add_new' => _x( 'Додати подію', 'events' ),
            'add_new_item' => _x( 'Додати нові події ', 'events' ),
            'edit_item' => _x( 'Редагувати подію', 'events' ),
            'new_item' => _x( 'Нові події', 'events' ),
            'view_item' => _x( 'Переглянути', 'events' ),
            'search_items' => _x( 'Пошук', 'events' ),
            'not_found' => _x( 'Подій не знайдено', 'events' ),
            'not_found_in_trash' => _x( 'Подій в корзині не знайдено', 'events' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'events' ),
            'all_items' => _x( 'Всі події', 'events' ),
            'name_admin_bar' => _x( 'події', 'events'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Події',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-format-aside',
            'capability_type' => 'event',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_event',
                'read_post' => 'read_event',
                'delete_post' => 'delete_event',
                'edit_posts' => 'edit_events',
                'edit_others_posts' => 'edit_other_events',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_events',
                'read_private_posts' => 'read_private_events',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ), 
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'events', $args );
    }
    add_action( 'init', 'register_cpt_events' );


    function register_cpt_blogs() {
        $labels = array( 
            'name' => _x( 'Блог', 'blogs' ),
            'singular_name' => _x( 'Блог', 'blogs' ),
            'add_new' => _x( 'Додати блог', 'blogs' ),
            'add_new_item' => _x( 'Додати новий блог ', 'blogs' ),
            'edit_item' => _x( 'Редагувати блог', 'blogs' ),
            'new_item' => _x( 'Новий блог', 'blogs' ),
            'view_item' => _x( 'Переглянути', 'blogs' ),
            'search_items' => _x( 'Пошук', 'blogs' ),
            'not_found' => _x( 'Блогів не знайдено', 'blogs' ),
            'not_found_in_trash' => _x( 'Блогів в корзині не знайдено', 'blogs' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'blogs' ),
            'all_items' => _x( 'Всі блоги', 'blogs' ),
            'name_admin_bar' => _x( 'Блог', 'blogs'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Блог',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'blog',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_blog',
                'read_post' => 'read_blog',
                'delete_post' => 'delete_blog',
                'edit_posts' => 'edit_blogs',
                'edit_others_posts' => 'edit_other_blogs',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_blogs',
                'read_private_posts' => 'read_private_blogs',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ), 
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'blogs', $args );
    }
    add_action( 'init', 'register_cpt_blogs' );


    function register_cpt_discussions() {
        $labels = array( 
            'name' => _x( 'Обговорення', 'discussions' ),
            'singular_name' => _x( 'Обговорення', 'discussions' ),
            'add_new' => _x( 'Додати обговорення', 'discussions' ),
            'add_new_item' => _x( 'Додати нове обговорення ', 'discussions' ),
            'edit_item' => _x( 'Редагувати обговорення', 'discussions' ),
            'new_item' => _x( 'Нове обговорення', 'discussions' ),
            'view_item' => _x( 'Переглянути', 'discussions' ),
            'search_items' => _x( 'Пошук', 'discussions' ),
            'not_found' => _x( 'Обговорення не знайдено', 'discussions' ),
            'not_found_in_trash' => _x( 'Обговорення в корзині не знайдено', 'discussions' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'discussions' ),
            'all_items' => _x( 'Всі обговорення', 'discussions' ),
            'name_admin_bar' => _x( 'Обговорення', 'discussions'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Обговорення',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-format-chat',
            'capability_type' => 'discussion',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_discussion',
                'read_post' => 'read_discussion',
                'delete_post' => 'delete_discussion',
                'edit_posts' => 'edit_discussions',
                'edit_others_posts' => 'edit_other_discussions',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_discussions',
                'read_private_posts' => 'read_private_discussions',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ), 
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'discussions', $args );
    }
    add_action( 'init', 'register_cpt_discussions' );


    function register_cpt_tasks() {
        $labels = array( 
            'name' => _x( 'Цілі та завдання', 'tasks' ),
            'singular_name' => _x( 'Ціль та завдання', 'tasks' ),
            'add_new' => _x( 'Додати ціль та завдання', 'tasks' ),
            'add_new_item' => _x( 'Додати нові цілі та завдання ', 'tasks' ),
            'edit_item' => _x( 'Редагувати цілі та завдання', 'tasks' ),
            'new_item' => _x( 'Нові цілі та завдання', 'tasks' ),
            'view_item' => _x( 'Переглянути', 'tasks' ),
            'search_items' => _x( 'Пошук', 'tasks' ),
            'not_found' => _x( 'Цілі та завдання не знайдено', 'tasks' ),
            'not_found_in_trash' => _x( 'Цілі та завдання в корзині не знайдено', 'tasks' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'tasks' ),
            'all_items' => _x( 'Всі цілі та завданняя', 'tasks' ),
            'name_admin_bar' => _x( 'Цілі та завдання', 'tasks'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Цілі та завдання',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-editor-ul',
            'capability_type' => 'task',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_task',
                'read_post' => 'read_task',
                'delete_post' => 'delete_task',
                'edit_posts' => 'edit_tasks',
                'edit_others_posts' => 'edit_other_tasks',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_tasks',
                'read_private_posts' => 'read_private_tasks',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ), 
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'tasks', $args );
    }
    add_action( 'init', 'register_cpt_tasks' );


    function register_cpt_teams() {
        $labels = array( 
            'name' => _x( 'Наша команда', 'teams' ),
            'singular_name' => _x( 'Наша команда', 'teams' ),
            'add_new' => _x( 'Додати члена команди', 'teams' ),
            'add_new_item' => _x( 'Додати нового члена команди ', 'teams' ),
            'edit_item' => _x( 'Редагувати', 'teams' ),
            'new_item' => _x( 'Новий член команди', 'teams' ),
            'view_item' => _x( 'Переглянути', 'teams' ),
            'search_items' => _x( 'Пошук', 'teams' ),
            'not_found' => _x( 'Член команди не знайдений', 'teams' ),
            'not_found_in_trash' => _x( 'Член команди в корзині не знайдений', 'teams' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'teams' ),
            'all_items' => _x( 'Вся Команда', 'teams' ),
            'name_admin_bar' => _x( 'Наша команда', 'teams'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Наша команда',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 8,
            'menu_icon' => 'dashicons-groups',
            'capability_type' => 'team',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_team',
                'read_post' => 'read_team',
                'delete_post' => 'delete_team',
                'edit_posts' => 'edit_teams',
                'edit_others_posts' => 'edit_other_teams',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_teams',
                'read_private_posts' => 'read_private_teams',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ), 
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'teams', $args );
    }
    add_action( 'init', 'register_cpt_teams' );


    function register_cpt_partners() {
        $labels = array( 
            'name' => _x( 'Партнери', 'partners' ),
            'singular_name' => _x( 'Партнери', 'partners' ),
            'add_new' => _x( 'Додати партнера', 'partners' ),
            'add_new_item' => _x( 'Додати нового партнера ', 'partners' ),
            'edit_item' => _x( 'Редагувати', 'partners' ),
            'new_item' => _x( 'Новий партнер', 'partners' ),
            'view_item' => _x( 'Переглянути', 'partners' ),
            'search_items' => _x( 'Пошук', 'partners' ),
            'not_found' => _x( 'Партнер не знайдений', 'partners' ),
            'not_found_in_trash' => _x( 'Партнер в корзині не знайдений', 'partners' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'partners' ),
            'all_items' => _x( 'Всі партнери', 'partners' ),
            'name_admin_bar' => _x( 'Партнери', 'partners'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Партнери',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 9,
            'menu_icon' => 'dashicons-admin-multisite',
            'capability_type' => 'partner',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_partner',
                'read_post' => 'read_partner',
                'delete_post' => 'delete_partner',
                'edit_posts' => 'edit_partners',
                'edit_others_posts' => 'edit_other_partners',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_partners',
                'read_private_posts' => 'read_private_partners',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ), 
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'partners', $args );
    }
    add_action( 'init', 'register_cpt_partners' );

// end register custom posts types

?>