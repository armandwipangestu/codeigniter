<?php

class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }

    function index()
    {
        $data['product'] = $this->product_model->get_product();
        $this->load->view('product_view', $data);
    }

    function add_new()
    {
        $this->load->view('add_product_view');
    }

    function save()
    {
        $product_name = $this->input->post('product_name');
        $product_price = $this->input->post('product_price');
        $this->product_model->save($product_name, $product_price);
        redirect('product');
    }

    function delete()
    {
        $product_id = $this->uri->segment(3);
        $this->product_model->delete($product_id);
        redirect('product');
    }

    function get_edit()
    {
        $product_id = $this->uri->segment(3);
        $result = $this->product_model->get_product_id($product_id);

        if ($result->num_rows() > 0) {
            /* 
                Code berikut melakukan extracting atau destructuring pada object
                atau associative array.

                Contoh hasil dari variable $res = [
                    "product_id" => 3,
                    "product_name" => "Coca Cola",
                    "product_price" => "3000"
                ];

                Lalu kita destructuring menggunakan function extract
                sehingga kita langsung dapat mengakses key nya dengan
                variable $key_name

                Sebelum extract : $res["product_id"];
                Setelah extract : $product_id;
            */
            $res = $result->row_array();
            extract($res);
            $data = [
                'product_id' => $product_id,
                'product_name' => $product_name,
                'product_price' => $product_price
            ];
            $this->load->view('edit_product_view', $data);
        } else {
            echo "Data was not found";
        }
    }

    function update()
    {
        $product_id = $this->input->post('product_id');
        $product_name = $this->input->post('product_name');
        $product_price = $this->input->post('product_price');

        $this->product_model->update($product_id, $product_name, $product_price);
        redirect('product');
    }
}
