<?php
class Koneksi_db
{
    private $db_host = "localhost";
    private $db_user = "user";
    private $db_pass = "password";
    private $db_name = "database";

    private $con = false;
    private $hasil = array();

    public function connect() {
        if (!$this->con) {
            // Membuat koneksi ke MySQL
            $myconn = @mysql_connect($this->db_host, $this->db_user, $this->db_pass);
            @mysql_set_charset('utf8', $myconn);

            if ($myconn) {
                // Memilih database
                $seldb = @mysql_select_db($this->db_name, $myconn);
                if ($seldb) {
                    $this->con = true;
                    return true;
                } else {
                    array_push($this->hasil, mysql_error());
                    return false;
                }
            } else {
                array_push($this->hasil, mysql_error());
                return false;
            }
        } else {
            return true;
        }
    }
}
?>