<?php

return [
    'remember_me'      => '记住我',
    'login'            => '登 录',
    'logout'           => '退出登录',
    'username'         => '用户名',
    'password'         => '密码',
    'old_password'     => '旧密码',
    'confirm_password' => '确认密码',
    'captcha'          => '验证码',
    'captcha_error'    => '验证码有误',
    'required'         => '请填写:attribute',
    'login_successful' => '登录成功',
    'login_failed'     => '用户名或密码错误',
    'user_setting'     => '个人设置',
    'created_at'       => '创建时间',
    'updated_at'       => '更新时间',
    'deleted_at'       => '删除时间',
    'actions'          => '操作',
    'create'           => '新增',
    'edit'             => '编辑',
    'show'             => '查看',
    'delete'           => '删除',
    'copy'             => '复制',
    'confirm_delete'   => '确认删除选中项？',
    'back'             => '返回',
    'reset'            => '重置',
    'search'           => '搜索',
    'list'             => '列表',
    'add'              => '新增',
    'save'             => '保存',
    'detail'           => '详情',

    'developer'             => '开发',
    'code_generator'        => '代码生成器',
    'visual_editor'         => '可视化编辑器',
    'terminal'              => '终端',
    'administrator'         => '管理员',
    'soft_delete'           => '软删除',
    'keyword'               => '关键字',
    'unknown_error'         => '未知错误',
    'upload_file_error'     => '上传文件错误',
    'parent'                => '父级',
    'order'                 => '排序',
    'order_desc'            => '降序排序',
    'order_asc'             => '升序排序',
    'menus'                 => '菜单',
    'successfully'          => '成功',
    'failed'                => '失败',
    'successfully_message'  => ':attribute成功',
    'failed_message'        => ':attribute失败',
    'action_success'        => '操作成功',
    'action_failed'         => '操作失败',
    'save_success'          => '保存成功',
    'save_failed'           => '保存失败',
    'yes'                   => '是',
    'no'                    => '否',
    'need_start_with_slash' => '需要以 / 开头',
    'cancel'                => '取消',
    'please_login'          => '请先登录',
    'unauthorized'          => '无权访问',
    'user_disabled'         => '用户已被禁用',
    'preview'               => '预览',

    'code_generators' => [
        'remark1'                   => '额外参数请参考',
        'remark2'                   => '数据库迁移',
        'remark3'                   => '多个参数使用英文逗号分割',
        'table_name'                => '表名',
        'model_name'                => '模型',
        'controller_name'           => '控制器',
        'service_name'              => 'Service',
        'primary_key'               => '主键名称',
        'primary_key_description'   => '使用 increments 方法',
        'options'                   => '可选项',
        'create_database_migration' => '创建数据库迁移文件',
        'create_table'              => '创建数据表',
        'create_model'              => '创建模型',
        'create_controller'         => '创建控制器',
        'create_service'            => '创建Service',
        'app_title'                 => '功能名称',
        'column_name'               => '字段名',
        'type'                      => '类型',
        'extra_params'              => '额外参数',
        'nullable'                  => '允许空值',
        'index'                     => '索引',
        'default_value'             => '默认值',
        'comment'                   => '注释',
        'exists_table'              => '已有数据表',
        'generate_code'             => '生成代码',
        'expand_more_settings'      => '更多设置',
        'collapse_settings'         => '收起设置',
        'confirm_generate_code'     => '确认生成代码？',
        'preview'                   => '预览',
        'base_info'                 => '基本信息',
        'column_info'               => '字段信息',
        'route_config'              => '路由配置',
        'page_config'               => '页面配置',
        'gen_route_menu'            => '生成路由&菜单',
        'route'                     => '路由',
        'menu_name'                 => '菜单名称',
        'parent_menu'               => '父级菜单',
        'menu_icon'                 => '菜单图标',
        'name_label_desc'           => 'name和label属性取字段名和注释',
        'column_warning'            => '如果字段名存在 no、status 会导致 form 回显失败!',
        'add_column'                => '添加字段',
        'scope'                     => '作用域',
        'list_component'            => '列表组件',
        'list_component_desc'       => '列表组件, 默认为 TableColumn',
        'form_component'            => '表单组件',
        'form_component_desc'       => '表单组件, 默认为 TextControl',
        'detail_component'          => '详情组件',
        'detail_component_desc'     => '详情组件, 默认为 TextControl',
        'model_config'              => '模型配置',
        'file_column'               => '文件字段',
        'file_column_desc'          => '文件字段会自动在模型中添加 获取/修改器 方法',
        'preview_code'              => '预览代码',
        'property'                  => '属性',
        'property_name'             => '属性名称',
        'value'                     => '值',
        'dialog_form'               => '弹窗表单',
        'dialog_size'               => '弹窗大小',
        'copy_record'               => '复制记录',
        'copy_record_description'   => '你可以复制后分享到 <a href="https://github.com/Slowlyo/owl-admin/discussions/categories/%E4%BB%A3%E7%A0%81%E7%94%9F%E6%88%90%E8%AE%B0%E5%BD%95" target="_blank">Github</a>',
        'import_record'             => '导入记录',
        'import_record_placeholder' => '请输入导入的json记录',
        'import_record_desc'        => '你可以在 <a href="https://github.com/Slowlyo/owl-admin/discussions/categories/%E4%BB%A3%E7%A0%81%E7%94%9F%E6%88%90%E8%AE%B0%E5%BD%95" target="_blank">Github</a> 找到一些其他人分享的记录',
        'load_config'               => '加载配置',
        'load_component_config'     => '加载 :c 配置',
        'fill'                      => '填充',
        'save_current_config'       => '保存当前配置',
        'input_config_name'         => '请填写配置名称',
        'same_name_tips'            => '相同名称的配置将会被覆盖',
        'save_path_dir'             => '主应用',
        'save_path_select'          => '选择目录',
        'save_path_select_tips'     => '可选择项目根目录或插件根目录',
        'save_path_label_prefix'    => '插件 -> ',
    ],

    'admin_users' => '管理员',
    'admin_user'  => [
        'avatar'                  => '头像',
        'name'                    => '姓名',
        'roles'                   => '角色',
        'search_username'         => '搜索用户名/名称',
        'password_confirmation'   => '两次输入密码不一致',
        'old_password_required'   => '请输入原密码',
        'old_password_error'      => '原密码错误',
        'username_already_exists' => '用户名已存在',
        'cannot_delete'           => '不可删除超级管理员',
    ],

    'admin_roles' => '角色',
    'admin_role'  => [
        'name'                => '名称',
        'slug'                => '标识',
        'permissions'         => '权限',
        'slug_description'    => '角色的唯一标识, 不可重复',
        'name_already_exists' => '角色名称已存在',
        'slug_already_exists' => '角色标识已存在',
        'set_permissions'     => '设置权限',
        'cannot_delete'       => '不可删除超级管理员',
        'used'                => '不可删除正在使用的角色',
    ],

    'admin_permissions' => '权限',
    'admin_permission'  => [
        'name'                    => '名称',
        'slug'                    => '标识',
        'http_method'             => '请求方式',
        'http_method_description' => '不选则为ANY',
        'http_path'               => '路由',
        'auto_generate'           => '自动生成',
        'auto_generate_confirm'   => '权限信息会在 截断权限表&权限菜单关联表 后重新生成, 是否继续操作 ?',
        'parent_id_not_allow'     => '父级不允许设置为当前子权限',
        'name_already_exists'     => '权限名称已存在',
        'slug_already_exists'     => '权限标识已存在',
    ],

    'admin_menus' => '菜单',
    'admin_menu'  => [
        'parent_id'              => '父级',
        'order'                  => '排序',
        'title'                  => '名称',
        'icon'                   => '图标',
        'icon_description'       => '请参考',
        'url'                    => '链接',
        'visible'                => '可见',
        'type'                   => '类型',
        'iframe_description'     => '开启后页面将缓存，重新打开时不会重新加载',
        'api'                    => '页面Api',
        'api_description'        => 'schemaApi, 页面初始化请求的api, 需要与Controller中的queryPath一致',
        'keep_alive'             => '缓存页面',
        'route'                  => '路由',
        'link'                   => '外链',
        'iframe'                 => 'Iframe',
        'page'                   => '页面',
        'class_name'             => '类名',
        'class_name_description' => '菜单的CSS类名, 一般用于自定义样式',
        'show'                   => '可见',
        'hide'                   => '隐藏',
        'is_home'                => '首页',
        'is_home_description'    => '在多页签卡模式下，页面标签将固定在左侧',
        'is_full'                => '全屏',
        'is_full_description'    => '开启后将隐藏该页面的菜单栏部分',
        'parent_id_not_allow'    => '父级菜单不允许设置为当前子菜单',
        'component'              => '组件',
        'component_desc'         => '默认为 amis , 非自定义前端页面请勿修改',
        'url_exists'             => '菜单路径重复',
    ],

    'extensions'    => [
        'name_invalid'       => '无效的扩展名称',
        'exists'             => '该扩展已存在：',
        'menu'               => '扩展',
        'page_title'         => '扩展',
        'create'             => '创建',
        'install'            => '安装',
        'create_extension'   => '创建扩展',
        'create_tips'        => '创建成功后会在<br><b>:dir</b><br>目录下创建基础的扩展目录结构',
        'local_install'      => '本地安装',
        'more_extensions'    => '更多扩展',
        'setting'            => '设置',
        'enable'             => '启用',
        'enable_confirm'     => '确定要启用该扩展吗？',
        'disable'            => '禁用',
        'disable_confirm'    => '确定要禁用该扩展吗？',
        'uninstall'          => '卸载',
        'uninstall_confirm'  => '
<div class="text-danger">
确认卸载该扩展?<br>
卸载将会删除启用扩展后发布的所有文件及数据库, 且不可找回!!!<br>
如有重要数据请备份后再操作!!!<br>
<span class="text-info">扩展包文件将不会被删除, 请手动删除!!!</span>
</div>
',
        'filter_placeholder' => '输入扩展名称',
        'form'               => [
            'create_extension'   => '创建扩展',
            'name'               => '名称',
            'namespace'          => '命名空间',
            'create_description' => '创建成功后会在 :dir 目录下创建基础的扩展目录结构',
        ],
        'card'               => [
            'author'   => '作者',
            'version'  => '版本',
            'homepage' => '主页',
            'status'   => '状态',
        ],
        'status_map'         => [
            'enabled'  => '已启用',
            'disabled' => '已禁用',
        ],
        'validation'         => [
            'file'            => '请选择文件',
            'invalid_package' => '无效的扩展包',
        ],
    ],
    'export'        => [
        'title'                        => '导出',
        'all'                          => '全部',
        'page'                         => '本页',
        'selected_rows'                => '选中行',
        'page_no_data'                 => '本页无数据',
        'selected_rows_no_data'        => '请选择要导出的数据',
        'please_install_laravel_excel' => '请先安装 rap2hpoutre/fast-excel 扩展',
    ],
    'pages'         => [
        'menu'                   => '页面管理',
        'title'                  => '名称',
        'sign'                   => '标识',
        'page'                   => '页面结构',
        'schema_cannot_be_empty' => '页面结构不可为空',
        'sign_exists'            => '页面标识已存在',
    ],
    'relationships' => [
        'menu'            => '动态关联',
        'model'           => '模型',
        'title'           => '名称',
        'remark'          => '备注',
        'generate_model'  => '生成模型',
        'generate'        => '生成',
        'args'            => '参数',
        'type'            => '类型',
        'related_model'   => '关联模型',
        'through_model'   => '中间模型',
        'model_exists'    => '模型已存在: ',
        'rel_name_exists' => '该模型下存在同名关联',
    ],
    'apis'          => [
        'menu'                  => '动态API',
        'title'                 => '名称',
        'path'                  => '路径',
        'template'              => '模板',
        'enabled'               => '是否启用',
        'args'                  => '参数',
        'path_exists'           => '接口路径已存在',
        'template_format_error' => '模板格式错误',
        'template_exists'       => '模板已存在',
    ],
    'api_templates' => [
        'data_list'   => '获取列表(分页)',
        'data_create' => '新增数据',
        'data_update' => '更新数据',
        'data_delete' => '删除数据',
        'data_detail' => '获取详情',
    ],
];
