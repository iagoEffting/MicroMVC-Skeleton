<?php

return array(
  /*
   |--------------------------------------------------------------------------
   | Modo Template
   |--------------------------------------------------------------------------
   |
   | Ao ativar esse modulo, o aplicativo irá tratar primeiramente o template
   | e depois irá chamar dentro dele a view, utilizando o método $this->content().
   |
   */
    'template_view' => true,

  /*
   |--------------------------------------------------------------------------
   | Configuração de Template File
   |--------------------------------------------------------------------------
   |
   | Caminho que os arquivos de View estarão
   |
   */
    'template_file' => 'resources/views/template.php',

  /*
   |--------------------------------------------------------------------------
   | Configuração de Views
   |--------------------------------------------------------------------------
   |
   | Caminho que os arquivos de View estarão
   |
   */
    'path_views' => 'resources/views',
);
