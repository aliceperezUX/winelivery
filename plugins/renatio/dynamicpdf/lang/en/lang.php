<?php

return [
    'plugin' => [
        'name' => 'DynamicPDF',
        'description' => 'Generate dynamic and customized PDFs.',
    ],
    'templates' => [
        'label' => 'Templates',
        'code' => 'Code',
        'title' => 'Title',
        'description' => 'Description',
        'layout' => 'Layout',
        'empty_option' => '-- No layout --',
        'code_comment' => 'Unique code used to refer to this template',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'name' => 'Name',
        'return' => 'Return to pdf templates list',
        'new_template' => 'New Template',
        'new_layout' => 'New Layout',
        'templates' => 'Templates',
        'layouts' => 'Layouts',
        'delete_alert' => 'Do you really want to delete this template?',
        'background_img' => 'Background Image',
        'preview_html' => 'Preview HTML',
        'preview_pdf' => 'Preview PDF',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'background_img_comment' => 'Use image with 96 DPI for correct display'
    ],
    'template' => [
        'menu_label' => 'Template',
        'create_template' => 'Create Template',
        'edit_template' => 'Edit Template',
    ],
    'layouts' => [
        'label' => 'Layouts',
        'return' => 'Return to layouts list',
        'delete_alert' => 'Do you really want to delete this layout?',
    ],
    'layout' => [
        'menu_label' => 'Layout',
        'create_layout' => 'Create Layout',
        'edit_layout' => 'Edit Layout',
    ],
    'settings' => [
        'description' => 'Manage templates and layouts.',
    ],
    'permissions' => [
        'manage_templates' => 'Manage templates',
        'manage_layouts' => 'Manage layouts',
        'tab' => 'PDF',
    ],
    'menu' => [
        'label' => 'PDF'
    ]
];