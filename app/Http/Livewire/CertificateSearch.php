<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CertificateSearch extends Component
{
    public $search;
    protected $updatesQueryString = ['search'=> ['except' => '']];
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function mount(){
        $this->search = null;
    }

    public function render()
    {

        $data = array();

        if ($this->search !== null) {
            $certificate = Http::get('https://g-academy.net/api/certificate/'.$this->search);

            if($certificate->successful()){
                $data = $certificate->json();
                // dd($data);
                // dd($certificate->json());
                // dd($data['data']['certificate']['user']['name']);
            }else{
                $data = 0;
            }
        }


        return view('livewire.certificate-search',
        [
            'data' => $this->readyToLoad ? $data : [],
        ]
        );
    }
}
