<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CertificateSearch extends Component
{
    public $search;
    // protected $queryString = ['search'=> ['except' => '']];
    protected $updatesQueryString = ['search'=> ['except' => '']];


    public function render()
    {

        $data = array();

        if ($this->search !== null) {
            $certificate = Http::get('https://g-academy.net/api/certificate/'.$this->search);

            if($certificate->successful()){
                $data = $certificate->json();
                // dd($certificate->json());
                // dd($data['data']['certificate']['user']['name']);
            }else{
                $data = 0;
            }
        }


        return view('livewire.certificate-search', ['data' => $data]);
    }
}
