<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      Form::component('text' , 'components.forms.text', ['name' , 'value'=> null , 'attributes' => []]);
      Form::component('textarea' , 'components.forms.textarea', ['name' , 'value'=> null , 'attributes' => []]);
      Form::component('hidden' , 'components.forms.hidden', ['name' , 'value'=> null , 'attributes' => []]);
      Form::component('submit' , 'components.forms.submit', [ 'value'=> 'Submit' , 'attributes' => []]);
      Form::component('file' , 'components.forms.file', ['name' , 'attributes' => []]);
    
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
