<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }


    public function Delete($Id)
    {
        $this->product->Delete($Id);
        return redirect()->to('product');
    }
    


    public function edit($Id)
{
    // Fetch the existing product data by ID from the database
    $existingProduct = $this->product->find($Id);

    if (!$existingProduct) {
        // Handle the case where the product with the given ID is not found (e.g., show an error message)
        return redirect()->to('product')->with('error', 'Product not found');
    }

    // Validate the form data and retrieve the updated values
    $data = [
        'ProductName' => $this->request->getVar('ProductName'),
        'ProductDescription' => $this->request->getVar('ProductDescription'),
        'ProductCategory' => $this->request->getVar('ProductCategory'),
        'ProductQuantity' => $this->request->getVar('ProductQuantity'),
        'ProductPrice' => $this->request->getVar('ProductPrice'),
    ];

    // Use the update method provided by CodeIgniter's Model to update the product
    $this->product->update($Id, $data);

    // Redirect back to the product listing page or wherever you prefer
    return redirect()->to('edit')->with('success', 'Product updated successfully');
}


    public function save()
    {
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];
        $this->product->save($data);
        return redirect()->to('product');

    }
    public function product($product)
    {
        echo $product;
    }
    public function laramel20()
    {
        $data ['product']= $this->product->findAll();
        return view('product', $data); 
    }
    public function index()
    {
      //
    }
}
