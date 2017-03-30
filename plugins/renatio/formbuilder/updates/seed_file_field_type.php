<?php

namespace Renatio\FormBuilder\Updates;

use File;
use Renatio\FormBuilder\Models\FieldType;
use Seeder;

class SeedFileFieldType extends Seeder
{

    public function run()
    {
        $this->createFileUploaderFieldType();
    }

    protected function createFileUploaderFieldType()
    {
        return FieldType::create([
            'name' => 'File uploader',
            'code' => 'file_uploader',
            'description' => 'Renders a file uploader for regular files.',
            'markup' => File::get(__DIR__ . '/fields/_file_uploader.htm')
        ]);
    }

}