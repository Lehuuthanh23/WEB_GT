<?php

return [
    'admin-user' => [
        'title' => 'Người dùng',

        'actions' => [
            'index' => 'Người dùng',
            'create' => 'Người dùng mới',
            'edit' => 'Chỉnh sửa :name',
            'edit_profile' => 'Cập nhật thông tin cá nhân',
            'edit_password' => 'Cập nhật mật khẩu',
        ],

        'columns' => [
            'id' => "ID",
            'first_name' => "Họ",
            'last_name' => "Tên",
            'email' => "Email",
            'password' => "Mật khẩu",
            'password_repeat' => "Mật khẩu xác nhận",
            'activated' => "Đã kích hoạt",
            'forbidden' => "Ngưng kích hoạt",
            'language' => "Ngôn ngữ",
                
            //Belongs to many relations
            'roles' => "Quyền",
                
        ],
    ],

    'post' => [
        'title' => 'Tin tức',

        'actions' => [
            'index' => 'Tin tức',
            'create' => 'Bài viết mới',
            'edit' => 'Chỉnh sửa tên',
        ],

        'columns' => [
            'id' => "ID",
            'title' => "Tiêu đề",
            'perex' => "Perex",
            'published_at' => "Published at",
            'enabled' => "Enabled",
            'author_id' => "Author",
        ],

        'sort' => 'Sort posts',
    ],

    'translatable-article' => [
        'title' => 'Translatable Articles',

        'actions' => [
            'index' => 'Translatable Articles',
            'create' => 'New Translatable Article',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'title' => "Title",
            'perex' => "Perex",
            'published_at' => "Published at",
            'enabled' => "Enabled",
            
        ],
    ],

    'article' => [
        'title' => 'Tin tức',

        'actions' => [
            'index' => 'Tin tức',
            'create' => 'Tin tức mới',
            'edit' => 'Chỉnh sửa :name',
        ],

        'columns' => [
            'id' => "ID",
            'title' => "Tiêu đề",
            'perex' => "Nội dung",
            'published_at' => "Ngày tạo/ Cập nhật",
            'enabled' => "Kích hoạt",
            
        ],
    ],

    'export' => [
        'title' => 'Tuyển dụng',

        'actions' => [
            'index' => 'Tuyển dụng',
            'create' => 'Thêm',
            'edit' => 'Chỉnh sửa :name',
            'export' => 'Xuất excel',
        ],

        'columns' => [
            'id' => "ID",
            'title' => "Tiêu đề",
            'perex' => "Nội dung",
            'published_at' => "Ngày tạo/ Cập nhật",
            'enabled' => "Kích hoạt",
            
        ],
    ],

    'articles-with-relationship' => [
        'title' => 'Dự án theo danh mục',

        'actions' => [
            'index' => 'Dự án theo danh mục',
            'create' => 'Thêm dự án',
            'edit' => 'Chỉnh sửa :name',
        ],

        'columns' => [
            'id' => "ID",
            'title' => "Tiêu đề",
            'perex' => "Nội dung",
            'published_at' => "Ngày đăng/Cập nhật",
            'enabled' => "Kích hoạt",
            'author_id' => "Người đăng",
            'tags' => "Danh mục",
            
        ],
    ],

    'bulk-action' => [
        'title' => 'Mẫu thiết kế',

        'actions' => [
            'index' => 'Mẫu thiết kế',
            'create' => 'Thêm mẫu thiết kế',
            'edit' => 'Chỉnh sửa :name',
            'will_be_published' => 'BulkAction will be published at',
        ],

        'columns' => [
            'id' => "ID",
            'title' => "Tiêu đề",
            'perex' => "Nội dung",
            'published_at' => "Ngày tạo/Cập nhật",
            'enabled' => "Kích hoạt",
            
        ],
    ],

    'article' => [
        'title' => 'Tin tức',

        'actions' => [
            'index' => 'Tin tức',
            'create' => 'Tin tức mới',
            'edit' => 'Chỉnh sửa :name',
            'will_be_published' => 'Bài viết sẽ được đăng lại',
        ],

        'columns' => [
            'id' => "ID",
            'title' => "Tiêu đề",
            'perex' => "Nội dung",
            'published_at' => "Ngày tạo/ Cập nhật",
            'enabled' => "Kích hoạt",
            'updated_by_admin_user_id' => "Mới cập nhật",
            
        ],
    ],

    'tag' => [
        'title' => 'Danh mục dự án',

        'actions' => [
            'index' => 'Danh mục dự án',
            'create' => 'Thêm danh mục',
            'edit' => 'Chỉnh sửa :name',
        ],
        'columns' => [
            'id' => "ID",
            'name' => "Tên danh mục",
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
