@php
    $class ??= null;
    $action ??= '';
    $method ??= 'post';
    $anothermethod ??= $method;
    $token ??= true;
    $value ??= 'Edit Me';
    $argument ??= null;
@endphp


<form method="{{ $method }}" action="{{ route($action, $argument) }}">
    @if ($token)
        @csrf
        @method($anothermethod)
        <input @class([
            'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
            $class,
        ]) type="submit" value="{{ $value }}">
    @else
        <input @class([
            'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
            $class,
        ]) type="submit" value="{{ $value }}">
    @endif
</form>
