<?php

namespace App\Filament\Resources\FactResource\Pages;

use App\Filament\Resources\FactResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFact extends CreateRecord
{
    protected static string $resource = FactResource::class;
}
