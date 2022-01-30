@if ($errors->any())
    <ul class="text-red-500 list-disc list-inside py-2 border-b">
        @foreach ($errors->all() as $error)
            <li class="">{{ $error }}</li>
        @endforeach
    </ul>
@endif
