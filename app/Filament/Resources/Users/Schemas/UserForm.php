<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->required(),
                TextInput::make('company_name')
                    ->default(null),
                TextInput::make('pan')
                    ->default(null),
                TextInput::make('company_registration')
                    ->default(null),
                TextInput::make('latest_tax_clearance')
                    ->default(null),
                TextInput::make('pan_vat_certificate')
                    ->default(null),
                TextInput::make('contact_number')
                    ->default(null),
                TextInput::make('contact_number_2')
                    ->default(null),
                TextInput::make('address')
                    ->default(null),
                TextInput::make('website')
                    ->default(null),
                TextInput::make('business_role')
                    ->required()
                    ->default('mrp'),
                Select::make('role')
                    ->options(['admin' => 'Admin', 'user' => 'User'])
                    ->default('user')
                    ->required(),
            ]);
    }
}
