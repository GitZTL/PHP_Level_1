<?php
//  1)
/*
Класс "Товары"
	2)	свойства: название;
				  цена;
				  производитель;

	3)	методы:   продать();
				  получить_скидку();

	4)  Наследники класса:

наследник №1 "Продукты":
к свойствам класса-родителя добавляем:
				  
				  срок_годности;
				  состав;

к методам класса-родителя добавляем:
				  
				  стоимость_от_веса();
				  стоимость_от_срока_годности()		

наследник №2 "Одежда":
к свойствам класса-родителя добавляем:
				  
				  размер;
				  цвет;

к методам класса-родителя добавляем:
				  
				  сезонная_распродажа();
				  отложить();
				  				  

*/

// 5)

class A {
    public function foo() {
        static $x = 0; // статическое свойство находится внутри метода, поэтому к нему есть доступ
        echo ++$x; // перед выводом значение увеличивается не единицу
    }
}
$a1 = new A();
$a2 = new A();
$a3 = new A();
$a1->foo(); // 1
$a2->foo(); // 2 значение $х не обнуляется, при каждом выводе увеличивается на единицу
$a1->foo(); // 3 значение $х не обнуляется
$a2->foo(); // 4 значение $х не обнуляется
$a3->foo(); // 5

// 6)

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
$a1->foo(); // 1
$b1->foo(); // 1 - т.к. $х вызывается уже из класса "B", а не из "А"
$a1->foo(); // 2 - $x не обнуляется, поэтому при выводе он уже равен 2 (из класса B - это второй вывод => $x = 2)
$b1->foo(); // 2 - $x не обнуляется, поэтому при выводе он уже равен 2 (из класса А - это второй вывод => $x = 2)


// 7)

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;  // отсутствие скобок не повлияло на результат
$b1 = new B; // отсутствие скобок не повлияло на результат
$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2

?>