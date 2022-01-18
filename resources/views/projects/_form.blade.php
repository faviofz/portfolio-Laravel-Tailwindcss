@csrf

<label for="title">
    Título: <br>
    <input type="text" name="title" id="title" value="{{ old('title',$project->title) }}">
</label> <br>
<label for="url">
    Url: <br>
    <input type="text" name="url" id="url" value="{{ old('url',$project->url) }}">
</label> <br>
<label for="description">
    Descripción: <br>
    <textarea name="description" id="description" cols="30"
        rows="10">{{ old('description',$project->description) }}</textarea>
</label> <br>
<button type="submit">{{ $btnText}}</button>