@csrf
<label for="">Titulo</label><br>
<input type="text" name="title" value="{{old('title',$project->title)}}"> <br>
<label for="">Url</label><br>
<input type="text" name="url" value="{{old('url',$project->url)}}"><br>
<label for="">Descripcion</label><br>
<textarea name="description" id="" cols="30" rows="10">{{old('description',$project->description)}}</textarea><br>
<button>{{$btnText}}</button>