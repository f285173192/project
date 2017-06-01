//一些artisan 命令 composer命令（更新中）
 php artisan make:middleware Oldmiddleware 创建中间件
 php artisan migrate创建迁移文件中的表
 php artisan migrate:refresh刷新数据库中的表
 php artisan make:migration create_comments_table //创建迁移文件
 php artisan make:seed ReplyTableSeeder//创建填充表数据文件
 php artisan migrate:refresh//刷新数据表
 php artisan make:seeder commentSeeder//创建填充文件在//database/seed中
 php artisan db:seed --class=表名称 //注入数据 
 php artisan db:seed 在seeds/DatabaseSeeder.php中添加代码后直接执行填充数据

php artisan make:controller daController --plain创建控制器 --plain 去掉默认的方法
php artisan make:model  Models/Goods创建模型
php artisan make:model  Models/Goods -m 创建model模型和同时创建数据库迁移文件
php artisan session:table //创建session迁移文件
composer dump-auto 自动引入自定义函数文件
composer create-project laravel/laravel 目录名 --prefer-dist "5.1.*" //composer安装laravel框架
composer require barryvdh/laravel-debugbar添加调试工具
composer dump-autoload //刷新 autoload 规则



//session用法总结（更新中）
//把变量写入session  用时反射$request
$request->session()->put('username',$username);

//判断session是否存在
$request->session()->has('username')

//清除session
$request->session()->forget('username');
$request->session()->flush();