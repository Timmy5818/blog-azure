<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $appname = $request->input("appname");
        $type = $request->input("type");
        $version = $request->input("version");
        $url = $request->input("url");
        $url64 = $request->input("url64");
        
        $runCmd  = "powershell.exe C:\Users\Mark\Desktop\blog\powershell\shelltest.ps1 $appname $type $version $url $url64";
        $output = shell_exec($runCmd);
        // $outputall = exec($runCmd ,$output);
        
        return $output;
    }
}
