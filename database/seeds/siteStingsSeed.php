<?php

use Illuminate\Database\Seeder;
 use App\Models\siteStings;

class siteStingsSeed extends Seeder
{


public function run() {
 

$add=new siteStings;
$add->key='Web site name';
$add->value="المصرية السورية";
$add->lang="ar";
$add->save();

$add=new siteStings;
$add->key='x';
$add->lang="ar";
$add->value="30.0805954";
$add->save();


$add=new siteStings;
$add->key='about photo';
$add->lang="ar";
$add->value="about.png";
$add->save();


$add=new siteStings;
$add->key='y';
$add->lang="ar";
$add->value="31.3391047";
$add->save();

$add=new siteStings;
$add->key='z';
$add->lang="ar";
$add->value="15";
$add->save();

$add=new siteStings;
$add->key='phone';
$add->lang="ar";
$add->value="01123175215 / 01123175215";
$add->save();

$add=new siteStings;
$add->key='Mail';
$add->lang="ar";
$add->value="contact@syrianegyptionco.com/";
$add->save();

$add=new siteStings;
$add->key='facebook';
$add->lang="ar";
$add->value="https://www.facebook.com/foodafood/";
$add->save();

$add=new siteStings;
$add->key='About Us';
$add->lang="ar";
$add->value=" مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة . مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة . مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة . ";
$add->save();

$add=new siteStings;
$add->key='sub titles';
$add->lang="ar";
$add->value="  مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة ";
$add->save();


$add=new siteStings;
$add->key='logo';
$add->lang="ar";
$add->value="logo.png";
$add->save();

$add=new siteStings;
$add->key='Location';
$add->lang="ar";
$add->value=" مدينة السادات - المنطقة الصناعية الأولى امام بنك cib. ";
$add->save();

$add=new siteStings;
$add->key='working time';
$add->lang="ar";
$add->value="  
المواعيد من 09:00 ص الي 05:00 م كل يوم ماعدا الجمعة  ";
$add->save();



    }



}
