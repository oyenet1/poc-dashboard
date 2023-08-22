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
    <div class="card text-white {{ 'bg-flat-color-'. random_int(1,7) }}">
      <div class="card-body pb-0">
        <div class="dropdown float-right">
          <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
            id="dropdownMenuButton1" data-toggle="dropdown">
            <i class="fa fa-cog"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="dropdown-menu-content">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <h4 class="mb-0">
          <span class="count">{{ $state->services }}</span>
        </h4>
        <p class="text-light">{{ $state->name }}</p>

        <div class="chart-wrapper px-0" style="height:70px;" height="70">
          <canvas id="{{ 'widgetChart'. getIndex($key+1) }}"></canvas>
        </div>

      </div>

    </div>
  </div>
  @endforeach
</div>