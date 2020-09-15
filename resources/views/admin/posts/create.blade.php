<h1>Crea un post</h1>

<form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
@csrf
@method('POST')

<div>
  <label>Titolo</label>
  <input type="text" name="title" value="{{old('title')}}">
</div>

<div>
  <label>Contenuto</label>
  <textarea name="content" rows="8" cols="80">{{old('content')}}</textarea>
</div>

<div>
  <label for="img">Immagine</label>
    <input type="file" name="image_path" accept="image/*">
</div>

<input type="submit" value="Crea">
</form>
