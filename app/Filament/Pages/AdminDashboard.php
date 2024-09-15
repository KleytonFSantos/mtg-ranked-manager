<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard;

class AdminDashboard extends Dashboard
{
    protected static ?string $title = 'Dashboard';
    protected static string $routePath = 'dashboard';

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];
}
