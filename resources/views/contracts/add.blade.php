@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .voyager-plus {
            cursor: pointer;
        }

        /* Hidden arrows from number input fields */

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@stop

@section('page_title', __('voyager::generic.add'). ' '. $dataType->getTranslatedAttribute('display_name_singular'))


@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.add'). ' '. $dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                          class="form-edit-add"
                          action="{{ route('voyager.'.$dataType->slug.'.store')  }}"
                          method="POST" enctype="multipart/form-data">

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group col-md-6 {{ $errors->has('client_id') ? 'has-error' : '' }}">
                                <label class="control-label" for="client_id">Cliente:</label>
                                <select
                                    class="form-control select2-ajax" name="client_id"
                                    data-get-items-route="{{route('voyager.clients.relation')}}"
                                    data-get-items-field="client_hasone_client_relationship"
                                    data-id="id"
                                    data-method="add"
                                >
                                    <option value="">{{__('voyager::generic.none')}}</option>
                                </select>
                                @if ($errors->has('client_id'))
                                    @foreach ($errors->get('client_id') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('service_id') ? 'has-error' : '' }}">
                                <label class="control-label" for="client_id">Serviço:</label>
                                <select
                                    class="form-control select2-ajax" name="service_id"
                                    data-get-items-route="{{route('voyager.contracts.relation')}}"
                                    data-get-items-field="contract_hasone_service_relationship"
                                    data-id="id"
                                    data-method="add"
                                >
                                    <option value="">{{__('voyager::generic.none')}}</option>
                                </select>
                                @if ($errors->has('service_id'))
                                    @foreach ($errors->get('service_id') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('plan_type') ? 'has-error' : '' }}" >
                                <label class="control-label" for="plan_type">Tipo de Plano:</label>
                                <select name="plan_type" id="plan_type" class="form-control select2" placeholder="Tipo de Plano" required>
                                    <option></option>
                                    <option value="1">Mensal</option>
                                    <option value="2">Bimestral</option>
                                    <option value="3">Trimestral</option>
                                    <option value="6">Semestral</option>
                                    <option value="12">Anual</option>
                                    <option value="0">Outro</option>
                                </select>
                                @if ($errors->has('plan_type'))
                                    @foreach ($errors->get('plan_type') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <div class="form-group col-md-1 {{ $errors->has('months') ? 'has-error' : '' }}" >
                                <label class="control-label" for="months">Meses</label>
                                <input type="number" max="36" name="months" id="months" class="form-control" disabled placeholder="Meses">
                                @if ($errors->has('months'))
                                    @foreach ($errors->get('months') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                        <div class="panel-footer">
                            @section('submit-buttons')
                                <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: ['YYYY-MM-DD']
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            $("#plan_type").on('change', function () {
                if($(this).val() === '0'){
                    $("#months").val('');
                    changeDisabled($("#months"), false)
                }else{
                    $("#months").val($(this).val());
                    changeDisabled($("#months"), true);
                }
            });
        });

        function changeDisabled(element, status) {
            if(element.prop('disabled') === status) {
                return;
            }
            element.prop('disabled', status);
        }
    </script>
@endsection
