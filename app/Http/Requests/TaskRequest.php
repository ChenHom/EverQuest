<?php

namespace App\Http\Requests;

use App\Enums\TaskStatus;
use App\Enums\TaskPriorities;
use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['string'],
            'status' => ['required', 'in:' . implode(',', TaskStatus::valueToArray())],
            'priority' => ['required', 'in:' . implode(',', TaskPriorities::valueToArray())],
            'due_date' => ['required', 'date'],
            'tags' => ['array'],
            'category' => ['required', 'string'],
        ];
    }
}
