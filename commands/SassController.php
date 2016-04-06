<?php

namespace app\commands;

use yii;
use yii\console\Controller;

class SassController extends Controller
{
    public function actionIndex($fromFile = 'app.scss', $toFile = 'app.css', $fromDir = 'resources\assets\sass', $toDir = 'public\css')
    {
        $basePath = Yii::$app->getBasePath();

        $from = $basePath . DIRECTORY_SEPARATOR . $fromDir . DIRECTORY_SEPARATOR . $fromFile;
        $to = $basePath . DIRECTORY_SEPARATOR . $toDir . DIRECTORY_SEPARATOR . $toFile;
        //$command = "sass $from $to --no-cache --style=compressed";
        $command = "sass $from $to --no-cache";
        echo "$command\n\n";

        $descriptor = [
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ];
        $pipes = [];
        $proc = proc_open($command, $descriptor, $pipes, $basePath);
        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        foreach ($pipes as $pipe) {
            fclose($pipe);
        }
        $status = proc_close($proc);

        if ($status === 0) {
            echo "Converted $from into $to\n";
            if ($stdout) {
                echo "STDOUT:\n$stdout";
            }
            if ($stderr) {
                echo "STDERR:\n$stderr";
            }
        } else {
            echo "Command failed with exit code $status\n";
            if ($stdout) {
                echo "STDOUT:\n$stdout";
            }
            if ($stderr) {
                echo "STDERR:\n$stderr";
            }
        }
    }
}
