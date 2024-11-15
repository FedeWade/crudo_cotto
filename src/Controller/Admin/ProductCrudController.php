<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Textarea;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            ChoiceField::new('category')->setChoices([
                'Crudo' => 'crudo',
                'Cotto' => 'cotto',
            ])->renderExpanded(),
            TextField::new('name'),
            TextEditorField::new('description'),
            TextEditorField::new('ingredients'),
            NumberField::new('priceKg')->setRequired(false),
            NumberField::new('priceUnit')->setRequired(false),
            ImageField::new('image')->setBasePath('assets/images/products')->setUploadDir('public/assets/images/products')->setRequired(false),
            BooleanField::new('enabled'),
        ];
    }
    
}
