<?php

namespace Renatio\FormBuilder\Updates;

use Backend\Models\User;
use Exception;
use File;
use Renatio\FormBuilder\Models\Form;
use Seeder;
use System\Models\MailLayout;
use System\Models\MailTemplate;

class SeedDefaultForm extends Seeder
{

    public function run()
    {
        $this->assignLayoutToTemplate();

        $this->createDefaultForm();
    }

    protected function assignLayoutToTemplate()
    {
        try {
            $layout = MailLayout::where('code', 'form_builder')
                ->firstOrFail();

            $template = MailTemplate::where('code', 'renatio.formbuilder::mail.default')
                ->firstOrFail();

            $template->layout()->associate($layout);
            $template->save();

        } catch (Exception $e) {
        }
    }

    protected function createDefaultForm()
    {
        try {
            $template = MailTemplate::where('code', 'renatio.formbuilder::mail.default')
                ->firstOrFail();

            $form = $this->createForm($template);

            $this->createFields($form);
        } catch (Exception $e) {
        }
    }

    protected function createForm($template)
    {
        $admin = User::find(1);

        return Form::create([
            'template' => $template,
            'name' => 'Default Form',
            'code' => 'renatio.formbuilder::default',
            'description' => 'Renders default form with all available system fields.',
            'to_email' => $admin ? $admin->email : 'admin@domain.tld',
            'to_name' => $admin ? $admin->full_name : 'Admin Person',
            'success_message' => 'Message was sent successfully!',
            'error_message' => 'There was an error. Please try again!',
        ]);
    }

    protected function createFields($form)
    {
        foreach ($this->fields() as $field) {
            $form->fields()->create([
                'field_type_id' => $field['type'],
                'label' => $field['label'],
                'name' => $field['name'],
                'validation' => ! empty($field['validation']) ? $field['validation'] : null,
                'placeholder' => ! empty($field['placeholder']) ? $field['placeholder'] : null,
                'options' => ! empty($field['options']) ? $field['options'] : null,
            ]);
        }
    }

    protected function fields()
    {
        return [
            [
                'type' => 1,
                'label' => 'Text',
                'name' => 'text',
                'validation' => 'required',
            ],
            [
                'type' => 3,
                'label' => 'Dropdown',
                'name' => 'dropdown',
                'options' => $this->options(),
                'placeholder' => '-- choose --',
                'validation' => 'required',
            ],
            [
                'type' => 4,
                'label' => 'Checkbox',
                'name' => 'checkbox',
                'validation' => 'required',
            ],
            [
                'type' => 5,
                'label' => 'Checkbox list',
                'name' => 'checkbox_list',
                'options' => $this->options(),
                'validation' => 'required',
            ],
            [
                'type' => 6,
                'label' => 'Radio list',
                'name' => 'radio_list',
                'options' => $this->options(),
                'validation' => 'required',
            ],
            [
                'type' => 10,
                'label' => 'Country select',
                'name' => 'country',
                'validation' => 'required',
                'placeholder' => '-- choose --',
            ],
            [
                'type' => 11,
                'label' => 'State select',
                'name' => 'state',
                'validation' => 'required',
                'placeholder' => '-- choose --',
            ],
            [
                'type' => 2,
                'label' => 'Textarea',
                'name' => 'textarea',
                'validation' => 'required',
            ],
            [
                'type' => 9,
                'label' => 'File uploader',
                'name' => 'files',
            ],
            [
                'type' => 7,
                'label' => 'reCaptcha',
                'name' => 'g-recaptcha-response',
                'validation' => 'required|recaptcha',
            ],
            [
                'type' => 8,
                'label' => 'Send',
                'name' => 'submit',
            ],
        ];
    }

    protected function options()
    {
        return [
            '1' => [
                'key' => 'option_1',
                'label' => 'Option 1'
            ],
            '2' => [
                'key' => 'option_2',
                'label' => 'Option 2'
            ]
        ];
    }

}