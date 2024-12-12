<html>
    <style>
        .result {
            
        }
        .result1 {
            color: white;
            background-color: #2FA6E9;
            width: 50%;
            padding: 10px;
            text-align: center;
        }
        
        ul {
            list-style-type: decimal;

        }

        li {
            background-color: #e0e0e0;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            width: 47%;
        }
    </style>    
    <body class="result">
        <h1 class="result1"> 投票結果の集計 </h1> 
    
    </body>
    
    </html>

<?php
// ファイルを開く
$data = file_get_contents("data/data.txt"); 
    $lines = explode("\n", $data);

    echo "<ul>";

    foreach ($lines as $line) {
        if (trim($line) == '') continue; // 空行をスキップ
        $fields = explode("/", $line);
         // 日付のフォーマットを変更
        $date = DateTime::createFromFormat("Y/m/d", $fields[0]);
        if ($date) {
            $fields[0] = $date->format("Y/m/d");
        }
        echo "<li>";
        echo htmlspecialchars(implode(" - ", $fields));
        echo "</li>";
    }

//     echo '</ul>';
// echo nl2br($data); // from nl to br textファイルの改行"\n"を<br>に変換する関数

// require_once ('C:/xampp/htdocs/Gs_code_submit/php01_submit/jpgraph-4.4.2/src/jpgraph.php');
// require_once ('C:/xampp/htdocs/Gs_code_submit/php01_submit/jpgraph-4.4.2/src/jpgraph_bar.php');
// require_once ('jpgraph-4.4.2/src/jpgraph.php');
// require_once ('jpgraph-4.4.2/src/jpgraph_bar.php');

// 縦軸のデータ
// $data = array(1,5,10);
// echo $data;

// // グラフの生成
// $graph = new Graph(400, 300);
// $graph->SetScale('textlin');

// $graph->SetMarginColor('white');

// // タイトル
// $graph->title->Set('集計結果');

// // グラフ表示
// $bar = new BarPlot($data);
// $bar->value->Show();
// $graph->Add($bar);
// $graph->Stroke();

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