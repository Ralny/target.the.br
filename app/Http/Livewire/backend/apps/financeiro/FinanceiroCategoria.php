<?php

namespace App\Http\Livewire\Backend\Apps\Financeiro;

use App\Models\FinanceiroCategoria as Categorias;
use App\Models\FinanceiroTipoDRE;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class FinanceiroCategoria extends Component
{

    public $data = [];
    public $row;
    public $updateMode = false;

    protected $listeners = [
        'delete' => 'destroy'
    ];

    public function render()
    {
        $categories = Categorias::whereNull('financeiro_categoria_id')
            ->with('childCategories')
            ->orderby('financeiro_categoria_id', 'asc')
            ->get();

        $lista_DRE = FinanceiroTipoDRE::get();

        $view = (count($categories) > 0) ? "financeiro-categoria-list" : "financeiro-categoria-index";

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
        $this->data['desc_categoria'] = '';
        $this->data['financeiro_categoria_id']   = '';
        $this->data['financeiro_tipo_dre_id']    = '';
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
        //dd($this->data);

        $messages = [
            'desc_categoria.required'  => 'O campo Descrição é obrigatório.',
        ];

        $validatedData = Validator::make($this->data, [
            'desc_categoria'           => 'required',
            'financeiro_categoria_id ' => 'nullable|integer',
            //'financeiro_tipo_dre_id'=>'nullable|integer'
        ], $messages)->validate();

        //dd($this->data);

        Categorias::create($validatedData);

        $this->resetInputFields();

        $this->closeModal();

        $this->alert('success', 'Categoria cadatrada com sucesso!');
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
        ];

        $validatedData = Validator::make($this->data, [
            'desc_categoria'=> 'required',
            'financeiro_categoria_id'  => 'nullable',
            'financeiro_tipo_dre_id'   => 'nullable'
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
    //dd('Realizar implementação');
    }
}
