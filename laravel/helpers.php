<?php
function catalogs(): array
{
  return ['Каталог ножей', 'клинковое оружие',
    'Сувенирные изделия', 'Фонари ARMYTEK', 'Сопуствующие товары'];
}

function categories(): array
{
  return ['Категория ножей', 'Производство ножей', 'Ножи по маркам стали',
    'Заточка и полировка ножей', 'Ножевая мастерская'];
}

function subcategories(): array
{
  return [
    ['Разделочные ножи', 'Туристические ножи', 'Ножи охотничьи', 'Булатные ножи',
      'Ножи из дамаска', 'Тактического назначения', 'Метательные ножи',
      'Мачете и кукри', 'Ножи кухонные'],
    ['Ножи АИР', 'Ножи ЗИК', 'Ножи ЗЗОСС', 'Ножи РОСоружие', 'Ножи Оружейник',
      'Булат Сергея Баранова', 'Булат Андрея Умерова', 'Ножи Златко',
      'Ножи Стиль-М', 'Оружейная компания'],
    ['Ножи из стали 40х102С2М', 'Ножи из стали 95х18', 'Ножи из стали 100х13м',
      'Ножи из стали 110х18м-ШД', 'Ножи из стали ЭИ-107 ТЦ', 'Ножи из стали 50х14МФ',
      'Ножи из стали AUS-8', 'Ножи из стали К340', 'Ножи из стали M390',
      'Ножи из стали ЭП-766'],
    ['Паста ГОИ', 'Алмазная паста', 'Бруски и камни для заточки', 'Заточные системы'],
    ['Ножевые клинки', 'Заготовки для ножей', 'Литье для ножей',
      'Материалы для рукоятей', 'Уход за рукоятиями ножей'],
  ];
}

function get_factory(): array
{
  return [1 => 'ЗЗОСС', 2 => 'НИКОН', 3 => 'РОСоружие'];
}

function get_steel(): array
{
  return [1 => '95Х18', 2 => 'AUS-8', 3 => 'ELMAX'];
}

function get_handle(): array
{
  return [1 => 'Дуб', 2 => 'Кап', 3 => 'Комбинированная'];
}

function get_property_product()
{
  return [
    'id', 'name', 'vendor_code', 'product_mark', 'series', 'bonus', 'price', 'count', 'is_stock', 'delivery', 'factory',
    'steel', 'handle', 'catalog', 'category', 'subcategory','description', 'characteristic',
  ];
}

function count_subcategories(): int
{
  $count = 0;
  foreach (subcategories() as $subcategory) {
    foreach ($subcategory as $item) {
      $count++;
    }
  }
  return $count;
}






