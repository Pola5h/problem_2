<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class CategoryController extends Controller
{
    




    public function CategoryView(){

        $data['alldata'] = productcategory::all();
        return view('admin.backend.product.view_product_category',$data);
    
    }

    public function CategoryAdd(){

        return  view('admin.backend.product.add_product_category');
        
        }



        public function CategoryStore(Request $request){

            $validateData=$request-> validate([
         
             'category_name'=>'required ',
            
         
         ]);   
         
         $data = new ProductCategory();
         
         $data->category_name=$request->category_name;
         
         
         $data->save();
         
         $notification = array(
         
             'message' => 'Data Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('category.view')->with($notification);
         
         
         
             }


             
         
             public function CategoryEdit($id){
                $editData = ProductCategory::find($id);
                return view('admin.backend.product.edit_product_category',compact('editData'));
        
            }





   
             public function CategoryUpdate(Request $request,$id){



                $data = ProductCategory::find($id);



                $data->category_name=$request->category_name;
               


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Data Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('category.view')->with($notification);
            
            
            
            }
            
            













    public function CategoryDelete($id){

        $product_categories = ProductCategory::find($id);
        $product_categories-> delete();
        
        
        $notification = array(
            
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'success'
        
        );
        
        
        
        return redirect()->route('category.view')->with($notification);
        
        
        
        }













}
