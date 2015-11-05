<?php

class A {
  public $pub = 'test';
  protected $prot = 'check';
  private $priv = 'another test';
  public $num = 5;
}

var_dump((array) new A());
