<?php
function areaCalculation_triangle($bottom, $height) {
    $area = $bottom * $height / 2;
    return $area;
}

function areaCalculation_square($side) {
    $area = $side * $side;
    return $area;
}

function areaCalculation_trapezoid($top, $bottom, $height) {
    $area = ($top + $bottom) * $height / 2;
    return $area;
}

echo areaCalculation_triangle(5, 3) . '<br />';

echo areaCalculation_square(5) . '<br />';

echo areaCalculation_trapezoid(3, 5, 4) . '<br />';