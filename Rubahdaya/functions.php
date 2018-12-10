<?php
    //membuat koneksi
    $conn=mysqli_connect("localhost","root","","uasweb");
    //Cek koneksi
    if(!$conn)
    {
        die('Koneksi Error : '.mysqli_connect_errno()
        .' - '.mysqli_connect_error());
    }
    //Ambil Data
    $result=mysqli_query($conn,"SELECT * FROM pelanggan");
    
    //function query
    function query($query_kedua)
    {
        global $conn;
        $result = mysqli_query($conn,$query_kedua);
        $rows =[];
        while ($row = mysqli_fetch_assoc($result))
        {
            $rows[]=$row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;

        $Id=htmlspecialchars($data["Id"]);
        $nama=htmlspecialchars($data["Nama"]);
        $alamat=htmlspecialchars($data["Alamat"]);
        $daya=htmlspecialchars($data["Daya"]);
        $tambahandaya=htmlspecialchars($data["Tambahandaya"]);


        $query= "INSERT INTO pelanggan VALUES
                ('$Id','$nama','$alamat','$daya','$tambahandaya')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }


    function hapus($id)
    {
        global $conn;
        mysqli_query($conn,"DELETE FROM pelanggan WHERE Id =$Id ");
        return mysqli_affected_rows($conn);
    }

    function edit($data)
    {
        global $conn;

        $Id=htmlspecialchars($data["Id"]);
        $nama=htmlspecialchars($data["Nama"]);
        $alamat=htmlspecialchars($data["Alamat"]);
        $daya=htmlspecialchars($data["Daya"]);
        $tambahandaya=htmlspecialchars($data["Tambahandaya"]);


        $query="UPDATE pelanggan SET
                Nama = '$nama',
                Alamat = '$alamat',
                Daya = '$daya',
                Tambahandaya = '$tambahandaya'
                WHERE Id=$Id";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword)
    {
        $sql="SELECT * FROM pelanggan
             WHERE
             Id LIKE '%$keyword%' OR
             Nama LIKE '%$keyword%' OR
             Alamat LIKE '%$keyword%'
             ";

        return query($sql);
    }

    function registrasi($data)
    {
        global $conn;

        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $password2= mysqli_real_escape_string($conn,$data["password2"]);

        $result=mysqli_query($conn,"SELECT username FROM user WHERE username='$username'");

        if(mysqli_fetch_assoc($result))
        {
            echo "
            <script>
                alert('Username Sudah ada');
            </script>
            ";

            return false;
        }

        if($password!==$password2)
        {
            echo "
            <script>
                alert('Password anda tidak sama');
            </script>
            ";
            return false;
        }

        $password=password_hash($password,PASSWORD_DEFAULT);

        mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password')");
        return mysqli_affected_rows($conn);
    }

?>