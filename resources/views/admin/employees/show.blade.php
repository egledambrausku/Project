@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.employees.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.employees.fields.name')</th>
                            <td field-key='name'>{{ $employee->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.email')</th>
                            <td field-key='email'>{{ $employee->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.company')</th>
                            <td field-key='company'>{{ $employee->company->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.employees.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
