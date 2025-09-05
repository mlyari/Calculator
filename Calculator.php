<?php
// Простая функция калькулятора
function calc($a, $b, $op) {
    if ($op == "+") return $a + $b;
    if ($op == "-") return $a - $b;
    if ($op == "*") return $a * $b;
    if ($op == "/") {
        if ($b == 0) return "Ошибка: деление на ноль";
        return $a / $b;
    }
    return "Неизвестная операция";
}

echo calc(10, 10, "-");

// Выводит в терминал 0