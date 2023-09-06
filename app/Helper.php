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
}