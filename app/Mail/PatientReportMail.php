<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PatientReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $patient;
    public $pdfContent;
    public $fileName;

    /**
     * Create a new message instance.
     */
    public function __construct($patient, $pdfContent, $fileName)
    {
        $this->patient = $patient;
        $this->pdfContent = $pdfContent;
        $this->fileName = $fileName;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.patient_report')
            ->subject((app()->getLocale() == 'ar' ? 'تقرير المريضة: ' : 'Patient Report: ') . $this->patient->name)
            ->attachData($this->pdfContent, $this->fileName, [
                'mime' => 'application/pdf',
            ]);
    }
}
