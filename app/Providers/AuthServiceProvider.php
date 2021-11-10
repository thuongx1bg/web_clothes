<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //settings
        Gate::define('setting_list', function (User $user) {
            return ($user->checkPermisstionsAccess('list_setting'));
        });
        Gate::define('setting_add', function (User $user) {
            return $user->checkPermisstionsAccess('add_setting');
        });
        Gate::define('setting_edit', function (User $user) {
            return $user->checkPermisstionsAccess('edit_setting');
        });
        Gate::define('setting_delete', function (User $user) {
            return $user->checkPermisstionsAccess('delete_setting');
        });

        //slider
        Gate::define('slider_list', function (User $user) {
            return $user->checkPermisstionsAccess('list_slider');
        });
        Gate::define('slider_add', function (User $user) {
            return $user->checkPermisstionsAccess('add_slider');
        });
        Gate::define('slider_edit', function (User $user) {
            return $user->checkPermisstionsAccess('edit_slider');
        });
        Gate::define('slider_delete', function (User $user) {
            return $user->checkPermisstionsAccess('delete_slider');
        });

        //category
        Gate::define('category_list', function (User $user) {
            return $user->checkPermisstionsAccess('list_category');
        });
        Gate::define('category_add', function (User $user) {
            return $user->checkPermisstionsAccess('add_category');
        });
        Gate::define('category_edit', function (User $user) {
            return $user->checkPermisstionsAccess('edit_category');
        });
        Gate::define('category_delete', function (User $user) {
            return $user->checkPermisstionsAccess('delete_category');
        });

        //product
        Gate::define('product_list', function (User $user) {
            return $user->checkPermisstionsAccess('list_product');
        });
        Gate::define('product_add', function (User $user) {
            return $user->checkPermisstionsAccess('add_product');
        });
        Gate::define('product_edit', function (User $user) {
            return $user->checkPermisstionsAccess('edit_product');
        });
        Gate::define('product_delete', function (User $user) {
            return $user->checkPermisstionsAccess('delete_product');
        });

        //order
        Gate::define('order_list', function (User $user) {
            return $user->checkPermisstionsAccess('list_order');
        });
        Gate::define('order_see', function (User $user) {
            return $user->checkPermisstionsAccess('see_order');
        });
        Gate::define('order_delete', function (User $user) {
            return $user->checkPermisstionsAccess('delete_order');
        });

        //user
        Gate::define('user_list', function (User $user) {
            return $user->checkPermisstionsAccess('list_user');
        });
        Gate::define('user_add', function (User $user) {
            return $user->checkPermisstionsAccess('add_user');
        });
        Gate::define('user_edit', function (User $user) {
            return $user->checkPermisstionsAccess('edit_user');
        });
        Gate::define('user_delete', function (User $user) {
            return $user->checkPermisstionsAccess('delete_user');
        });

        //role
        Gate::define('role_list', function (User $user) {
            return $user->checkPermisstionsAccess('list_role');
        });
        Gate::define('role_add', function (User $user) {
            return $user->checkPermisstionsAccess('add_role');
        });
        Gate::define('role_edit', function (User $user) {
            return $user->checkPermisstionsAccess('edit_role');
        });
        Gate::define('role_delete', function (User $user) {
            return $user->checkPermisstionsAccess('delete_role');
        });

    }
}
