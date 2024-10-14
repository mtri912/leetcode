<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $numMap = []; // Khởi tạo hash map
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i]; // Tính phần tử bổ sung
            if (array_key_exists($complement, $numMap)) { // Kiểm tra nếu phần tử bổ sung đã có trong map
                return [$numMap[$complement], $i]; // Trả về chỉ số của hai phần tử
            }
            $numMap[$nums[$i]] = $i; // Thêm số hiện tại vào map
        }
        return []; // Trường hợp không tìm thấy, trả về mảng rỗng
    }
}

