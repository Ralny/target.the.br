<option value="{{ $sub_categories->id }}"> {{ $sub_categories->desc_categoria }} </option>

@if ($sub_categories->categories)
    @if (count($sub_categories->categories) > 0)
        @foreach ($sub_categories->categories as $subCategories)
            @include('livewire.backend.apps.financeiro.financeiro-categoria-receita-select-sub_categorias',
            ['sub_categories' => $subCategories])
        @endforeach
    @endif
@endif
