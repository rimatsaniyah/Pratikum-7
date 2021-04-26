<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Halaman Login</h2>

        <!-- membuat form(untuk mengeksekusi login.php) -->
        <form methode="post" action="login.php">
        
            <!-- membuat tabel untuk memuat usernam dan katasandi -->
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Kata Sandi</td>
                    <td><input type="password" name="password"</td>
                </tr>
                <tr>
                    <td></td>
                    <!-- membuat input untuk submit login -->
                    <td><input type="submit" name="login" value="log In"></td>
                </tr>
            </table>
        </form>
    </body>
</html>