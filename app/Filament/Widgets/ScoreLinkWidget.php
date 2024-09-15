<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class ScoreLinkWidget extends Widget
{
    protected static ?int $sort = -3;

    protected static bool $isLazy = false;


    protected static string $view = 'score-link';
}
