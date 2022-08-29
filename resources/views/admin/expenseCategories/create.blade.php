@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.expenseCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.expense-categories.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.expenseCategory.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expenseCategory.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.expenseCategory.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', 'Description Expense') }}" required>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expenseCategory.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tax_line">{{ trans('cruds.expenseCategory.fields.tax_line') }}</label>
                <input class="form-control {{ $errors->has('tax_line') ? 'is-invalid' : '' }}" type="text" name="tax_line" id="tax_line" value="{{ old('tax_line', 'Tax Line') }}">
                @if($errors->has('tax_line'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tax_line') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expenseCategory.fields.tax_line_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="balance_total">{{ trans('cruds.expenseCategory.fields.balance_total') }}</label>
                <input class="form-control {{ $errors->has('balance_total') ? 'is-invalid' : '' }}" type="number" name="balance_total" id="balance_total" value="{{ old('balance_total', '0.00') }}" step="0.01" required>
                @if($errors->has('balance_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('balance_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.expenseCategory.fields.balance_total_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection