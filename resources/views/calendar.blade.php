<div class="container">
    <div class="row">
        <div class="col-12">

            <h3 class="text-center mt-5">Calendar</h3>
            <div class="col-md-11 offset-1 mt-5 mb-5">

                <div id="calendar">

                </div>
        </div>
     </div>
  </div>

<script>
$(document).ready(function() {
  var booking = @json($events);
      $('#calendar').fullCalendar({
        header: {
              left: 'prev, next today',
              center: 'title',
              right: 'month, agendaWeek, agendaDay',
        }
        events : booking
      })
  });
</script>