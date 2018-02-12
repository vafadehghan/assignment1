<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends Application
{
    public function index()
    {
        $categories = $this->categories->all();
        foreach ($categories as $category) {
            $accessories = $this->accessories->some('categoryId', $category->categoryId);
            foreach ($accessories as $accessory) {
                $accessory->categoryName = $category->categoryName;
            }
            $category->accessories = $accessories;
        }

        $sets = $this->sets->all();

        $this->data['sets'] = $sets;
        $this->data['categories'] = $categories;

        $this->data['pagebody'] = 'catalog';
        $this->data['pagetitle'] = 'All Items';
        $this->render();
    }
}
