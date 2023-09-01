@extends('portal.layouts.app')

@section('content')
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card card-custom gutter-b example example-compact">


                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Role Management</h2>
                                </div>

                                <div class="pull-right">
                                    @can('role-create')
                                        <a class="btn btn-success" href="{{ route('portal.roles.create') }}"> Create New Role</a>
                                    @endcan
                                </div>
                            </div>
                        </div>


                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif


                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('portal.roles.show', $role->id) }}">Show</a>
                                        @can('role-edit')
                                            <a class="btn btn-primary" href="{{ route('portal.roles.edit', $role->id) }}">Edit</a>
                                        @endcan

                                        @can('role-delete')
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['portal.roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach

                        </table>

                        {!! $roles->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(".permi_table").DataTable();
    </script>
@endpush
