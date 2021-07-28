<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News_and_event;
use App\Models\Partners;
use App\Models\Treyning;
use App\Models\Steering_committee;
use App\Models\About_us;
use App\Models\Alumni_association;
use App\Models\Cohort_text;

class FindeController extends Controller
{
    public function index(Request $request)
     {  
     	// 'date','','','','','','',
       if(!empty($request['finde'])){
       $findenews = News_and_event::Where('date', 'like', '%' . $request['finde'] . '%')->
       orWhere('title_text_am', 'like', '%' . $request['finde'] . '%')->
       orWhere('title_text_en', 'like', '%' . $request['finde'] . '%')->
       orWhere('index_text_am', 'like', '%' . $request['finde'] . '%')->
       orWhere('index_text_en', 'like', '%' . $request['finde'] . '%')->
       orWhere('text_am', 'like', '%' . $request['finde'] . '%')->
       orWhere('text_en', 'like', '%' . $request['finde'] . '%')->get();

    
    
   
    
   foreach($findenews as $findenew){

   	echo  "<a href='/".app()->getLocale()."/news/".$findenew->id."'>".$findenew->title_text_am."</a>";
    
	}
}else{
		
		echo "none";
	}
}
}


      