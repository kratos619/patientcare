<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\ORM\TableRegistry;
class FormatHelper extends Helper
{
    public function getName($id,$resource)
    {
        $record = TableRegistry::get($resource);
        $query = $record->find()->where(['id' => $id]);
        return $query->first()->name;
    }
}

