<?php
Class Helper
{
    public static function genCode($type = 'product')
    {
        $code = '';
        if ($type == 'product') {
            $code = 'PRD' . strtoupper(substr(md5(date('YmdHis').time().rand()),0,6));
        } elseif ($type == 'supplier') {
            $code = 'SUP' . strtoupper(substr(md5(date('YmdHis').time().rand()),0,6));
        } elseif ($type == 'customer') {
            $code = 'CST' . strtoupper(substr(md5(date('YmdHis').time().rand()),0,6));
        } elseif ($type == 'order') {
            $code = 'ORD' . strtoupper(substr(md5(date('YmdHis').time().rand()),0,6));
        }elseif($type == 'category')
        {
            $code = 'CTG' . strtoupper(substr(md5(date('YmdHis').time().rand()),0,6));
        }elseif($type == 'invoice')
        {
            $code = 'INV' . strtoupper(substr(md5(date('YmdHis').time().rand()),0,6));
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