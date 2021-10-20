<!-- Modal-->
<div wire:ignore.self class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="form" wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @if ($updateMode)
                            <span>Editar categoria de receita</span>
                        @else
                            <span>Cadastrar categoria de receita</span>
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group row">

                            <div class="col-lg-6">
                                <label>Descrição: <span class="text-danger"> * </span></label>
                                <input type="text" wire:model.defer="data.desc_categoria"
                                    class="form-control @error('desc_categoria') is-invalid @enderror">
                                @error('desc_categoria')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                @if (count($categories) > 0)
                                    <label>Aparecer dentro de: <i wire:ignore class="fas fa-info-circle"
                                            data-toggle="tooltip" data-theme="dark"
                                            title="Indica a hierarquia da categoria. Para mover uma categoria-mãe é necessário transferir todas as suas categorias-filhas."></i></label>
                                    <div wire:ignore>
                                        <select wire:model.defer="data.id_categoria_receita" class="form-control"
                                            data-pharaonic="select2" data-component-id="{{ $this->id }}">
                                            <option value=" ">Selecione</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->desc_categoria }}
                                                </option>
                                                @if (count($category->childCategories))
                                                    @foreach ($category->childCategories as $subCategories)
                                                        @include('livewire.backend.apps.financeiro.financeiro-categoria-receita-select-sub_categorias',
                                                        ['sub_categories' => $subCategories])
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-lg-6">
                                <label>Associar com DRE: <i wire:ignore class="fas fa-info-circle" data-toggle="tooltip"
                                        data-theme="dark"
                                        title="Indica a relação da categoria financeira com o Demonstrativo de Resultado do Exercício (DRE), relatório que exibe lucro ou prejuízo."></i></label>
                                    <div wire:ignore>
                                        <select wire:model.defer="data.id_tipo_dre" class="form-control"
                                            data-pharaonic="select2" data-component-id="{{ $this->id }}">
                                            <option value="0">Selecione</option>
                                            @foreach ($lista_DRE as $dre)
                                                <option value="{{ $dre->id }}">{{ $dre->desc_tipo_dre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                @error('id_tipo_dre')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-lg font-weight-bolder"
                        data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success btn-lg font-weight-bolder">
                        @if ($updateMode)
                            <span>Salvar Alterações</span>
                        @else
                            <span>Salvar</span>
                        @endif
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
