<?php
// Khai báo một class tên là Queue (hàng đợi)
class Queue {

    // Mảng dùng để lưu dữ liệu của queue
    private $queue = [];

    // Con trỏ front: chỉ vị trí phần tử đầu hàng đợi
    // Ban đầu = 0 vì queue rỗng
    private $front = 0;

    // Con trỏ rear: chỉ vị trí phần tử cuối hàng đợi
    // Ban đầu = -1 vì CHƯA có phần tử nào
    private $rear = -1;

    // Hàm thêm phần tử vào CUỐI queue
    public function enqueue($value) {

        // ++$this->rear
        // → tăng rear lên 1 TRƯỚC
        // → rồi dùng nó làm index
        // Ví dụ:
        // rear = -1 → ++rear = 0 → queue[0] = value
        $this->queue[++$this->rear] = $value;
    }

    // Hàm lấy và xóa phần tử ở ĐẦU queue
    public function dequeue() {

        // Nếu front > rear
        // nghĩa là:
        // - front đã chạy qua hết các phần tử
        // - queue rỗng
        if ($this->front > $this->rear) {
            return null;
        }

        // Trả về phần tử ở front
        // SAU ĐÓ front tăng lên 1
        // Ví dụ:
        // front = 0 → lấy queue[0]
        // rồi front = 1
        return $this->queue[$this->front++];
    }

    // Hàm xem phần tử đầu queue nhưng KHÔNG xóa
    public function peek() {

        // Nếu queue còn phần tử
        // (front <= rear)
        // thì trả về phần tử đầu
        // ngược lại trả null
        return $this->front <= $this->rear
            ? $this->queue[$this->front]
            : null;
    }
}

// ===== DEMO CHẠY THỬ =====

// Tạo một object queue mới
$q = new Queue();

// Thêm 1 vào queue
// queue = [1]
// front = 0, rear = 0
$q->enqueue(1);

// Thêm 2 vào queue
// queue = [1, 2]
// front = 0, rear = 1
$q->enqueue(2);

// Thêm 3 vào queue
// queue = [1, 2, 3]
// front = 0, rear = 2
$q->enqueue(3);

// Lấy phần tử đầu tiên ra
// dequeue() → trả về 1
// front tăng lên thành 1
$q->dequeue(); // 1
$q->dequeue();
echo "Queue dequeue: " . $q->dequeue();
?>
