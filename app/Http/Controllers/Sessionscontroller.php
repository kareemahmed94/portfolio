<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sessionscontroller extends Controller
{

	public function destroy()
	{
		auth()->logout();

		return redirect()->home();
		
	}
    
}
