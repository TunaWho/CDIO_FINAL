<?php

function uploadImageBase64($folder, $thumbnail)
{
    list($extension, $content) = explode(';', $thumbnail);
    $tmpExtension = explode('/', $extension);
    preg_match('/.([0-9]+) /', microtime(), $m);
    $fileName = sprintf('%s/%s.%s', $folder, str_random(), $tmpExtension[1]);
    $content = explode(',', $content)[1];
    $storage = Storage::disk();

    $checkDirectory = $storage->exists($folder);
    if (!$checkDirectory) {
        $storage->makeDirectory($folder);
    }

    $storage->put($fileName, base64_decode($content));

    return $fileName;
}
