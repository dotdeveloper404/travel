@extends('portal.layouts.app')

@section('content')
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card card-custom gutter-b example example-compact">

                        
                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                        <div class="p-6 bg-white border-b border-gray-200">
                                            <div class="flex flex-col mt-8">
                                                <div class="d-print-none with-border mb-8">
                                                    <a href="{{ route('portal.permission.create') }}"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Add Permission') }}</a>
                                                </div>
                                                <div class="py-2">
                                                    @if (session()->has('message'))
                                                        <div class="mb-8 text-green-400 font-bold">
                                                            {{ session()->get('message') }}
                                                        </div>
                                                    @endif
                                                    <div class="min-w-full border-b border-gray-200 shadow">
                                                        <table class="permi_table border-collapse table-auto w-full text-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th
                                                                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                                                        {{ __('Name') }}
                                                                    </th>
                                                                    <th
                                                                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                                                        {{ __('Actions') }}
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($permissions as $permission)
                                                                    <tr>
                                                                        <td
                                                                            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                                            <div class="text-sm text-gray-900">
                                                                                <a href="{{ route('portal.permission.show', $permission->id) }}"
                                                                                    class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $permission->name }}</a>
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                                            <form
                                                                                action="{{ route('portal.permission.destroy', $permission->id) }}"
                                                                                method="POST">
                                                                                <a href="{{ route('portal.permission.edit', $permission->id) }}"
                                                                                    class="btn-primary px-4 py-2 text-white mr-4 bg-blue-600">
                                                                                    {{ __('Edit') }}
                                                                                </a>
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button
                                                                                    class="btn-danger px-4 py-2 text-white bg-red-600">
                                                                                    {{ __('Delete') }}
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        {{ $permissions->links() }}
                                                    </div>
                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
