<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Events\PageChangedEvent;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

trait HandlesPageUpdates
{

    public function initializeHandlesPageUpdates()
    {
        $this->listeners = array_merge($this->listeners, [
            'pageUpdated' => 'updatePage',
        ]);
    }

    public function updatePage($event)
    {
        $page = $event['page'];

        if (!empty($page)) {
            $pageName = $page['name'];
            $pageParameter = $page['parameter'];

            $currentRequest = Request::capture();
            $fingerprint = $currentRequest->request->get('fingerprint');
            $path = Str::of($fingerprint['path'])->explode('/');
            $currentPageName = $path[0];
            $currentpageParameter = !empty($path[1]) ? $path[1] : null;

            if ($pageName === $currentPageName && $pageParameter !== null && $currentpageParameter !== null && $pageParameter == $currentpageParameter) {
                // same page & same parameter (not null)
                $this->loadClient();
            } elseif ($pageName === $currentPageName && $pageParameter != $currentpageParameter && $pageParameter !== null && $currentpageParameter !== null) {
                // same page & different parameter (not null)
                return redirect()->to('/' . $pageName . '/' . $pageParameter);
            } elseif ($pageName === $currentPageName && $pageParameter === null && $currentpageParameter === null) {
                // same page & no parameter
                $this->loadClient();
            } else {
                // different page
                if ($pageParameter !== null) {
                    return redirect()->to('/' . $pageName . '/' . $pageParameter);
                } else {
                    return redirect()->to('/' . $pageName);
                }
            }
        }
    }

    // public function getClient()
    // {
    //     $id = session('id');
    //     $response = Http::get(env('API_URL') . $id);
    //     $this->client = $response->json();
    //     $this->bank = $this->client['account']['bank'];
    //     Session::put('bank', $this->client['account']['bank']);
    // }

    public function changePage($page)
    {
        event(new PageChangedEvent($page));
    }
}
