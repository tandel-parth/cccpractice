<pre><?php
class Lib_Sql_Query_Connection
{
    protected $_conn = null;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        if (is_null($this->_conn)) {
            $this->_conn = mysqli_connect("localhost", "root", "", "ccc_practice");
            if ($this->_conn === false) {
                die("<h3 style='color: red;'>ERROR: Could not connect. "
                    . mysqli_connect_error() . "</h3>");
            }
        }
        return $this->_conn;

    }

    public function exec($sql)
    {
    	try {
    		$test = $this->connect()->query($sql);
    		// var_dump($this->connect()->error);
            return $test;
    	} catch(Exception $e) {

    		var_dump($e->getMessage());
    	}
    }

    public function fetchData($result)
    {

        if ($result) {
            if ($result->num_rows > 0) {
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                return $rows;
            } else {
                echo "<p>No records found.</p>";
            }
        } else {
            return $this->_conn->error;
        }
        $result->free_result();
    }
}
