<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();


// выведет последовательность 1-2-3-4.
// Класс А содержит метод foo(), в котором описана статическая переменная $x сохраняющая
// значения локальных переменных между вызовами. Поэтому независимо от того сколько будет
// вызвано экземпляров класса, переменная $x будет увеличиваться на единицу при каждлм вызове.
