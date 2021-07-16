@extends('layouts.app')

@section('content')

<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">O'qtuvchilar</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <a href="/admin/teechersAdd">
          <button type="submit" class="btn btn-success">
            O'qtuvchi qo'shish
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
                        Option:
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teech as $item)
                <tr>
                    <td>
                        {{$item->id}}
                    </td>
                    <td>
                        <a>
                            {{$item->name_teecher}}
                        </a>
                        <br>
                        <small>
                            {{$item->created_at}}
                        </small>
                    </td>
                    <td>
                        {{$item->name_scencie}}
                    </td>


                    <td class="project-actions " >

                        <a class="btn btn-info btn-sm" href="/admin/SHow/{{ $item->id }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="/admin/teechersDestroy/{{ $item->id }}">
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
    {!! $teech->links('pagination::bootstrap-4') !!}
    <!-- /.card -->

  </section>
  @endsection
