<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Github extends Controller
{
    public function git()
    {
        $cmd = 'cd /data/wwwroot/default/admin4 && git pull ';
        shell_exec($cmd);
    }
}
