<div>
    {{-- @include('layout.partials._session-alerts') --}}
    {{-- @include('livewire.backend.apps.financeiro._subheader-list-default') --}}
    <div class=" container ">
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h1>Categorias de Receitas</h1>
                </div>
                <div class="card-toolbar">
                    <button wire:click.prevent="create" class="btn btn-primary btn-lg font-weight-bolder">
                        Nova Categoria de Receita
                    </button>
                </div>
            </div>
            <div class="card-body">
                <!--begin::Example-->
                <div class="example mb-10">
                    <table class="table">
                        <tbody>
                            @php
                                /**
                                 * Usado para para ajustar o layout, melhora a visualização do Tituto com o primeiro resultado,
                                 *  ela assumi esse valor somente no primeiro loop, depois recebe ''
                                 * */
                            $is_first = 'border: 0px;'; @endphp
                            @if (count($categories) > 0)
                                @foreach ($categories as $category)

                                    <tr>
                                        <td style="{{ $is_first }}">
                                            <h3 class="text-dark-75 font-weight-bolder">
                                                {{ $category->desc_categoria }}
                                            </h3>
                                        </td>
                                        <td class="pr-0 text-right" style="{{ $is_first }}">
                                            <a href=""
                                                class="btn btn-sm btn-default btn-text-secondary btn-hover-secondary btn-icon">
                                                <i wire:ignore class="fa fas fa-plus" data-toggle="tooltip"
                                                    data-theme="dark" title="Criar sub-categoria"></i>
                                            </a>
                                            <a href="" wire:click.prevent="edit({{ $category }})"
                                                class="btn btn-sm btn-default btn-text-secondary btn-hover-secondary btn-icon">
                                                <i wire:ignore class="fa far fa-edit" data-toggle="tooltip"
                                                    data-theme="dark" title="Editar categoria"></i>
                                            </a>
                                            <a href="javascript:;" onclick="confirmDelete({{ $category->id }})"
                                                class="btn btn-sm btn-default btn-text-secondary btn-hover-secondary btn-icon">
                                                <i wire:ignore class="fa fas fa-trash-alt" data-toggle="tooltip"
                                                    data-theme="dark" title="Excluir categoria"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @if (count($category->childCategories))
                                        @foreach ($category->childCategories as $subCategories)

                                            @include('livewire.backend.apps.financeiro.financeiro-categoria-receita-list-tr',
                                            ['sub_categories' => $subCategories])

                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!--end::Example-->
            </div>

            <!--begin::Modal Create-->
            @include('livewire.backend.apps.financeiro.financeiro-categoria-receita-create')
            <!--end::Modal Create-->

        </div>
    </div>
</div>

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/crud/confirm-delete/confirm.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/select2.js?v=7.0.6') }}"></script>
@endsection

