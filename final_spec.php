<?php

class A {
  final function a() {
    echo "A\n";
  }
}

final class B extends A {
  // produces PHP Fatal error:  Cannot override final method A::a()
  // function a() {
  //   echo "B\n";
  // }
}

// class C extends B {} // produces PHP Fatal error:  Class C may not inherit from final class (B)
