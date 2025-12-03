<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
// --- TAMBAHAN IMPORT UNTUK PDF ---
use Filament\Tables\Actions\Action;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\Collection;
// ---------------------------------

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_panggilan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_hp')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('jalur')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('programstudi_1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('programstudi_2')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_panggilan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_hp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jalur')
                    ->searchable(),
                Tables\Columns\TextColumn::make('programstudi_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('programstudi_2')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            // === 1. TOMBOL DOWNLOAD SEMUA DATA (DI ATAS TABEL) ===
            ->headerActions([
                Action::make('download_pdf')
                    ->label('Download PDF')
                    ->icon('heroicon-o-printer')
                    ->color('success')
                    ->action(function () {
                        // Ambil semua data student
                        $students = Student::all();
                        
                        // Load view pdf
                        $pdf = Pdf::loadView('pdf.students', ['students' => $students]);
                        
                        // Download
                        return response()->streamDownload(function () use ($pdf) {
                            echo $pdf->output();
                        }, 'laporan-semua-student.pdf');
                    }),
            ])
            // =====================================================
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    
                    // === 2. TOMBOL DOWNLOAD DATA TERPILIH (BULK) ===
                    Tables\Actions\BulkAction::make('export_pdf_selected')
                        ->label('Download PDF Terpilih')
                        ->icon('heroicon-o-document-arrow-down')
                        ->action(function (Collection $records) {
                            // $records berisi data yang diceklis
                            $pdf = Pdf::loadView('pdf.students', ['students' => $records]);

                            return response()->streamDownload(function () use ($pdf) {
                                echo $pdf->output();
                            }, 'laporan-student-terpilih.pdf');
                        })
                        ->deselectRecordsAfterCompletion()
                    // ===============================================
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}