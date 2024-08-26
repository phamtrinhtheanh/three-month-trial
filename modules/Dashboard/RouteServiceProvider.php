<?php

namespace Modules\Dashboard;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $adminModuleNamespace = "Modules\Dashboard\Admin";

    public function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
    }
    public function map()
    {
        $this->mapAdminRoutes();
    }
    protected function mapAdminRoutes()
    {
        Route::middleware('web')
            ->prefix("admin/")
            ->namespace($this->adminModuleNamespace)
            ->name("dashboard.admin.")
            ->group(__DIR__ . '/Routes/admin.php');
    }

}
