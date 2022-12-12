<h1>Them Bac Si</h1>

<form action="" method="post">
    <label for="">Ho va ten</label>
    <input type="text" name="name" required value="<?= $doctor->name?>" id=""><br />

    <label for="">Email</label>
    <input type="email" name="email" required value="<?= $doctor->email?>" id=""><br />

    <label for="">Password</label>
    <input type="password" name="password" required value="<?= $doctor->password?>" id=""><br />

    <label for="">Chuc vu</label>
    <input type="text" name="chucvu" required value="<?= $doctor->chucvu?>" id=""><br />

    <label for="">Khoa</label>
    <input type="text" name="khoa" required value="<?= $doctor->khoa?>" id=""><br />

    <label for="">Bang Cap</label>
    <input type="text" name="bangcap" required value="<?= $doctor->bangcap?>" id=""><br />

    <input type="submit" value="Luu thay doi">
</form>