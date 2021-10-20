<tr>
    <td style="padding-left: 20px;">
        <span class="text-muted font-size-lg font-weight-bold">
            {{ $sub_categories->desc_categoria }}
        </span>
    </td>
    <td class="pr-0 text-right">
        <a href="" class="btn btn-sm btn-default btn-text-secondary btn-hover-secondary btn-icon">
            <i wire:ignore class="fa fas fa-plus" data-toggle="tooltip" data-theme="dark" title="Criar sub-categoria"></i>
        </a>
        <a href="" wire:click.prevent="edit({{ $category }})" class="btn btn-sm btn-default btn-text-secondary btn-hover-secondary btn-icon">
            <i wire:ignore class="fa far fa-edit" data-toggle="tooltip" data-theme="dark" title="Editar categoria"></i>
        </a>
        <a href="javascript:;" onclick="confirmDelete({{ $category->id }})" class="btn btn-sm btn-default btn-text-secondary btn-hover-secondary btn-icon">
            <i wire:ignore class="fa fas fa-trash-alt" data-toggle="tooltip" data-theme="dark" title="Excluir categoria"></i>
        </a>
    </td>
</tr>

@if ($sub_categories->categories)
    @if (count($sub_categories->categories) > 0)
        @foreach ($sub_categories->categories as $subCategories)
        @include('livewire.backend.apps.financeiro.financeiro-categoria-receita-list-tr',
        ['sub_categories' => $subCategories])
        @endforeach
    @endif
@endif
