@csrf

@include('partials.validation-errors')

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
