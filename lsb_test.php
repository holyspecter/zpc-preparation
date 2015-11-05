<?php

class A {
  public static function test() {
    static::testB();
  }

  private static function testB() {
    echo __METHOD__ . "\n";
  }
}

class B extends A {
  // gives PHP Fatal error:  Call to private method B::testB() from context 'A'
  private static function testB() {
    echo __METHOD__ . "\n";
  }
}

B::test();
