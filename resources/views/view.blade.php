<div class="update-box">
    <h1>Share Journal</h1>
    
        <a href="{{ url('home_user') }}" class="btn btn-danger float-end">BACK</a><br>

      <form action="{{ url('insertjournal/'.$users->id) }}" method="POST">
         @csrf
     <label name="title">Title</label><br>
     <input type="text" name="title" value={{$users['title']}} readonly><br>

     <label name="msg">Name</label><br>
     <input type="text" name="User_name" value={{$users['User_name']}} readonly><br>
  
     <label name="msg">Message</label><br>
     <input type="text" name="message" value={{$users['message']}} readonly><br>

     <label name="date">Date created</label><br>
     <input type="text" name="JournalDate" value={{$users['JournalDate']}} readonly><br>
    
     <label name="therapist">Share to:</label><br>
     <select id="therapist" name="therapist"><br>
      @foreach ($meeps as $meep)  
        <option value="{{ $meep->id }}, {{ $meep->name }}">{{ $meep->name }}</option>
      @endforeach 
    </select><br>

     <button type="submit">Share</button>
    
     </form>
</div>
    