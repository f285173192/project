//һЩartisan ���� composer��������У�
 php artisan make:middleware Oldmiddleware �����м��
 php artisan migrate����Ǩ���ļ��еı�
 php artisan migrate:refreshˢ�����ݿ��еı�
 php artisan make:migration create_comments_table //����Ǩ���ļ�
 php artisan make:seed ReplyTableSeeder//�������������ļ�
 php artisan migrate:refresh//ˢ�����ݱ�
 php artisan make:seeder commentSeeder//��������ļ���//database/seed��
 php artisan db:seed --class=������ //ע������ 
 php artisan db:seed ��seeds/DatabaseSeeder.php����Ӵ����ֱ��ִ���������

php artisan make:controller daController --plain���������� --plain ȥ��Ĭ�ϵķ���
php artisan make:model  Models/Goods����ģ��
php artisan make:model  Models/Goods -m ����modelģ�ͺ�ͬʱ�������ݿ�Ǩ���ļ�
php artisan session:table //����sessionǨ���ļ�
composer dump-auto �Զ������Զ��庯���ļ�
composer create-project laravel/laravel Ŀ¼�� --prefer-dist "5.1.*" //composer��װlaravel���
composer require barryvdh/laravel-debugbar��ӵ��Թ���
composer dump-autoload //ˢ�� autoload ����



//session�÷��ܽᣨ�����У�
//�ѱ���д��session  ��ʱ����$request
$request->session()->put('username',$username);

//�ж�session�Ƿ����
$request->session()->has('username')

//���session
$request->session()->forget('username');
$request->session()->flush();