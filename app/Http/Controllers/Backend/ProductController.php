<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    


    public function  ProductView(){

        $data['alldata'] = product::all();
        return view('admin.backend.product.view_product',$data);
    
    }

    public function ProductAdd(){
        $productcategory['productcategory'] = productcategory::all();


        return  view('admin.backend.product.add_product')->with($productcategory);
        
        }



        public function ProductStore(Request $request){

            $validateData=$request-> validate([
         
             'product_name'=>'required ',
             'product_category'=>'required',
           
         
         
         ]);   
         
         $data = new Product();
         $data->product_name=$request->product_name	;
         $data->product_category=$request->product_category;

         
         $data->save();
         
         $notification = array(
         
             'message' => 'Data Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('product.view')->with($notification);
         
         
         
             }







             public function ProductEdit($id){


                $productcategory['productcategory'] = productcategory::all();

                $editData = Product::find($id);
                return view('admin.backend.product.edit_product',compact('editData'))->with($productcategory);
        
            }









            public function ProductUpdate(Request $request,$id){



                $data = Product::find($id);



                $data->product_name=$request->product_name;
                $data->product_category=$request->product_category;

               


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Data Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('product.view')->with($notification);
            
            
            
            }


            public function ProductDelete($id){

                $products = Product::find($id);
                $products-> delete();
                try{
                    DB::table("product_variants")->where("product_id", $id)->delete();
                                }
    
                                catch (Throwable $e) {
                                    report($e);
                            
                                    return false;
                                }
                
                $notification = array(
                    
                    'message' => 'Data Deleted Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('product.view')->with($notification);
                
                
                
                }


                public function ProductVariantAdd($id){



                    $ProductData = Product::find($id);
        
        
        
                    return view('admin.backend.product.add_productvariant',compact('ProductData'));
            
                }



                public function ProductVariantStore(Request $request){

                    $productvatiantCount = count($request->gender);
                    if ($productvatiantCount !=NULL) {
                        for ($i=0; $i <$productvatiantCount ; $i++) { 
                            $assign_productvatiant = new ProductVariant();
                            $assign_productvatiant->product_id = $request->product_id;
                            $assign_productvatiant->gender = $request->gender[$i];
                            $assign_productvatiant->color = $request->color[$i];
                            $assign_productvatiant->size = $request->size[$i];

                            $assign_productvatiant->price = $request->price[$i];
                            $assign_productvatiant->save();
        
                        } // End For Loop
                    }// End If Condition
        
                    $notification = array(
                        'message' => 'Data Inserted Successfully',
                        'alert-type' => 'success'
                    );
        
                    return redirect()->route('product.view')->with($notification);
        
                }  // End Method 


                public function ProductVariantDetails($id){

                    $data['alldata']=DB::table('product_variants')->where('product_id', $id)->get();
                       return view('admin.backend.product.view_productvariant',$data);
                    
                    }



                    public function ProductVariantEdit($id){



                        $editData = ProductVariant::find($id);
                        return view('admin.backend.product.edit_productvariant',compact('editData'));
                
                    }



                    public function ProductVariantUpdate(Request $request,$id){



                        $data = ProductVariant::find($id);
        
        
        
                        $data->gender=$request->gender;
                        $data->color=$request->color;
    
                        $data->size=$request->size;
    
                        
                        $data->price=$request->price;
        
        
                        
                        $data->save();
                        
                        $notification = array(
                        
                            'message' => 'Data Updated Successfully',
                            'alert-type' => 'success'
                        
                        );
                        
                        
                        
                        return redirect()->route('product.view')->with($notification);
                    
                    
                    
                    }


                    public function  ProductVariantDelete($id){

                        $ProductVariant = ProductVariant::find($id);
                        
                        $ProductVariant-> delete();
                             
                        
                        $notification = array(
                            
                            'message' => 'Data Deleted Successfully',
                            'alert-type' => 'success'
                        
                        );
                        
                        
                        
                        return redirect()->route('product.view')->with($notification);
                        
                        
                        
                        }
    






                        public function ProductDetails($id){


                            $data = ProductVariant::find($id);

                            return view('front.backend.productdetails',compact('data'));
                        
                        }



}
