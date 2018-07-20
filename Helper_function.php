<?php
/**
 * Created by PhpStorm.
 * User: Berramou
 * Date: 20/07/2018
 * Time: 19:10
 */

/**
 * Helper Function to filter array by value of a specific key.
 *
 * @param $arr
 * @param $index
 * @param $value
 *
 * @return array
 */
function filter_array_by_value_of_key($arr, $index = '', $value = '') {
  return array_filter($arr, function ($val, $key) use ($index, $value) {
    return isset($val[$index]) && ($val[$index] === $value);
  }, ARRAY_FILTER_USE_BOTH);
}


/**
 * Helper Function to get array Values.
 * @param array $data
 * @param bool  $index
 *
 * @return array|mixed
 */
function get_array_values($data = array(), $index = FALSE) {
  if ($index !== FALSE && is_int($index) && $index <= count($data)) {
    return $data[$index];
  }
  return $data;
}
