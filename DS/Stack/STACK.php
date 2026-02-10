<?php
// Khai báo class Stack (ngăn xếp)
class Stack {

    // Mảng dùng để lưu dữ liệu stack
    private $stack = [];

    // Con trỏ top: chỉ phần tử ở ĐỈNH stack
    // Ban đầu = -1 vì stack đang rỗng
    private $top = -1;

    // Hàm đẩy phần tử lên ĐỈNH stack
    public function push($value) {

        // ++$this->top
        // → tăng top lên 1 TRƯỚC
        // → rồi dùng nó làm index
        // Ví dụ:
        // top = -1 → ++top = 0 → stack[0] = value
        $this->stack[++$this->top] = $value;
    }

    // Hàm lấy và XÓA phần tử ở ĐỈNH stack
    public function pop() {

        // Nếu top < 0
        // nghĩa là stack rỗng
        if ($this->top < 0) {
            return null;
        }

        // Trả về phần tử ở đỉnh stack
        // SAU ĐÓ top giảm xuống 1
        // Ví dụ:
        // top = 2 → lấy stack[2]
        // rồi top = 1
        return $this->stack[$this->top--];
    }

    // Hàm xem phần tử ở ĐỈNH stack
    // KHÔNG xóa
    public function peek() {

        // Nếu stack còn phần tử (top >= 0)
        // thì trả về phần tử trên cùng
        // ngược lại trả null
        return $this->top >= 0
            ? $this->stack[$this->top]
            : null;
    }
}

// ===== DEMO CHẠY THỬ =====

// Tạo object stack mới
$s = new Stack();

// push 10
// stack = [10]
// top = 0
$s->push(10);

// push 20
// stack = [10, 20]
// top = 1
$s->push(20);

// push 30
// stack = [10, 20, 30]
// top = 2
$s->push(30);

// pop → lấy phần tử trên cùng
// trả về 30
// top giảm còn 1

echo "Stack pop: " . $s->pop(); // 30
echo "Stack pop: " . $s->pop();
echo "Stack pop: " . $s->pop();
?>
