php artisan tinker
factory(App\User::class,30)->create()
factory(App\Discussion::class,30)->create()

 
 php artisan make:controller PostsController --api
