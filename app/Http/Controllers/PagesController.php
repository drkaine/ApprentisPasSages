<?php


namespace App\Http\Controllers;




//Models
use App\Models\Album;
use App\Models\Photo;
use App\Models\Action;
use App\Models\Membre;
use App\Models\Module;
use App\Models\Page;
use App\Models\Tagalbum;
use App\Models\Catalogue;
use App\Models\Etiquette;
use App\Models\ContentProg;
use App\Models\Coupsdecoeur;
use App\Models\Programmation;
use App\Models\Actioncatalogue;
use App\Models\Categoriecoupsdecoeur;

//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{    
/* **************************!!!!!!!!!!EDIT!!!!!*************************************
   **************************************************************************/  
     public function saveEdit(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'contenu'=>'required'
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }

        $page = Page::find($request->id);
        $page->contenu = $request->contenu;
        $page->save();
        return back();
    }
    
    
    
}
