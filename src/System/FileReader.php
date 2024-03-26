<?php

namespace App\System;

class FileReader
{
    public function read(string $filePath): string
    {
        return file_get_contents($filePath);
    }
}
