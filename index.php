<?php

Kirby::plugin('reprovinci/kirby-upload-duplicates', [
  'hooks' => [
    'file.create:before' => function ($file, $upload) {
      // your code goes here
    }
  ]
]);
  
