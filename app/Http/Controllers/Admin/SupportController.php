<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use App\Services\SupportService;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct( protected SupportService $service )
    {
    }
    public function destroy(string $id){
        $this->service->delete($id);

            return redirect()->route('support.index');
    }
    public function index(Request $request){
        $supports = $this->service->getAll($request->filter);
        //dd($supports);

        return view('admin/supports/index',compact('supports'));
    }
    public function show(string $id){
            $support = $this->service->findOne($id);
            if($support == null){
                return back();
            }
            return view('admin/supports/show',compact('support'));
    }
    public function edit(string $id){
        $support = $this->service->findOne($id);;
        if (!$support){
            return back();
        }
        return view('admin/supports/edit',compact('support'));
    }
    public function create(){
        return view('admin/supports/create');
    }
    public function store(StoreUpdateSupport $request){
        $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return redirect()->route('support.index');
        
    }
    public function update(StoreUpdateSupport $request){
        $support =  $this->service->update(UpdateSupportDTO::makeFromRequest($request));

        if (!$support){
            return back();
        }
        
        //$support->subject = $request->subject;
        //$support->body = $request -> body;
        //$support->save();

        
        return redirect()->route('support.index');
    }
}
