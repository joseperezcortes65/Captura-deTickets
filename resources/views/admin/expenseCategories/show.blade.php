@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.expenseCategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.expense-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.expenseCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $expenseCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expenseCategory.fields.name') }}
                        </th>
                        <td>
                            {{ $expenseCategory->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expenseCategory.fields.description') }}
                        </th>
                        <td>
                            {{ $expenseCategory->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expenseCategory.fields.tax_line') }}
                        </th>
                        <td>
                            {{ $expenseCategory->tax_line }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expenseCategory.fields.balance_total') }}
                        </th>
                        <td>
                            {{ $expenseCategory->balance_total }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.expense-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection