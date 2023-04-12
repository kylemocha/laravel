<h1>Update Journal</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$user['id']}}>
<label name="title">Title:</label>
<input type="text" name="title" value={{$user['title']}}>
<label name="msg">Message:</label>
<input type="text" name="message" value={{$user['message']}}>
<button type="submit">Update</button>

</form>