@extends('layouts.app')

@section('content')

<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Darslar</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <a href="/admin/tableAdd">
          <button type="submit" class="btn btn-success">
            Dars qo'shish
          </button>
            </a>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th >
                        ID
                    </th>
                    <th >
                        O'qituvchi F.I.SH
                    </th>
                    <th >
                        Fan nomi:
                    </th>
                    <th >
                        Hona raqami:
                    </th>
                    <th >
                        Guruh nomi:
                    </th>
                    <th >
                       vaqt
                    </th>
                    <th >
                        Option
                     </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($group as $item)
                <tr>
                    <td>
                        {{$item->id}}
                    </td>
                    <td>
                        <a>
                            {{$item->teecher->name_teecher}}
                        </a>
                        <br>
                        {{-- <small>
                            {{$item->teecher->created_at}}
                        </small> --}}
                    </td>
                    <td>
                        {{$item->teecher->name_scencie}}
                    </td>

                    <td>
                        {{$item->number_room}}
                    </td>

                    <td>
                        {{$item->group_number}}
                    </td>

                    <td>
                        {{$item->science_time}}
                    </td>

                    <td class="project-actions ">

                        <a class="btn btn-info btn-sm" href="/admin/tableShow/{{ $item->id }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="/admin/tableDestroy/{{ $item->id }}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

      </div>
      <!-- /.card-body -->

    </div>
    {{-- {!! $teech->links('pagination::bootstrap-4') !!} --}}
    <!-- /.card -->

  </section>
  @endsection
