<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'recipient_email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'attachment.*' => 'nullable|mimes:pdf,doc,docx|max:2048' // Validation pour les fichiers
        ]);

        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => $request->recipient_email,
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'subject' => $request->subject,
                'body' => $request->message
            ];

            // Ajout de la gestion des fichiers attachés
            if ($request->hasFile('attachment')) {
                foreach ($request->file('attachment') as $file) {
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->storeAs('attachments', $fileName); // Sauvegarde du fichier dans le dossier 'storage/app/attachments'
                    // Vous pouvez également envoyer le fichier par email ou le traiter comme nécessaire
                    $mail_data['attachments'][] = storage_path('app/attachments/' . $fileName); // Chemin du fichier pour l'email
                }
            }

            Mail::send('email-template', $mail_data, function($message) use ($mail_data) {
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'], $mail_data['fromName'])
                        ->subject($mail_data['subject']);

                // Ajout des fichiers attachés au message
                if (isset($mail_data['attachments'])) {
                    foreach ($mail_data['attachments'] as $attachment) {
                        $message->attach($attachment);
                    }
                }
            });

            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès');
        } else {
            return redirect()->back()->with('error', 'Vérifiez votre connexion internet');
        }
    }

    public function isOnline($site = "https://youtube.com/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
