<?php

  return [
    '/filter' => 'filter/delete',
    '/destroy/([1-9]+)' => 'front/destroy/$1',
    '/edit/([1-9]+)' => 'front/edit/$1',
    '/update/([1-9]+)' => 'front/update/$1',
    '/create' => 'front/create',
    '/store' => 'front/store',
    '/' => 'front/index',
  ];
