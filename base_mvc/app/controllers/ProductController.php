<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController{
    public $product;

    public function __construct() {
        $this->product = new Product();
    }

    public function index(){
        $products = $this->product->getProduct();
        return $this->render('product.index', compact('products'));
    }

    public function addProduct() {
        return $this->render('product.add');
    }

    public function postProduct() {
        //khi bấm nút submit ở màn hình thì sẽ bắn về đây
        if (isset($_POST['add'])) {
            //validate
            //tạo ra 1 mảng lỗi = rỗng;
            $errors = [];
            //tên sản phẩm không được bỏ trống
            if (empty($_POST['name'])) {
                $errors[] = "Tên sản phẩm không được bỏ trống";
            }
            //giá sản phẩm không được bỏ trống
            if (empty($_POST['price'])) {
                $errors[] = "Tên sản phẩm không được bỏ trống";
            }
            if (count($errors) > 0) {
                //có lỗi
                flash('errors',$errors,'add-product');
            }else{
                //không lỗi
                $result = $this->product->addProduct(null,$_POST['name'],$_POST['price']);
                if ($result) {
                    flash('success','Thêm mới thành công', 'list-product');
                }
            }
        }
        
    }
 
        
        public function detail($id){
            $product = $this->product->getDetailProduct($id);
            return $this->render('edit-product', compact('product'));
        }

        public function editProduct($id) {
            if (isset($_POST['edit'])) {
                $result = $this->product->updateProduct($id, $_POST['name'],$_POST['price']);
                if ($result) {
                    flash('success', 'Update thành công', 'detail-product/'.$id);
                }
            }
        }

        public function deleteProduct($id){
            $result = $this->product->deleteProduct($id);
            if ($result) {
                flash('success','Xóa thành công','list-product');
            }
        }
}