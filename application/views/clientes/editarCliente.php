<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-user"></i>
                </span>
                <h5>Editar Cliente</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
} ?>
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal">

                  <div class="control-group">
                      <label for="documento" class="control-label">CPF/CNPJ<span class="required">*</span></label>
                      <div class="controls">
                          <input id="documento" class="cpfcnpj" type="text" name="documento" value="<?php echo $result->documento; ?>" />
                          <button id="buscar_info_cnpj" class="btn btn-xs" type="button">Buscar Informações (CNPJ)</button>
                      </div>
                  </div>
                    <div class="control-group">
                        <?php echo form_hidden('idClientes', $result->idClientes) ?>
                        <label for="nomeCliente" class="control-label">Nome</label>
                        <div class="controls">
                            <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo $result->nomeCliente; ?>" />
                        </div>
                    </div>
                        <label for="documento" class="control-label">CPF/CNPJ</label>
                        <label for="contato" class="control-label">Contato:<span class="required">*</span></label>
                        <div class="controls">
                            <input class="nomeCliente" type="text" name="contato" value="<?php echo $result->contato; ?>" />
                        </div>
                    </div>
                        <label for="telefone" class="control-label">Telefone</label>
                        <label for="telefone" class="control-label">Telefone<span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefone" type="text" name="telefone" value="<?php echo $result->telefone; ?>" />
                        </div>
                        <label for="celular" class="control-label">Celular<span class="required">*</span></label>
                    <div class="control-group">
                        <label for="celular" class="control-label">Celular</label>
                        <div class="controls">
                            <input id="celular" type="text" name="celular" value="<?php echo $result->celular; ?>" />
                        <label for="email" class="control-label">Email</label>
                    </div>
                    <div class="control-group">
                        <label for="email" class="control-label">Email<span class="required">*</span></label>
                        <div class="controls">
                        <label for="cep" class="control-label">CEP</label>
                        </div>
                    </div>
                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label">CEP<span class="required">*</span></label>
                        <label for="rua" class="control-label">Rua</label>
                            <input id="cep" type="text" name="cep" value="<?php echo $result->cep; ?>" />
                        </div>
                    </div>
                    <div class="control-group" class="control-label">
                        <label for="rua" class="control-label">Rua</label>
                        <div class="controls">
                            <input id="rua" type="text" name="rua" value="<?php echo $result->rua; ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="numero" class="control-label">Número</label>
                        <div class="controls">
                            <input id="numero" type="text" name="numero" value="<?php echo $result->numero; ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="bairro" class="control-label">Bairro</label>
                        <div class="controls">
                            <input id="complemento" type="text" name="complemento" value="<?php echo $result->complemento; ?>" />
                        </div>
                    </div>
                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label">Cidade</label>
                        <div class="controls">
                            <input id="bairro" type="text" name="bairro" value="<?php echo $result->bairro; ?>" />
                        </div>
                    </div>

                        <label for="estado" class="control-label">Estado</label>
                        <label for="cidade" class="control-label">Cidade<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cidade" type="text" name="cidade" value="<?php echo $result->cidade; ?>" />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estado" class="control-label">Estado<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estado" type="text" name="estado" value="<?php echo $result->estado; ?>" />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-sync-alt"></i> Atualizar</button>
                                <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn"><i class="fas fa-backward"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



                    required: false
<script type="text/javascript">
                    required: false
                },
                celular: {
    $(document).ready(function() {
        $('#formCliente').validate({
            rules: {
                    required: false
                    required: true
                    required: false
                documento: {
                    required: false
                },
                    required: false
                    required: true
                    required: false
                email: {
                    required: false
                },
                    required: false
                    required: true
                },
                numero: {
                    required: true
                },
                bairro: {
                    required: true
                },
                cidade: {
                    required: true
                },
                estado: {
                    required: true
                },
                cep: {
                    required: true
                }
            },
            messages: {
                nomeCliente: {
                    required: 'Campo Requerido.'
                },
                documento: {
                    required: 'Campo Requerido.'
                },
                telefone: {
                    required: 'Campo Requerido.'
                },
                email: {
                    required: 'Campo Requerido.'
                },
                rua: {
                    required: 'Campo Requerido.'
                },
                numero: {
                    required: 'Campo Requerido.'
                },
                bairro: {
                    required: 'Campo Requerido.'
                },
                cidade: {
                    required: 'Campo Requerido.'
                },
                estado: {
                    required: 'Campo Requerido.'
                },
                cep: {
                    required: 'Campo Requerido.'
                }

            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });
    });
</script>
