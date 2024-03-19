<h1>Dúvida {{$support->id}}</h1>
@if($errors->any())
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
@endif

<form action="{{route('supports.update', $support->id)}}" method="post">
    @csrf()
    @method('PUT')
    <input type="text" name="subject" placeholder="Assunto" value="{{$support->subject}}" >
    <textarea name="body" placeholder="Descrição" cols="30" rows="5" >{{$support->body}}</textarea>
    <button type="submit">Enviar</button>
</form>
