<?php

namespace App\Http\Requests;


class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected $message;
    public function __construct(contactFormRequest $message)
    {
        $this->message = $message;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject(config('admin.name') . ", you got a new message!")
                    ->greeting(" ")
                    ->salutation(" ")
                    ->from($this->message->email, $this->message->name)
					->line($this->message->message);
    }
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max: 255',
            'email' => 'required|email|max: 255',
            'message' => 'required',
        ];
    }
}
