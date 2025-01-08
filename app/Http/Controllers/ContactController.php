<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('Public/Contact', [
            'licenseInfo' => [
                'number' => '123456',  // Replace with actual license number
                'issueDate' => '2024-01-01'  // Replace with actual issue date
            ]
        ]);
    }

    public function downloadPdf($id)
    {
        $path = storage_path('app/public/licenses/license.pdf');

        if (!file_exists($path)) {
            abort(404, 'PDF file not found');
        }

        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="license.pdf"'
        ]);
    }
}
