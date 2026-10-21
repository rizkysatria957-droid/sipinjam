<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ItemRequest extends FormRequest
{
    // Siapa yang boleh mengirim form ini.
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        
        
        $kodeUnik = Rule::unique('items', 'code')
            ->ignore($this->route('alat'));

        return [
            'category_id' => 'required|exists:categories,id',
            'code'        => ['required', 'max:20', $kodeUnik],
            'name'        => 'required|max:150',
            'stock'       => 'required|integer|min:0',
            'location'    => 'nullable|max:100',
            'description' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute wajib diisi.',
            'unique'   => ':attribute sudah dipakai.',
            'exists'   => ':attribute tidak valid.',
            'integer'  => ':attribute harus berupa angka.',
            'min'      => ':attribute minimal :min.',
            'max'      => ':attribute maksimal :max karakter.',
        ];
    }

    public function attributes(): array
    {
        return [
            'category_id' => 'Kategori',
            'code'        => 'Kode alat',
            'name'        => 'Nama alat',
            'stock'       => 'Stok',
            'location'    => 'Lokasi',
        ];
    }
}