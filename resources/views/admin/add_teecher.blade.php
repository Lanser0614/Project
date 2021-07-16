@extends('layouts.app')

@section('content')
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Budget</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <form action="{{ route('teechersStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body" style="display: block;">
            <div class="form-group">
              <label for="inputEstimatedBudget">O'qtuvchi F.I.SH</label>
              <input type="text" id="inputEstimatedBudget" class="form-control" name="name_teecher" required>
            </div>
            <div class="form-group">
              <label for="inputSpentBudget">O'quv fani</label>
              <input type="text" id="inputSpentBudget" class="form-control" name="name_scencie" required>
            </div>

            <button type="submit" class="btn btn-success"> Qo'shish </button>
          </div>
        </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
</div>
</section>
@endsection