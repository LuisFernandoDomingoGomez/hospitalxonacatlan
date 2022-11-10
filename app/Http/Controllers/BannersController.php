<?php

namespace App\Http\Controllers;

use App\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannersController extends Controller
{
    /**
     * @author Carlos Ramirez 
     * @version 1.0  16/03/2020
     * @copyright todos los derechos reservados Carlos Ramirez Dominguez
     * @return Banners
     */
    public function index()
    {
        $publicidad = Banners::all();
        return view('publicidad.show')
        ->with('publicidad',$publicidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formato = new Banners;
        
        $file=$request->file('banner_uno');
        if ($file!=""){
      
            $ldate = date('Ymd_His_');
            $img = $file->getClientOriginalName();
            $img1=$ldate.$img;
            \Storage::disk('local')->put($img1, \File::get($file));
        }
        else {
          $img1='no.jpg';
        }

        $file=$request->file('banner_dos');
        if ($file!=""){
    
          $ldate = date('Ymd_His_');
          $img = $file->getClientOriginalName();
          $img2=$ldate.$img;
          \Storage::disk('local')->put($img2, \File::get($file));
         }
         else {
             $img2='no.jpg';
         }


        $file=$request->file('banner_tres');
        if ($file!=""){
  
          $ldate = date('Ymd_His_');
          $img = $file->getClientOriginalName();
          $img3=$ldate.$img;
          \Storage::disk('local')->put($img3, \File::get($file));
        }
        else {
          $img3='no.jpg';
        }

        $formato->banner_uno = $img1;
        $formato->banner_dos = $img2;
        $formato->banner_tres = $img3;
        $formato->save();
                  
        return redirect()->route('publicidad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $publicidad = Banners::find($id);
         //return  $publicidad;
         return view('publicidad.show',['publicidad'=>$publicidad]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicidad = Banners::findOrFail($id);

        return view('publicidad.edit',['publicidad'=>$publicidad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formato = Banners::find($id);

        if ($request->hasFile('banner_uno')) {

            \Storage::disk('local')->delete("{$formato->banner_uno}");

           $imageuno=$request->file('banner_uno');
           $ldate = date('Ymd_His_');
           $imgfrontal = $imageuno->getClientOriginalName();
           $img1=$ldate.$imgfrontal;
           \Storage::disk('local')->put($img1, \File::get($imageuno));
           $formato->banner_uno = $img1;
        }


        if ($request->hasFile('banner_dos')) {

            \Storage::disk('local')->delete("{$formato->banner_dos}");

           $imagedos=$request->file('banner_dos');
           $ldate = date('Ymd_His_');
           $imgfrontal = $imagedos->getClientOriginalName();
           $img2=$ldate.$imgfrontal;
           \Storage::disk('local')->put($img2, \File::get($imagedos));
           $formato->banner_dos = $img2;
        }

        if ($request->hasFile('banner_tres')) {

            \Storage::disk('local')->delete("{$formato->banner_tres}");

           $imagetres=$request->file('banner_tres');
           $ldate = date('Ymd_His_');
           $imgfrontal = $imagetres->getClientOriginalName();
           $img3=$ldate.$imgfrontal;
           \Storage::disk('local')->put($img3, \File::get($imagetres));
           $formato->banner_tres = $img3;
        }

     
       $formato->save();

       return redirect()->route('publicidad.index');
    }


    public function banners(Request $request)
    {
         if($request->ajax()) {
        $banners=DB::table('banners')->orderBy('banner_id', 'asc')->get();
        foreach ($banners as $banner) {
            $data = array([$banner->banner_id] = $banner->banner_uno,
                [$banner->banner_id] = $banner->banner_dos,
                [$banner->banner_id] = $banner->banner_tres);
        }
        return response()->json($data);
        }
    }
}
