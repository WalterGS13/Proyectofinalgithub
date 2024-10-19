<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'walterguerra780@gmail.com';  // Tu email
    public string $fromName   = 'Nombre de la App';           // Nombre que aparecerá como remitente
    public string $recipients = '';

    public string $userAgent = 'CodeIgniter';

    public string $protocol = 'smtp';                         // Protocolo SMTP

    public string $mailPath = '/usr/sbin/sendmail';

    public string $SMTPHost = 'smtp.gmail.com';         // Host SMTP de Gmail

    public string $SMTPUser = 'walterguerra780@gmail.com';    // Tu cuenta de Gmail

    public string $SMTPPass = 'aupw yoti fgsf yetk';          // Contraseña de aplicación o de tu cuenta

    public int $SMTPPort = 587;                               // Puerto para SSL (puedes cambiarlo a 587 para STARTTLS)

    public int $SMTPTimeout = 7;                              // Tiempo de espera para el SMTP

    public bool $SMTPKeepAlive = false;

    public string $SMTPCrypto = 'tls';                        // Tipo de encriptación SSL (o 'tls' si usas el puerto 587)

    public bool $wordWrap = true;

    public int $wrapChars = 76;

    public string $mailType = 'html';                         // Tipo de correo (html o text)

    public string $charset = 'UTF-8';                         // Codificación de caracteres

    public bool $validate = false;

    public int $priority = 3;

    public string $CRLF = "\r\n";

    public string $newline = "\r\n";

    public bool $BCCBatchMode = false;

    public int $BCCBatchSize = 200;

    public bool $DSN = false;
}
