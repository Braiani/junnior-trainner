@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .voyager-plus {
            cursor: pointer;
        }
    </style>
@stop

@section('page_title', __('voyager::generic.add'). ' '. $dataType->getTranslatedAttribute('display_name_singular'))


@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.add'). ' Clientes' }}
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
                            <div class="form-group col-md-6 {{ $errors->has('name') ? 'has-error' : '' }}" >
                                <label class="control-label" for="name">Nome</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nome" required>
                                @if ($errors->has('name'))
                                    @foreach ($errors->get('name') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}" >
                                <label class="control-label" for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
                                @if ($errors->has('email'))
                                    @foreach ($errors->get('email') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('birthday') ? 'has-error' : '' }}" >
                                <label class="control-label" for="birthday">Data de nascimento</label>
                                <input type="date" name="birthday" id="birthday" class="form-control" placeholder="Data de nascimento">
                                @if ($errors->has('birthday'))
                                    @foreach ($errors->get('birthday') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('cpf') ? 'has-error' : '' }}" >
                                <label class="control-label" for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF">
                                @if ($errors->has('cpf'))
                                    @foreach ($errors->get('cpf') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('gender') ? 'has-error' : '' }}" >
                                <label class="control-label" for="gender">Gênero</label>
                                <select name="gender" id="gender" class="form-control select2" placeholder="Gênero">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                                @if ($errors->has('gender'))
                                    @foreach ($errors->get('gender') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-12 {{ $errors->has('gender') ? 'has-error' : '' }}">
                                <label class="control-label" for="client_id">Indicado por:</label>
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
                            <div class="form-group col-md-12 contact-div-append">
                                <h4>Informações de contato</h4>
                                <div class="contact-div">
                                    <div class="form-group col-md-4">
                                        <label for="number" class="control-label">Número de telefone</label>
                                        <input type="text" name="number[]" class="form-control number" placeholder="Número de telefone">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="whatsapp" class="control-label">Tem WhatsApp?</label>
                                        <br>
                                        <input type="checkbox" name="whatsapp[0]" class="checkbox" value="true">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="instagram" class="control-label">Conta no Instagram</label>
                                        <input type="text" name="instagram[]" class="form-control instagram" placeholder="Conta no Instagram">
                                    </div>
                                    <div class="form-group col-md-2 remove-contact hidden">
                                        <h1 class="text-center"><i class="voyager-trash"></i></h1>
                                        <p class="text-center">Remover esse contato</p>
                                    </div>
                                    <div class="form-group col-md-2 add-contact">
                                        <h1 class="text-center"><i class="voyager-plus"></i></h1>
                                        <p class="text-center">Adicionar outro contato</p>
                                    </div>
                                </div>
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

            $('#cpf').mask('000.000.000-00', {reverse: true});

            var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                    onKeyPress: function(val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };

            $('.number').mask(SPMaskBehavior, spOptions);

            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: [ 'YYYY-MM-DD' ]
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            $('.add-contact').on('click', function () {
                var cloned = $(this).closest('.contact-div').clone(true);
                $(cloned).find(':input').val("");

                $('.contact-div-append').append(cloned);
                $('.number').mask(SPMaskBehavior, spOptions);
                if ($(this).siblings('.remove-contact').hasClass('hidden')) {
                    $(this).siblings('.remove-contact').removeClass('hidden');
                }

                $(this).remove();
                resetCheckboxesNames();
                toastr.success('Novo campo para contado adicionado com sucesso!');
            });

            $('.remove-contact').on('click', function () {
                if($(this).closest('.contact-div-append').children().length > 2) {
                    $(this).closest('.contact-div').remove();
                    resetCheckboxesNames();
                    toastr.success('Contato removido com sucesso!');
                    return;
                }
                toastr.error('Ao menos 1 contato deve existir!');
            });

            $('.instagram').on('keydown', function () {
                if($(this).val() < 1) {
                    $(this).val('@');
                }
            })
        });

        function resetCheckboxesNames() {
            $('.checkbox').each(function (index, element) {
                $(element).attr('name', "whatsapp[" + index + "]");
                $(element).val('true');
            });
        }
    </script>
@endsection
