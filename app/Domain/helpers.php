<?php

use Illuminate\Support\HtmlString;

if (! function_exists('svg')) {
    function svg($symbol): HtmlString
    {
        return new HtmlString(
            '<svg class="svg-icon">
                <use xlink:href="' . asset("img/sprites/sprite.svg#{$symbol}") . '"></use>
            </svg>'
        );
    }
}

if (! function_exists('loop_index_by_pagination')) {
    function loop_index_by_pagination($iteration, $paginateStep = 15): int {
        $page = request('page') ? request('page') - 1 : 0;
        return (int) $page * $paginateStep + $iteration;
    }
}
