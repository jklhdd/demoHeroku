<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::directive('convert', function ($money) {
            return "<?php echo number_format($money, 2); ?>";
        });

        Blade::directive('pay_method', function ($pay_method) {
            switch ($pay_method) {
                case 'cod':
                    return "<?php echo 'Cash On Delivery'; ?>";

                case 'bank_transfer':
                    return "<?php echo 'Bank Transfer Payment'; ?>";

                case 'paypal':
                    return "<?php echo 'Through Paypal'; ?>";
            }
        });

        Blade::directive('status', function ($status) {
            switch ($status) {
                case '0':
                    $status = 'Pending';
                    break;

                case '1':
                    $status = 'Process';
                    break;

                case '2':
                    $status = 'Shipping';
                    break;

                case '3':
                    $status = 'Completed';
                    break;

                case '4':
                    $status = 'Cancelled';
                    break;
            }
            return "<?php echo $status; ?>";
        });
    }
}
