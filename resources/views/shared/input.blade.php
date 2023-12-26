@php

    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);
    $readonly ??= false;
@endphp
<div @class(['form-group', $class])>
    <label for="{{ $name }}"> {{ $label }} </label>
    @if ($type === 'textarea')
        <textarea
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error($name) is-invalid @enderror "type="{{ $type }}"
            name="{{ $name }}"id="{{ $name }}" @if ($readonly) @readonly(true) @endif> 
            {{ old($name, $value) }} 
        </textarea>
    @else
        <input
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error($name) is-invalid @enderror "
            type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}"
            @if ($readonly) @readonly(true) @endif>
    @endif
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
