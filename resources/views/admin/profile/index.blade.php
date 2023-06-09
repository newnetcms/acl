@extends('core::admin.master')

@section('meta_title', __('acl::profile.index.page_title'))

@section('page_title', __('acl::profile.index.page_title'))

@section('page_subtitle', __('acl::profile.index.page_subtitle'))

@section('breadcrumb')
    <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
        <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">{{ trans('dashboard::message.index.breadcrumb') }}</a></li>
            <li class="breadcrumb-item active">{{ trans('acl::profile.index.breadcrumb') }}</li>
        </ol>
    </nav>
@stop

@section('content')
    <form action="{{ route('acl.admin.profile.update') }}" method="POST">
        @csrf

        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fs-17 font-weight-600 mb-0">
                            {{ __('acl::profile.index.page_title') }}
                        </h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @include('acl::admin.profile._fields', ['item' => $user])
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit">{{ __('acl::profile.button.update') }}</button>
            </div>
        </div>
    </form>
@stop
