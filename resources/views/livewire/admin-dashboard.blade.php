<div class="content mt-3">

  {{-- <div class="col-sm-12">
    <div class="alert  alert-success alert-dismissible fade show" role="alert">
      <span class="badge badge-pill badge-success">Success</span> You successfully read this important
      alert message.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div> --}}


  @foreach ($states as $key => $state)
  <div class="col-sm-6 col-lg-3">
    <a href="{{ route('state', $state->name) }}" class="card text-white {{ 'bg-flat-color-'. random_int(1,7) }}">
      <div class="card-body pb-0">
        <div class="dropdown float-right">
          <span>{{ $state->name }}</span>
        </div>
        <h4 class="mb-0">
          <span class="count">{{ $state->services }}</span>
        </h4>
        <div class="w-100 py-4" style="font-size: 16px; text-wrap:nowrap; font-weight:500">Proof of Ownership</div>

        {{-- <div class="chart-wrapper px-0" style="height:70px;" height="70">
          <canvas id="{{ 'widgetChart'. $key+1 }}"></canvas>
      </div> --}}
  </div>
  </a>
</div>
@endforeach
<div class="p-3 w-100">
  <div class="col-sm-12 rounded bg-white p-2">
    <canvas id="myChart"></canvas>
  </div>
</div>

</div>

@push('scripts')
<script>
  var xValues = {{  \Illuminate\Support\Js::from($stateName)  }};
  var yValues = {{ json_encode($values) }};
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#ae7145",
  "#1eff45",
  "#1e71qe",
  "#1e7145",
  "#abc145",
  "#35a145",
  "#bea45",
  "#1e71f5",
  "#a37145",
  "#1e7145",
  "#1eff89",
  "#1e7145",
  "#1e7145",
  "#1ec714",
  "#1e71ff",
  "#1f7e45",
  "#1e5645",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
  "#1e7145",
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "SERVICES RENDERED ACCROSS THE 36 STATES IN NIGERIA"
    }
  }
});
</script>
@endpush