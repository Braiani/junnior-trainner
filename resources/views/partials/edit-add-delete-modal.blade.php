<!-- DELETE Modal -->
<div class="modal fade modal-danger" id="delete_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
            </div>

            <div class="modal-body">
                <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                <form action="#" id="delete_form" method="POST">
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                <button type="submit" form="delete_form" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
            </div>
        </div>
    </div>
</div>

<!-- EDIT Modal -->
<div class="modal fade modal-warning" id="edit_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="voyager-edit"></i> Editar contato</h4>
            </div>

            <div class="modal-body">
                <form action="#" method="POST" id="edit_form">
                    <div class="row">
                        <input type="hidden"  name="client_id" value="{{$client->id}}">
                        <div class="form-group col-md-4">
                            <label for="number" class="control-label">Número de telefone</label>
                            <input type="text" name="number" id="edit_number" class="form-control number" placeholder="Número de telefone" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="whatsapp" class="control-label">Tem WhatsApp?</label>
                            <br>
                            <input type="checkbox" name="whatsapp" id="edit_whatsapp" class="checkbox" value="true">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="instagram" class="control-label">Conta no Instagram</label>
                            <input type="text" name="instagram" id="edit_instagram" class="form-control instagram" placeholder="Conta no Instagram">
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                <button type="submit" form="edit_form" class="btn btn-warning" id="confirm_edit">{{ __('voyager::generic.save') }}</button>
            </div>
        </div>
    </div>
</div>

<!-- ADD Modal -->
<div class="modal fade modal-success" id="add_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="voyager-plus"></i> Adicionar novo contato</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <form action="{{route('contact.store')}}" method="POST" id="add_form">
                        <input type="hidden" name="client_id" value="{{$client->id}}">
                        <div class="form-group col-md-4">
                            <label for="number" class="control-label">Número de telefone</label>
                            <input type="text" name="number" id="add_number" class="form-control number" placeholder="Número de telefone" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="whatsapp" class="control-label">Tem WhatsApp?</label>
                            <br>
                            <input type="checkbox" name="whatsapp" id="add_whatsapp" class="checkbox" value="true">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="instagram" class="control-label">Conta no Instagram</label>
                            <input type="text" name="instagram" id="add_instagram" class="form-control instagram" placeholder="Conta no Instagram">
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                <button type="submit" form="add_form" class="btn btn-primary save" id="confirm_add">{{ __('voyager::generic.save') }}</button>
            </div>
        </div>
    </div>
</div>
