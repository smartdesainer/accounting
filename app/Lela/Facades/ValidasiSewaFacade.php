<?php namespace Lela\Facades;

use Illuminate\Support\Facades\Facade;

class ValidasiSewaFacade extends Facade {

  protected static function getFacadeAccessor()
  {
    return 'validasi_sewa';
  }

}