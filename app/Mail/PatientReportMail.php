<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PatientReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $patient;

    public $clinic;

    public $pdfContent;

    public $fileName;

    /**
     * Create a new message instance.
     */
    public function __construct($patient, $pdfContent, $fileName)
    {
        $patient->loadMissing('clinic');

        $this->patient = $patient;
        $this->clinic = $patient->clinic;
        $this->pdfContent = $pdfContent;
        $this->fileName = $fileName;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $clinicName = $this->clinic->name;
        $patientName = $this->patient->name;

        $subject = app()->getLocale() == 'ar'
            ? "تقرير المريضة: {$patientName} — {$clinicName}"
            : "Patient Report: {$patientName} — {$clinicName}";

        return $this->view('emails.patient_report')
            ->subject($subject)
            ->attachData($this->pdfContent, $this->fileName, [
                'mime' => 'application/pdf',
            ]);
    }
}
