<?php
require_once "./src/jpgraph.php";
require_once "./src/jpgraph_pie.php";
//模擬資料
$data=array(0=>3.5,1=>4.6,2=>9.1,3=>21.9,4=>42.3,5=>90.7,6=>183.5,7=>127.5,8=>61.4,9=>33.5,10=>11.5,11=>4.4);
//建立畫布
$graph=new PieGraph(800,500);
//設定影象邊界範圍
$graph->img->SetMargin(30,30,80,30);
//設定標題
$graph->title->Set("PiePlot Test");
//得到餅圖物件
$piePlot=new PiePlot($data);
//設定圖例
$piePlot->SetLegends(array(1,2,3,4,5,6,7,8,9,10,11,12));
//設定圖例位置
$graph->legend->Pos(0.01,0.45,"left","top");
//新增到畫布中
$graph->Add($piePlot);
//輸出畫布
$graph->Stroke();