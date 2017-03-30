<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use Renatio\FormBuilder\Models\Field;
use Renatio\FormBuilder\Models\FieldType;
use Schema;

class FixRainlabTranslateIssues extends Migration
{

    public function up()
    {
        $this->updateFieldTypes();
        $this->updateFieldsOptions();
    }

    public function down()
    {
        // nothing
    }

    protected function updateFieldTypes()
    {
        $types = FieldType::all();

        foreach ($types as $type) {
            $type->markup = str_replace('option.label', 'option.o_label', $type->markup);
            $type->markup = str_replace('option.key', 'option.o_key', $type->markup);
            $type->save();
        }
    }

    protected function updateFieldsOptions()
    {
        $fields = Field::all();

        foreach ($fields as $field) {
            if (is_array($field->options)) {
                $tempOptions = [];
                foreach ($field->options as $key => $option) {
                    $tempOptions[$key]['o_key'] = $option['key'];
                    $tempOptions[$key]['o_label'] = $option['label'];
                }

                $field->options = $tempOptions;
                $field->save();
            }
        }
    }

}