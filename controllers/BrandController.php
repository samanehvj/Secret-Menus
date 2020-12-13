<?php

class BrandController extends Controller
{
    public function err()
    {
        echo "Method Not Found";
    }

    public function list()
    {
        $this->title = "Brands ";

        $nav = CategoryModel::list();

        $content = $this->loadView("views/HomeHeadView.php");

        $this->data = BrandModel::list();
        $content .= "<div class='container'>" . $this->loadView("views/BrandsView.php") . "</div>";

        $content .= $this->loadView("views/BrandFormView.php");
        $content .= $this->loadView("views/FooterView.php");

        include("views/MainView.php");
    }

    public function view(int $id)
    {
        $this->data['brand'] = BrandModel::view($id);
        $this->title = strtoupper($this->data['brand']->name);

        $content = $this->loadView("views/BrandHeadView.php");

        $this->data['secret_menus'] = BrandModel::secret_menu($id);
        $content .= "<div class='container'>" . $this->loadView("views/BrandSecretMenusView.php") . "</div>";
        $content .= $this->loadView("views/SecretMenuFormView.php");

        $content .= $this->loadView("views/FooterView.php");

        include("views/MainView.php");
    }

    public function search(string $name)
    {
        $this->title = "Brands Secret Menus";

        $content = $this->loadView("views/HomeHeadView.php");

        $this->data = BrandModel::search($name);
        $content .= "<div class='container'>" . $this->loadView("views/BrandsView.php") . "</div>";

        $content .= $this->loadView("views/BrandFormView.php");
        $content .= $this->loadView("views/FooterView.php");

        include("views/MainView.php");
    }

    public function filter(int $category)
    {
        $this->title = "Brands Secret Menus";
        // $nav = CategoryModel::list();

        $content = $this->loadView("views/HomeHeadView.php");

        $this->data = BrandModel::filter($category);
        $content .= "<div class='container'>" . $this->loadView("views/BrandsView.php") . "</div>";

        $content .= $this->loadView("views/BrandFormView.php");
        $content .= $this->loadView("views/FooterView.php");

        include("views/MainView.php");
    }

    public function save($request, $file)
    {
        // die('hi');
        if (BrandModel::save($request, $file)) {
            $message = "New Brand Successfully Added";
        } else {
            $message = "New Brand Can Not Be Added";
        }

        $this->title = "Brands ";

        $nav = CategoryModel::list();

        $content = $this->loadView("views/HomeHeadView.php");

        $this->data = BrandModel::list();
        $content .= "<div class='container'>" . $this->loadView("views/BrandsView.php") . "</div>";

        $content .= $this->loadView("views/BrandFormView.php");
        $content .= $this->loadView("views/FooterView.php");

        include("views/MainView.php");
    }

    public function savemenu($request, $file)
    {
        $id = $request['brand_id'];

        $this->data['brand'] = BrandModel::view($id);
        $this->title = strtoupper($this->data['brand']->name);

        if (BrandModel::savemenu($request, $file)) {
            $message = "New Menu Successfully Added";
        } else {
            $message = "New Menu Can Not Be Added";
        }



        $content = $this->loadView("views/BrandHeadView.php");

        $this->data['secret_menus'] = BrandModel::secret_menu($id);
        $content .= "<div class='container'>" . $this->loadView("views/BrandSecretMenusView.php") . "</div>";

        $content .= $this->loadView("views/SecretMenuFormView.php");
        $content .= $this->loadView("views/FooterView.php");

        include("views/MainView.php");
    }
}
