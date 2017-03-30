<?php

namespace Renatio\FormBuilder\Updates;

use Backend\Models\User;
use Exception;
use File;
use Renatio\FormBuilder\Models\Form;
use Seeder;
use System\Models\MailLayout;
use System\Models\MailTemplate;

class SeedContactForm extends Seeder
{

    public function run()
    {
        $layout = $this->createMailLayout();

        $this->assignLayoutToTemplate($layout);

        $this->createContactForm();
    }

    protected function createMailLayout()
    {
        MailLayout::where('code', 'form_builder')->delete();

        $path = __DIR__ . '/mail/layouts/form_builder/';

        return MailLayout::forceCreate([
            'name' => 'Form Builder Default Layout',
            'code' => 'form_builder',
            'content_html' => File::get($path . 'markup.htm'),
            'content_text' => File::get($path . 'plain.txt'),
            'content_css' => File::get($path . 'style.css')
        ]);
    }

    protected function assignLayoutToTemplate(MailLayout $layout)
    {
        try {
            $template = MailTemplate::where('code', 'renatio.formbuilder::mail.contact')
                ->firstOrFail();

            $template->layout()->associate($layout);
            $template->save();
        } catch (Exception $e) {
        }
    }

    protected function createContactForm()
    {
        try {
            $template = MailTemplate::where('code', 'renatio.formbuilder::mail.contact')
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
            'name' => 'Contact Form',
            'code' => 'renatio.formbuilder::contact',
            'description' => 'Renders contact form.',
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
                'validation' => $field['validation'],
            ]);
        }
    }

    protected function fields()
    {
        return [
            [
                'type' => 1,
                'label' => 'Name',
                'name' => 'name',
                'validation' => 'required',
            ],
            [
                'type' => 1,
                'label' => 'Subject',
                'name' => 'subject',
                'validation' => 'required',
            ],
            [
                'type' => 1,
                'label' => 'E-mail',
                'name' => 'email',
                'validation' => 'required|email',
            ],
            [
                'type' => 1,
                'label' => 'Phone',
                'name' => 'phone',
                'validation' => null,
            ],
            [
                'type' => 2,
                'label' => 'Message',
                'name' => 'content_message',
                'validation' => 'required',
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
                'validation' => null,
            ],
        ];
    }

}