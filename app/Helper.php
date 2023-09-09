<?php
Class Helper
{
    public static function genCode($type = 'product')
    {
        $code = '';
        if ($type == 'product') {
            $code = 'PRD' . date('YmdHis');
        } elseif ($type == 'supplier') {
            $code = 'SUP' . date('YmdHis');
        } elseif ($type == 'customer') {
            $code = 'CST' . date('YmdHis');
        } elseif ($type == 'order') {
            $code = 'ORD' . date('YmdHis');
        }
        return $code;
    }
    public static function rupiah($amount , $rp = true)
    {
        if($rp)
        {
            return 'Rp' . number_format($amount , 0 , ',' , '.');
        }else{
            return number_format($amount , 0 , ',' , '.');
        }
    }

    public static 
    function orderstatus($status = 'paid')
    {
        if($status == 'paid')
        {
            return '<b> LUNAS </b>';
        }else{
        return '<i>BELUM LUNAS</i>';
        }
    }
}