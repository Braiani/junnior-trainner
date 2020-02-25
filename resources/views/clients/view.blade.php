@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

        @can('edit', app($dataType->model_name))
            <a href="{{ route('voyager.'.$dataType->slug.'.edit', $client->id) }}" class="btn btn-info">
                <span class="glyphicon glyphicon-pencil"></span>&nbsp;
                {{ __('voyager::generic.edit') }}
            </a>
        @endcan
        @can('delete', app($dataType->model_name))
            <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete" data-id="{{ $client->id }}" id="delete-{{ $client->id }}">
                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
            </a>
        @endcan

        <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
            <span class="glyphicon glyphicon-list"></span>&nbsp;
            {{ __('voyager::generic.return_to_list') }}
        </a>
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content read container-fluid">
        <div class="panel panel-bordered" style="padding-bottom:5px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Nome</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        <p>{{ $client->name }}</p>
                    </div>
                    <hr style="margin:0;">
                </div>
                <div class="col-md-6">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">E-mail</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        <p>{{ $client->email }}</p>
                    </div>
                    <hr style="margin:0;">
                </div>
                <div class="col-md-4">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Data de nascimento</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        <p>{{ $client->birthday->format('d/m/Y') }}</p>
                    </div>
                    <hr style="margin:0;">
                </div>
                <div class="col-md-4">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Genero</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        <p>{{ $client->gender === 'M' ? 'Masculino' : 'Feminino' }}</p>
                    </div>
                    <hr style="margin:0;">
                </div>
                <div class="col-md-4">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Indicado por</h3>
                    </div>
                    <div class="panel-body" style="padding-top:0;">
                        @if(! is_null($client->indicatedBy))
                            <p>
                                <a href="{{ route('voyager.clients.show', $client->indicatedBy->id) }}">
                                    {{ $client->indicatedBy->name }} ({{ $client->indicatedBy->email }})
                                </a>
                            </p>
                        @else
                            <p>Ninguém</p>
                        @endif
                    </div>
                    <hr style="margin:0;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr style="margin:0;border: 1px gray solid">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">Contatos</h3>
                    </div>
                </div>
                @foreach($client->contacts as $contact)
                    <div class="col-md-4">
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Numero telefone</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $contact->number }}</p>
                        </div>
                        <hr style="margin:0;">
                    </div>
                    <div class="col-md-4">
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Tem WhatsApp?</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ $contact->whatsapp ? 'Sim' : 'Não' }}</p>
                        </div>
                        <hr style="margin:0;">
                    </div>
                    <div class="col-md-4">
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">Instagram</h3>
                        </div>
                        <div class="panel-body" style="padding-top:0;">
                            <p>{{ '@' . $contact->instagram ?? '' }}</p>
                        </div>
                        <hr style="margin:0;">
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
