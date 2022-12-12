<?php
 echo '<pre>';
 print_r($doctors);
 die();
 

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>Danh mục Bác sĩ</h1>
    <a href="/books/add">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Bác Sĩ</th>
                <th>Email</th>
                <th>Chức Vụ</th>
                <th>Khoa</th>
                <th>Bằng cấp</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 1;
            foreach ($books as $book) : ?>
                <tr id="<?= $book->id ?>">
                    <td><?= $stt ?></td>
                    <td><?= $book->title ?></td>
                    <td><?= $book->description ?></td>
                    <td><?= $book->pages ?></td>
                    <td><?= $book->price ?></td>
                    <td>
                        <a href="/books/edit/<?= $book->id ?>">Sửa</a>
                        <a class="delete" href="#">Xóa</a>
                    </td>
                </tr>
            <?php $stt++;
            endforeach ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(() => {
            $('.delete').click((event) => {
                const trBook = $(event.target).parents('tr');
                const id = trBook.prop('id');
                const title = trBook.children('td:eq(1)').html();
                const question = `Bạn muốn xóa sách "${title}"?`;
                const ok = confirm(question);
                if (ok) {
                    location.href = `books/delete/${id}`;
                }
                return ok;
            });
        });
    </script>
</body>

</html>