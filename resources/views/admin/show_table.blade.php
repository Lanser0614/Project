@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General</h3>
  
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>

              <form action="{{ route('tableUpdate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $group->id }}">
              <div class="card-body" style="display: block;">
                <div class="form-group">
                  <label for="inputName">Xona raqami</label>
                  <input type="number" value="{{$group->number_room}}" id="inputName" name="number_room" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="inputName">Gurux raqami</label>
                    <input type="text" id="inputName" value="{{$group->group_number}}" name="group_number" class="form-control" required>
                  </div>
               
                  <div class="form-group">
                    <label>O'qtuvchi</label>
                    <select class="form-control select2bs4 select2-hidden-accessible" name="teecher_id" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" required>
                       @php
                           $teech = $group->teecher_id;
                       @endphp
                      @foreach ($teecher as $item)
                        <option value="{{$item->id}}" {{$item->id == "$teech"?'selected="selected"':''}}>{{$item->name_teecher}}</option>
                        {{-- <option value="{{$item->id}}" >{{$item->name_teecher}}</option> --}}
                   @endforeach
                    </select>
                  </div>

                <div class="form-group">
                  <label for="inputClientCompany">Dars vaqti</label>
                  <input type="time" value="{{ $group->science_time }}" name="science_time" id="inputClientCompany" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success"> Qo'shish </button>
              </div>

            </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
</div>
@endsection