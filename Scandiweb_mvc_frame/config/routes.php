<?php

  return [
    '/destroy$' => 'front/destroy',
    '/create$' => 'front/create',
    '/store$' => 'front/store',
    '/show/([1-9]+)$' => 'front/show/$1',
    '/' => 'front/index',
  ];
