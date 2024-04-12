<?php

namespace App\Http\Requests\Property;

use Illuminate\Foundation\Http\FormRequest;

class CreatePropertyRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string',
            'bedrooms' => 'string',
            'bathrooms' => 'string',
            'price' => 'float',
            'address' => 'required|string',
            'state' => 'address|string',
            'neighbourhood' => 'required|string',
            'country' => 'string',
            'longitude' => 'string',
            'latitude' => 'string',
            'media' => 'required|string',
          ];
    }
}

$table->string('agent_id');
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->float('price');
            $table->string('address');
            $table->string('state');
            $table->string('neighbourhood')->nullable();
            $table->string('country')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('media');
            $table->boolean('is_promoted')->default(false);
            $table->date('promotion_expire_at')->nullable();
