<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(56, 45, 28, 62);
assert(DomainReviewLens::score($item) === 135);
assert(DomainReviewLens::lane($item) === "watch");
