<?php
namespace App\classes;
class Product
{
    protected $products = [];

    public function getProduct(){
        return [
            0=> [
                'id'            => '1',
                'title'         => 'Sofa',
                'description'   => 'This is a very good furniture. You can buy it',
                'price'         =>  '30,000',
                'category'      => 'Furniture',
                'image'         => '1sofa.jpg',
                'brand'         => 'Kakoli Furniture'
            ],
            1=> [
                'id'            => '2',
                'title'         => 'Color Full Chair',
                'description'   => 'This is a very good furniture. You can buy it',
                'price'         =>  '5,000',
                'category'      => 'Furniture',
                'image'         => '2chair.jpg',
                'brand'         => 'Kakoli Furniture'
            ],
            2=> [
                'id'            => '3',
                'title'         => 'Dolna',
                'description'   => 'This is a very good furniture. You can buy it',
                'price'         =>  '10,000',
                'category'      => 'Furniture',
                'image'         => '3dolna.jpg',
                'brand'         => 'Kakoli Furniture'
            ],
            3=> [
                'id'            => '4',
                'title'         => 'Prince Bed',
                'description'   => 'This is a very good furniture. You can buy it',
                'price'         =>  '1,00000',
                'category'      => 'Furniture',
                'image'         => '4khat.jpg',
                'brand'         => 'Kakoli Furniture'
            ],
            4=> [
                'id'            => '5',
                'title'         => 'Almira',
                'description'   => 'This is a very good furniture. You can buy it',
                'price'         =>  '25,000',
                'category'      => 'Furniture',
                'image'         => '5almira.jpg',
                'brand'         => 'Kakoli Furniture'
            ],
            5=> [
                'id'            => '6',
                'title'         => 'Chair',
                'description'   => 'This is a very good furniture. You can buy it',
                'price'         =>  '6,000',
                'category'      => 'Furniture',
                'image'         => '6chair.jpg',
                'brand'         => 'Kakoli Furniture'
            ]
        ];
    }

    public function getProductsById($id)
    {
        $this->products = $this->getProduct();
        foreach($this->products as $allProduct){
            if($allProduct['id'] == $id){
                return $allProduct;
            }
        }
    }
}