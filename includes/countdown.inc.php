<!-- DISPLAY THE COUNTDOWN TIMER IN AN ELEMENT -->
<div class="container countdown">
  <div class="jumbotron text-center">
    <h3>COUNTING DOWN TO</h3>
    <h4>General Election - Make your vote count for the future</h4>
          <p class="lead clock"  id="demo"></p>
  </div>
</div>


<script type="text/javascript">
  //1 SET DATE WE ARE COUNTING DOWN to
var countDownDate = new Date("Jan 14, 2022 15:37:55").getTime();

// Update the count down every 1 second
var x = setInterval(function(){
  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down DAT
  var distance = countDownDate - now;

  // Time calculations
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  // var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / (1000));

  // DISPLAY THE RESULTS IN THE ELEMENT WITH ID DEMO
  document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

  // If the countdown is fineshed, write some text
  if(distance < 0){
    clearInterval(x);

    document.getElementById("demo").innerHTML = "DUE DATE!";
  }
}, 1000);
</script>
