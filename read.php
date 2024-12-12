投票結果の集計<br>

<?php
// ファイルを開く
$data = file_get_contents("data/data.txt");

echo nl2br($data); // from nl to br textファイルの改行"\n"を<br>に変換する関数

require_once ('C:/xampp/htdocs/Gs_code_submit/php01_submit/jpgraph-4.4.2/src/jpgraph.php');
require_once ('C:/xampp/htdocs/Gs_code_submit/php01_submit/jpgraph-4.4.2/src/jpgraph_bar.php');
require_once ('jpgraph-4.4.2/src/jpgraph.php');
require_once ('jpgraph-4.4.2/src/jpgraph_bar.php');

// 縦軸のデータ
$data = array(1,5,10);

// グラフの生成
$graph = new Graph(400, 300);
$graph->SetScale('textlin');

$graph->SetMarginColor('white');

// タイトル
$graph->title->Set('集計結果');

// グラフ表示
$bar = new BarPlot($data);
$bar->value->Show();
$graph->Add($bar);
$graph->Stroke();

//別の方法
// $lines = explode("\n", $data);
// $scores = array('A' => 0, 'B' => 0, 'C' => 0, 'D' => 0);

// foreach ($lines as $line) {
//     $score = trim($line);
//     if (isset($scores[$score])) {
//         $scores[$score]++;
//     }
// }

// // データの準備
// $score_labels = array_keys($scores);
// $score_values = array_values($scores);

// // グラフの作成
// $graph = new Graph(400, 300, 'auto');
// $graph->SetScale('textlin');

// $barplot = new BarPlot($score_values);
// $graph->Add($barplot);

// $graph->xaxis->SetTickLabels($score_labels);
// $graph->xaxis->title->Set('Score');
// $graph->yaxis->title->Set('Votes');

// $graph->title->Set('Score Distribution');

// // グラフの表示
// $graph->Stroke();

?>