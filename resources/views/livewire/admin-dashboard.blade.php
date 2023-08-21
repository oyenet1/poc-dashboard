<div class="grid w-full gap-8 p-8 mx-auto xl:p-8 2xl:p-10 xl:gap-8 2xl:gap-10">

  <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4 xl:gap-8 2xl:gap-10">
    @foreach ($states as $state)
    <x-board color="green-600" name="{{ $state->name }}" digit="{{ $state->services }}">

      {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-journal-richtext 2xl:w-8 2xl:h-8"
        viewBox="0 0 16 16">
        <path
          d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
        <path
          d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
        <path
          d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
      </svg> --}}
    </x-board>
    @endforeach

  </div>
  <div class="">
    <div class="col-md-3">
      <span id="count1" class="display-4"></span>
    </div>
    <div class="col-md-3">
      <span id="count2" class="display-4"></span>
    </div>
    <div class="col-md-3">
      <span id="count3" class="display-4"></span>
    </div>
    <div class="col-md-3">
      <span id="count4" class="display-4"></span>
    </div>
  </div>
  <div class="grid gap-8 lg:grid-cols-2 xl:gap-8 2xl:gap-10">
    <div class="p-8 bg-white rounded shadow-sm col-span-2">
      <canvas id="myChart" class="w-full h-full"></canvas>
    </div>
    <div class="p-8 bg-white rounded shadow-sm col-span-2">
      <canvas id="pieChart" class="w-full h-full"></canvas>
    </div>
  </div>
  <div class="grid gap-8">
    <div class="p-8 bg-white rounded shadow-sm">
      <canvas id="lineChart" class="w-full h-full"></canvas>
    </div>
  </div>
</div>

@push('scripts')
<script>
  var xValues = ["January"
  , "February"
  , "March"
  , "April"
  , "May"
  , "June"
  , "July"
  , "August"
  , "September"
  , "October"
  , "November"
  , "December"
 , ];
 var yValues = [55, 49, 44, 24, 15, 12, 56, 78, 5, 34, 67, 90];
 var barColors = "#199f47";

 new Chart("myChart", {
  type: "bar"
  , data: {
   labels: xValues
   , datasets: [{
    backgroundColor: barColors
    , data: yValues
   , }, ]
  , }
  , options: {
   title: {
    display: true
    , text: "{{ strtoupper('Consulatation data') }}"
   , },

  }
 , });

</script>
<script>
  var xValues = ["{{ fake()->name }}", "{{ fake()->name }}", "{{ fake()->name }}", "{{ fake()->name }}"
  , "{{ fake()->name }}", "{{ fake()->name }}", "{{ fake()->name }}"
  , "{{ fake()->name }}", "{{ fake()->name }}"
 ];
 var yValues = [55, 49, 44, 24, 15, 12, 56, 78, 5, 34, 67, 90];
 var barColors = ["#199f47", '#f98677', '#f9f677', '#398677', '#a9ff77', '#398ff7'
  , "#b91d47"
  , "#00aba9"
  , "#2b5797"
  , "#e8c3b9"
  , "#1e7145"
 ];

 new Chart("pieChart", {
  type: "pie"
  , data: {
   labels: xValues
   , datasets: [{
    backgroundColor: barColors
    , data: yValues
   , }, ]
  , }
  , options: {
   title: {
    display: true
    , text: "{{ strtoupper('Sales peformance of author') }}"
   , },

  }
 , });

</script>
<script>
  //#region - start of - number counter animation
 const counterAnim = (qSelector, start = 0, end, duration = 2000) => {
  const target = document.querySelector(qSelector);
  let startTimestamp = null;
  const step = (timestamp) => {
   if (!startTimestamp) startTimestamp = timestamp;
   const progress = Math.min((timestamp - startTimestamp) / duration, 1);
   target.innerText = Math.floor(progress * (end - start) + start);
   if (progress < 1) {
    window.requestAnimationFrame(step);
   }
  };
  window.requestAnimationFrame(step);
 };
 //#endregion - end of - number counter animation

 document.addEventListener("DOMContentLoaded", () => {
  counterAnim("#count1", 10, 300, 1000);
  counterAnim("#count2", 5000, 250, 1500);
  counterAnim("#count3", -1000, -150, 2000);
  counterAnim("#count4", 500, -100, 2500);
 });

 var xValues = ["January"
  , "February"
  , "March"
  , "April"
  , "May"
  , "June"
  , "July"
  , "August"
  , "September"
  , "October"
  , "November"
  , "December"
 , ];

 new Chart("lineChart", {
  type: "line"
  , data: {
   labels: xValues
   , datasets: [{
    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478]
    , borderColor: "red"
    , fill: false
   }, {
    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000]
    , borderColor: "green"
    , fill: false
   }, {
    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100]
    , borderColor: "blue"
    , fill: false
   }]
  }
  , options: {
   legend: {
    display: false
   }
  }
 });

</script>
@endpush