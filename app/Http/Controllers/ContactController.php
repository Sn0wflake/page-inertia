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
                'number' => '80/2024',  // Replace with actual license number
                'issueDate' => '25-11-2024'  // Replace with actual issue date
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
