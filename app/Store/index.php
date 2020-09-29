<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome
 *
 * @author Asip Hamdi
 * Github : axxpxmd
 */

namespace App\Store;

// Models
use App\Models\SubCategory;

class index
{
    /**
     * Passing for view header
     */
    public static function subHeadline()
    {
        $subCategory1 = SubCategory::wherecategory_id(1)->get();
        return $subCategory1;
    }

    public static function subIndepth()
    {
        $sub_indept = SubCategory::wherecategory_id(2)->get();
        return $sub_indept;
    }

    public static function subKebijakan()
    {
        $subCategory3 = SubCategory::wherecategory_id(3)->get();
        return $subCategory3;
    }

    public static function subSerbaSerbi()
    {
        $subCategory4 = SubCategory::wherecategory_id(4)->get();
        return $subCategory4;
    }
}
