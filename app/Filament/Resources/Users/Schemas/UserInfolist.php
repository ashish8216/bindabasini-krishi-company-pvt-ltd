<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('email_verified_at')
                    ->dateTime(),
                TextEntry::make('company_name'),
                TextEntry::make('pan'),
                TextEntry::make('company_registration'),
                TextEntry::make('latest_tax_clearance'),
                TextEntry::make('pan_vat_certificate'),
                TextEntry::make('contact_number'),
                TextEntry::make('contact_number_2'),
                TextEntry::make('address'),
                TextEntry::make('website'),
                TextEntry::make('business_role'),
                TextEntry::make('role'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
