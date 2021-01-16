<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();


// выведет последовательность 1-1-2-2.
// Класс А содержит метод foo(), в котором описана статическая переменная $x сохраняющая
// значения локальных переменных между вызовами.
// Но в свою очередь класс B наследует методы класса A (т.е. в момент создания экземпляра класса B,
// перменная $x содержит первичное значение равное 0).
//Последовательно вызывая методы экземпляров классов мы получаем: $a1 ($x=0 увеличивается на 1 = 1) $b1($x=0 увеличивается на 1 = 1)
//($x=1 увеличивается на 1 = 2) $b1($x=2 увеличиваетс1 на 1 = 2)