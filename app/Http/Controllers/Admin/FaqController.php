<?php

namespace App\Http\Controllers\Admin;
use App\Models\FaqModel;
use App\Models\FaqCategories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cat)
    {
        $faqs = DB::table('faq_models')->select('*')->where('category',$cat)->get();     
        $cats = FaqCategories::get();
        
           
        return view('admin.faq')->with(['faqs'=> $faqs,'cats'=> $cats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $faq = FaqModel::find($id);
        $faqCat= $faq->category;
       // dd($faqCat);
               
        $request->validate([
           'question' => [ 'string','required'],
           'shortansw' => [ 'string','required'],          
           'longansw' => [ 'string','required'],
       ]);
     
       $userUpdate=[
           'question' => $request->question,               
           'shortansw' => $request->shortansw,
           'longansw' => $request->longansw,      
       ];       
    
      DB::table('faq_models')->where('id', $id)->update($userUpdate);
       return redirect()->back()->withErrors('Successfully updated!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $faq = FaqModel::find($id);
        $faq->delete();
        return redirect()->back()->withErrors('Successfully deleted!');
    }
    

 
}
