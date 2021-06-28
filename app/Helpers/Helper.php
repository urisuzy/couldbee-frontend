<?php

namespace App\Helpers;

class Helper
{
    public function statusColor($status)
    {
        switch ($status) {
            case 'dikirim':
                return 'info';
            case 'diterima':
                return 'primary';
            case 'dibayar':
                return 'secondary';
            case 'selesai':
                return 'success';
            default:
                return 'secondary';
        }
    }
}
