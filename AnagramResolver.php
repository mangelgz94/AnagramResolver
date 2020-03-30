<?php
/**
 * Created by PhpStorm.
 * User: mangelgz94
 * Date: 3/30/2020
 * Time: 12:59 AM
 */

class AnagramResolver
{

    /**
     * @var array
     */
    protected $output = [];
    /**
     * @var array
     */
    protected $anagramArray;


    public function processAnagramArray()
    {
        $array = $this->getAnagramArray();
        $value = array_shift($array);

        return $this->checkAnagramValues($value, $array, 0);

    }

    /**
     * @param string $value
     * @param array $array
     * @param int $index
     * @return bool|null
     */
    public function checkAnagramValues($value, $array, $index)
    {
        $reachedMaxedLength = false;
        if (empty($array)) {
            return null;
        }

        $array = array_values($array);
        if ($index == count($array)) {
            $reachedMaxedLength = true;
            $index              = 0;
        }
        $areAnagrams = $this->areAnagrams($value, $array[$index]);
        if ($areAnagrams && !in_array($value, $this->output)) {
            $this->output[] = $value;
            unset($array[$index]);
        }
        if ($reachedMaxedLength) {
            $value = array_shift($array);
        }
        $this->checkAnagramValues($value, $array, $index + 1);


        return $areAnagrams;
    }

    /**
     * @param string $firstValue
     * @param string $secondValue
     * @return bool
     */
    public function areAnagrams($firstValue, $secondValue)
    {
        if (count_chars($firstValue, 1) == count_chars($secondValue, 1)) {
            return true;
        }

        return false;
    }

    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @return array
     */
    public function getAnagramArray()
    {
        return $this->anagramArray;
    }

    /**
     * @param array $anagramArray
     */
    public function setAnagramArray($anagramArray)
    {
        $this->anagramArray = $anagramArray;
    }
}