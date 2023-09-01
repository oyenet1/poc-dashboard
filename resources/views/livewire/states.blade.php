<div class="content mt-3 w-full">
    <div class="w-full mb-3 px-3">
        <p class=" text-capitalize rounded text-dark px-3 font-weight-bold bg-white p-3 shadow-sm"
            style="font-size:24px; display:flex; align-items:center; justify-content:space-between;">
            <span>{{ $state->location . ' State' }}
                services
                statistics</span>
            <span class="rounded bg-success text-white p-2" style="font-size:20px;">{{ $total }}</span>
        </p>
    </div>
    @foreach ($services as $key=> $service)
    <div class="col-sm-6 col-lg-3 overflow-hidden">
        <div class="card rounded overflow-hidden">
            <div class="card-body text-white {{ 'bg-flat-color-'.$key+1}}">
                <p class="font-medium text-white font-weight-bold" style="font-size: 25px">{{ $service->number }}</p>
                <p class=" text-white" style="line-height: 100%; font-size:18px">
                    {{ getServiceName($service->serviceCode) }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="w-full my-3 px-3 col-12">
        <div class="p-3 bg-white rounded">
            <p class=" text-dark font-weight-bold"
                style="font-size:24px; display:flex; align-items:center; justify-content:space-between;">
                <span>
                    This Year Stats</span>
                <span class="rounded p-2" style="font-size:20px;">Total: {{ $total }}</span>
                {{-- <select wire:model="year" class="p-2 rounded border shadow-sm" style="font-size:18px;">
                    @for ($i = 0; $i < 10; $i++) <option value="{{ date('Y') - $i }}">{{ date('Y') - $i }}</option>
                @endfor
                </select> --}}
            </p>
            <div class="">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    var xValues = ["January", "February", "March", "April", "May", "June", "July", "August", "Septemper", "October", "November", "December"];
 var yValues = {{ json_encode(returnArr($months)) }};
 var barColors = ["red", "green", "blue", "orange","red", "green", "blue", "orange","red", "green", "blue", "orange"];

 new Chart("myChart", {
  type: "bar"
  , data: {
   labels: xValues
   , datasets: [{
    backgroundColor: barColors
    , data: yValues
   }]
  }
  , options: {
   legend: {
    display: false
   }
   , title: {
    display: true
    , text:  "Service Rendered by Month",
   }
  }
 });

</script>
@endpush