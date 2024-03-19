<h1>Nova dúvida</h1>
@if($errors->any())
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
@endif
<form action="{{route('supports.store')}}" method="post">
    @csrf()
    <input type="text" name="subject" placeholder="Assunto" value="{{old('subject')}}">
    <textarea name="body" placeholder="Descrição" cols="30" rows="5" >{{old('body')}}</textarea>
    <button type="submit">Enviar</button>
</form>
