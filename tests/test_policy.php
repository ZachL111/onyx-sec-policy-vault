<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(81, 71, 18, 21, 12);
assert(Policy::score($signal_case_1) === 92);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(99, 106, 19, 20, 4);
assert(Policy::score($signal_case_2) === 140);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(92, 71, 10, 25, 7);
assert(Policy::score($signal_case_3) === 111);
assert(Policy::classify($signal_case_3) === "review");
