<?php

namespace Luanardev\LivewireAlert;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LivewireAlertProvider extends ServiceProvider
{
   
	public function boot()
    {
        $this->registerDirectives();
        $this->registerPublishables();;
    }

    private function registerDirectives()
    {	
		Blade::directive('livewireAlertStyles', function () {
            return '<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />';
        });
		
        Blade::directive('livewireAlertScripts', function () {
            return '
				<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
				<script src="' . asset("/vendor/livewire-alert/alert.js") . '"></script>
			';
        });
	
    }

    private function registerPublishables(): void
    {
        if ($this->app->runningInConsole()) {
      
            $this->publishes([
                __DIR__ . '/../resources/js' => public_path('vendor/livewire-alert'),
            ], 'livewire-alert:scripts');
        }
    }

   
}
