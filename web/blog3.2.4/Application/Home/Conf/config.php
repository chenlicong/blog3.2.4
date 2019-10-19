<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING'  =>array(
        '__PUBLIC__' => '/public', // 更改默认的/Public 替换规则
        '__UPLOAD__' => '/uploads', // 增加新的上传路径替换规则
        '__JS__' => '/public/static/home/js', // js路径替换规则
        '__CSS__' => '/public/static/home/css', // css路径替换规则
        '__IMAGES__' => '/public/static/home/images', // images路径替换规则
        '__PLUGIN__' => '/public/static/plugin', // 增加plugin
    )
);