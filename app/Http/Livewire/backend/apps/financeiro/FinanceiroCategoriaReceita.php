<?php
//Comencando aqui
namespace App\Http\Livewire\Backend\Apps\Financeiro;

use App\Models\FinanceiroCategoriaReceita as Categorias;
use App\Models\FinanceiroTipoDRE;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class FinanceiroCategoriaReceita extends Component
{

    public $data = [];
    public $row;
    public $updateMode = false;

    protected $listeners = [
        'delete' => 'destroy'
    ];

    public function render()
    {
        $categories = Categorias::whereNull('id_categoria_receita')
            ->with('childCategories')
            ->orderby('id_categoria_receita', 'asc')
            ->get();

        $lista_DRE = FinanceiroTipoDRE::get();

        $view = (count($categories) > 0) ? "financeiro-categoria-receita-list" : "financeiro-categoria-receita-index";

        return view(
            'livewire.backend.apps.financeiro.' . $view . '',
            compact('categories', 'lista_DRE')
        )
            ->extends('layout.default')
            ->section('content');
    }

    //Atualizar esse metodo, nao esta restando o select2
    public function resetInputFields()
    {
        $this->desc_categoria       = '';
        $this->id_categoria_receita = '';
        $this->id_tipo_dre          = '';
    }

    public function openModal()
    {
        $this->updateMode = false;
        $this->dispatchBrowserEvent('show-form');
    }

    public function closeModal()
    {
        //$this->updateMode = false;
        $this->dispatchBrowserEvent('hide-form');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function store()
    {
        $messages = [
            'desc_categoria.required'  => 'O campo Descrição é obrigatório.',
            'id_tipo_dre.required'     => 'O campo Associar com DRE é obrigatório.'
        ];

        $validatedData = Validator::make($this->data, [
            'desc_categoria'        => 'required',
            'id_categoria_receita'  => 'nullable',
            'id_tipo_dre'           => 'required|not_in:0'
        ], $messages)->validate();

        Categorias::create($validatedData);

        $this->alert('success', 'Categoria cadatrada com sucesso!');

        $this->closeModal();

        $this->resetInputFields();
    }

    public function edit(Categorias $row)
    {
        $this->updateMode = true;

        $this->row = $row;

        $this->data = $row->toArray();

        $this->dispatchBrowserEvent('show-form');
    }

    public function update()
    {
        $messages = [
            'desc_categoria.required'  => 'O campo Descrição é obrigatório.',
            'id_tipo_dre.required'     => 'O campo Associar com DRE é obrigatório.'
        ];

        $validatedData = Validator::make($this->data, [
            'desc_categoria'        => 'required',
            'id_categoria_receita'  => 'nullable',
            'id_tipo_dre'           => 'required|not_in:0'
        ], $messages)->validate();

        $this->row->update($validatedData);

        $this->alert('success', 'Categoria alterada com sucesso!');

        $this->closeModal();

        $this->resetInputFields();
    }

    public function destroy($id)
    {
        Categorias::find($id)->delete();
        $this->alert('success', 'Registro excluído com sucesso!');
    }

    public function importarCategoriasPadrao()
    {
       dd('Realizar implementação');
    }
}
