<?php

namespace App\Jobs;

use App\Models\Proyecto;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProyectoCreadoMail;

class ProyectoCreado implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public string $email,
        public Proyecto $proyecto
    ){}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Enviar un mail del nuevo proyecto creado
        Mail::to($this->email)
            ->send(new ProyectoCreadoMail($this->proyecto));
    }
}
