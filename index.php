<?php

Kirby::plugin('reprovinci/kirby-upload-duplicates', [
  'hooks' => [
    'file.create:after' => function ($file, $upload) {
    	$i = 1;
    	$tpl = $file->template();
    	$newname = $tpl . '-' . $file->name() . '-' . $i;
	    $newpath = str_replace('/' . $file->name(), '/' . $newname, $file->root());
    	while (F::exists($newpath)) {
    		$i++;
    		$newname = $tpl . '-' . $file->name() . '-' . $i;
	    	$newpath = str_replace('/' . $file->name(), '/' . $newname, $file->root());
    	}
    		
    	$file->changeName($newname);

    }
  ]
]);