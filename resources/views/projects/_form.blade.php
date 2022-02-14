@csrf

<h1 class="text-sky-500 font-semibold text-lg">
    {{ $h1 }}
</h1>

<hr>

@include('partials.validation-errors')

@if ($project->image)
    <img class="w-full object-cover" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
        id="preview">
@else
    <img class="w-full object-cover" src="/img/card.svg" alt="test-image" id="preview">
@endif



<label for="image" class="block">
    <input
        class="block w-full rounded-md p-1 
        file:mr-4 file:py-2 file:px-4
        file:rounded-full file:border-0
        file:text-sm file:font-semibold
        file:bg-gray-50 file:text-sky-500
        hover:file:bg-gray-200"
        type="file" name="image" id="image">
</label>

<label for="category" class="block">
    <select class="block w-full rounded-md bg-slate-200 p-1 outline-sky-500 h-8" name="category_id" id="category">
        <option value="">Seleccionar categoría</option>
        @foreach ($categories as $id => $name)
            <option value="{{ $id }}" @selected($id==old('category_id',$project->category_id))>
                {{ $name }}
            </option>
        @endforeach
    </select>
</label>

<label for="title" class="block">
    Título:
    <input class="block w-full rounded-md bg-slate-200 p-1 outline-sky-500 h-8" type="text" name="title" id="title"
        value="{{ old('title', $project->title) }}">
</label>
<label for="url" class="block">
    Url:
    <input class="block w-full rounded-md bg-slate-200 p-1 outline-sky-500 h-8" type="text" name="url" id="url"
        value="{{ old('url', $project->url) }}">
</label>
<label for="description" class="block">
    Descripción:
    <textarea class="block w-full rounded-md bg-slate-200 p-1 outline-sky-500 h-40 resize-none" name="description"
        id="description" cols="30" rows="5">{{ old('description', $project->description) }}</textarea>
</label>
<button class="bg-sky-500 text-white rounded-md p-2" type="submit">{{ $btnText }}</button>
