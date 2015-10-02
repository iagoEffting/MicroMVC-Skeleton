<?php

return array(
  /*
   |--------------------------------------------------------------------------
   | Modo Debug
   |--------------------------------------------------------------------------
   |
   | Ao ativar este modo, o site passara a receber o stack trace e todas
   | as mensagens de erro e Notice.
   |
   */
  'debug' => true,

  /*
   |--------------------------------------------------------------------------
   | Configuração do Fuso horário
   |--------------------------------------------------------------------------
   */
  'timezone' => 'UTC',

  /*
   |--------------------------------------------------------------------------
   | Configuração de localização
   |--------------------------------------------------------------------------
   |
   |
   */
  'locale' => 'pt-BR',

  /*
   |--------------------------------------------------------------------------
   | Configuração de Controllers
   |--------------------------------------------------------------------------
   */
  'Controllers' => 'app/Http/Controllers',

  /*
   |--------------------------------------------------------------------------
   | Autoloaded Service Providers
   |--------------------------------------------------------------------------
   |
   | Os Services Providers listados aqui são automaticamente carregados nas
   | requisições para a aplicação
   |
   */
  'providers' => array(

    App\Providers\AppServiceProvider::class,
    App\Providers\AnnotationsServiceProvider::class,
  )
);