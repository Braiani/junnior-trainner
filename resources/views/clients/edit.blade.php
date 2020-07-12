@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .pointer {
            cursor: pointer;
        }
        input[type=date] {
            line-height: 1.4 !important;
        }
        .mt-5 {
            margin-top: 1%;
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
                          action="{{ route('voyager.'.$dataType->slug.'.update', $client->id)  }}"
                          method="POST" enctype="multipart/form-data">

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        @method('PUT')

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
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nome" required value="{{ $client->name }}">
                                @if ($errors->has('name'))
                                    @foreach ($errors->get('name') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}" >
                                <label class="control-label" for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required value="{{ $client->email }}">
                                @if ($errors->has('email'))
                                    @foreach ($errors->get('email') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('birthday') ? 'has-error' : '' }}" >
                                <label class="control-label" for="birthday">Data de nascimento</label>
                                <input type="date" name="birthday" id="birthday" class="form-control" placeholder="Data de nascimento" value="{{ $client->birthday->format('Y-m-d')
                                }}">
                                @if ($errors->has('birthday'))
                                    @foreach ($errors->get('birthday') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('cpf') ? 'has-error' : '' }}" >
                                <label class="control-label" for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required value="{{ $client->cpf }}">
                                @if ($errors->has('cpf'))
                                    @foreach ($errors->get('cpf') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('gender') ? 'has-error' : '' }}" >
                                <label class="control-label" for="gender">Gênero</label>
                                <select name="gender" id="gender" class="form-control select2" placeholder="Gênero">
                                    <option value="M" {{ $client->gender === 'M' ? 'selected' : '' }}>Masculino</option>
                                    <option value="F" {{ $client->gender === 'F' ? 'selected' : '' }}>Feminino</option>
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
                                @foreach($client->contacts as $contact)
                                    <div id="{{$contact->id}}" @if($loop->first) class="replicate" @endif>
                                        <div class="col-md-4">
                                            <div class="panel-heading" style="border-bottom:0;">
                                                <h3 class="panel-title">Numero telefone</h3>
                                            </div>
                                            <div class="panel-body" style="padding-top:0;">
                                                <p class="number" id="number-{{$contact->id}}">{{ $contact->number }}</p>
                                            </div>
                                            <hr style="margin:0;">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="panel-heading" style="border-bottom:0;">
                                                <h3 class="panel-title">Tem WhatsApp?</h3>
                                            </div>
                                            <div class="panel-body" style="padding-top:0;">
                                                <p class="whatsapp" id="whatsapp-{{$contact->id}}">{{ $contact->whatsapp ? 'Sim' : 'Não' }}</p>
                                            </div>
                                            <hr style="margin:0;">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel-heading" style="border-bottom:0;">
                                                <h3 class="panel-title">Instagram</h3>
                                            </div>
                                            <div class="panel-body" style="padding-top:0;">
                                                <p class="instagram" id="instagram-{{$contact->id}}">{{ $contact->instagram ?? '@' }}</p>
                                            </div>
                                            <hr style="margin:0;">
                                        </div>
                                        <div class="col-md-2 mt-5">
                                            <div class="remove-contact">
                                                <p class="text-center pointer remove" id="remove-{{$contact->id}}" onclick="deleteContact({{$contact}})"><i class="voyager-trash"></i>
                                                    Remover esse contato
                                                </p>
                                            </div>
                                            <div class="edit-contact">
                                                <p class="text-center pointer edit" id="edit-{{$contact->id}}" onclick="editContact({{$contact}})"><i class="voyager-edit"></i>
                                                    Editar esse contato
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group col-md-2 mt-5 add-contact">
                                <h1 class="text-center pointer"><i class="voyager-plus"></i></h1>
                                <p class="text-center pointer">Adicionar outro contato</p>
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
    @include('partials.edit-add-delete-modal')
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
                clearModalInputs('add')
                $('#add_modal').modal('show');
            });

            $('#add_form').on('submit', function (e) {
                e.preventDefault();
                sendAjaxContact('add_modal', 'add_form', 'POST', addNewContactRow);
            });

            $('#edit_form').on('submit', function (e) {
                e.preventDefault();
                sendAjaxContact('edit_modal', 'edit_form', 'PUT', updateContactInformation);
            });

            $('#delete_form').on('submit', function (e) {
                e.preventDefault();
                sendAjaxContact('delete_modal', 'delete_form', 'DELETE', deleteContactRow);
            });

            $('.instagram').on('keydown', function () {
                if($(this).val() < 1) {
                    $(this).val('@');
                }
            });

            @if($client->indicatedBy)
            // Fetch the preselected item, and add to the control
            var clientSelect = $("select[name=client_id]");
            $.ajax({
                type: 'GET',
                url: "{{route('voyager.clients.relation')}}",
                data: {
                    search: "{{$client->indicatedBy->name}}",
                    type:"client_hasone_client_relationship",
                    method:"add",
                    id:"id",
                    page:"1"
                }
            }).then(function (data) {
                data = data.results[0];
                // create the option and append to Select2
                var option = new Option(data.text, data.id, true, true);
                clientSelect.append(option).trigger('change');

                // manually trigger the `select2:select` event
                clientSelect.trigger({
                    type: 'select2:select',
                    params: {
                        data: data
                    }
                });
            });
            @endif
        });

        function sendAjaxContact(modalId, formId, ajaxType, callback) {
            $('#' + modalId).modal('hide');
            $('#voyager-loader').fadeIn();
            $.ajax({
                type: ajaxType,
                url: $('#' + formId).attr('action'),
                data: $('#' + formId).serialize()
            }).then(function (response) {
                callback(response);
                $('#voyager-loader').fadeOut();
            }).fail(function (response) {
                $('#voyager-loader').fadeOut();
                toastr.error('Ocorreu um erro ao tentar realizar essa açao');
            });
        }

        function clearModalInputs(modal) {
            $("#" + modal +"_number").val('');
            $("#" + modal +"_instagram").val('');
            $("#" + modal +"_whatsapp").attr('checked', false);
        }

        function addNewContactRow(contact) {
            var cloned = $('.replicate').clone(true);
            cloned.insertAfter($('.replicate'));
            cloned.attr('id', contact.id);
            cloned.removeAttr('class');
            var number = cloned.find('.number');
            var whatsapp = cloned.find('.whatsapp');
            var instagram = cloned.find('.instagram');
            var edit = cloned.find('.edit');
            var remove = cloned.find('.remove');
            var whatsappText = contact.whatsapp ? 'Sim' : 'Nao';
            var instagramText = contact.instagram === null ? '@' : contact.instagram;

            updateNewContactTexts(number, contact.number, 'number', contact.id);
            updateNewContactTexts(whatsapp, whatsappText, 'whatsapp', contact.id);
            updateNewContactTexts(instagram, instagramText, 'instagram', contact.id);
            updateNewContactTexts(edit, '', 'edit', contact.id);
            updateNewContactTexts(remove, '', 'remove', contact.id);

            $("#edit-" + contact.id).attr('onClick', "editContact(" + JSON.stringify(contact) + ")");
            $("#remove-" + contact.id).attr('onClick', "deleteContact(" + JSON.stringify(contact) + ")");

            toastr.success('Contato adicionado com sucesso!');
        }

        function updateNewContactTexts(element, text, name, id) {
            if(text !== '') {
                $(element).text(text);
            }
            $(element).attr('id', name + '-' + id);
        }


        function updateContactInformation(contact) {
            $("#number-" + contact.id).text(contact.number);
            $("#instagram-" + contact.id).text(contact.instagram === null ? '@' : contact.instagram);
            $("#whatsapp-" + contact.id).text(contact.whatsapp ? 'Sim' : 'Nao');
            $("#edit-" + contact.id).attr('onClick', "editContact(" + JSON.stringify(contact) + ")");
            $("#remove-" + contact.id).attr('onClick', "deleteContact(" + JSON.stringify(contact) + ")");

            toastr.success('Contato editado com sucesso!');
        }

        function editContact(contact) {
            clearModalInputs('edit')
            var action = '{{route('contact.update', '__id')}}';
            $("#edit_form").attr('action', action.replace('__id', contact.id));
            $("#edit_number").val(contact.number);
            $("#edit_instagram").val(contact.instagram);
            if(contact.whatsapp) {
                $("#edit_whatsapp").attr('checked', 'checked');
            }else{
                $("#edit_whatsapp").attr('checked', false);
            }

            $('#edit_modal').modal('show');
        }

        function deleteContactRow(rowId) {
            $('#' + rowId).remove();
            toastr.warning('Contato removido com sucesso!');
        }

        function deleteContact(contact) {
            $('.confirm_delete_name').text(contact.number);
            var action = '{{route('contact.destroy', '__id')}}';
            $('#delete_form').attr('action', action.replace('__id', contact.id));
            $('#delete_modal').modal('show');
        }
    </script>
@endsection
