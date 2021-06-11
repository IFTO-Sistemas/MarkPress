<form action="{{ route('events.create') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" id='title' name='title' placeholder="title">
    <br>
    <input type="text" id='description' name='description' placeholder="description">
    <br>
    <input type="text" id='content' name='content' placeholder="content">
    <br>
    <input type="text" id='date' name='date' placeholder="date">
    <br>
    <input type="text" id='time' name='time' placeholder="time">
    <br>

    <input type="submit" value='Cadastro'>

</form>
