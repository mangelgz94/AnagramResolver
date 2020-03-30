<?php
/**
 * Created by PhpStorm.
 * User: mangelgz94
 * Date: 3/30/2020
 * Time: 2:23 AM
 */

include_once 'AnagramResolver.php';

$anagramResolver = new AnagramResolver();

$anagramResolver->setAnagramArray(["code","doce","car","cat","arc","example"]);
$anagramResolver->getAnagramValues();
echo '<b>Test Case #1:</b><br> ["code","doce","car","cat","arc","example"]';
echo '<br>';
echo '<b>Expected:</b><br> ["code","car",]';
echo '<br>';
echo '<b>Result:</b><br> [';
foreach ($anagramResolver->getOutput() as $index=> $item){
    echo '"'.$item.'",';
}
echo "]";
echo "<br>";
echo "<br>";

$anagramResolver = new AnagramResolver();
$anagramResolver->setAnagramArray(["code","doce"]);
$anagramResolver->getAnagramValues();
echo '<b>Test Case #2:</b><br> ["code","doce"]';
echo '<br>';
echo '<b>Expected:</b><br> ["code",]';
echo '<br>';
echo '<b>Result:</b><br> [';
foreach ($anagramResolver->getOutput() as $index=> $item){
    echo '"'.$item.'",';
}
echo "]";
echo "<br>";
echo "<br>";

$anagramResolver = new AnagramResolver();
$anagramResolver->setAnagramArray(["code","doce","car","arc"]);
$anagramResolver->getAnagramValues();
echo '<b>Test Case #3:</b><br> ["code","doce","car","arc"]';
echo '<br>';
echo '<b>Expected:</b><br> ["code","car",]';
echo '<br>';
echo '<b>Result:</b><br> [';
foreach ($anagramResolver->getOutput() as $index=> $item){
    echo '"'.$item.'",';
}
echo "]";
echo "<br>";
echo "<br>";

$anagramResolver = new AnagramResolver();
$anagramResolver->setAnagramArray(["code","code"]);
$anagramResolver->getAnagramValues();
echo '<b>Test Case #4:</b><br> ["code","code"]';
echo '<br>';
echo '<b>Expected:</b><br> ["code",]';
echo '<br>';
echo '<b>Result:</b><br> [';
foreach ($anagramResolver->getOutput() as $index=> $item){
    echo '"'.$item.'",';
}
echo "]";
echo "<br>";
echo "<br>";

$anagramResolver = new AnagramResolver();
$anagramResolver->setAnagramArray(["code"]);
$anagramResolver->getAnagramValues();
echo '<b>Test Case #5:</b><br> ["code"]';
echo '<br>';
echo '<b>Expected:</b><br> []';
echo '<br>';
echo '<b>Result:</b><br> [';
foreach ($anagramResolver->getOutput() as $index=> $item){
    echo '"'.$item.'",';
}
echo "]";


echo "<br>";
echo "<br>";

$anagramResolver = new AnagramResolver();
$anagramResolver->setAnagramArray([]);
$anagramResolver->getAnagramValues();
echo '<b>Test Case #6:</b><br> []';
echo '<br>';
echo '<b>Expected:</b><br> []';
echo '<br>';
echo '<b>Result:</b><br> [';
foreach ($anagramResolver->getOutput() as $index=> $item){
    echo '"'.$item.'",';
}
echo "]";